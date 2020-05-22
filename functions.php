<?php include 'db.php';
?>
<?php

function createRows()
{
    global  $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Santatises username and password to prevent SQL injection
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);


    //Encrypting Password
    $hashFormat = "$2y$10$";
    $salt = "thisisasillystringiuse";
    $hash_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hash_and_salt);

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);
    if (!$result) return die("Query Failed" . mysqli_error($connection, $query));
    else  echo "record create.";
}
function getAllRows()
{
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}
function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    if (!$result) return die("Query Failed" . mysqli_error($connection, $query));

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function UpdateTable()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Update faild." . mysqli_error($connection));
    }
}

function deleteRows()
{
    global $connection;
    $id = $_POST['id'];

    $query = "DELETE from users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Update faild." . mysqli_error($connection));
    }
    else{
        echo "<h1>Succesfully deleted. </h1>";
    }
}
