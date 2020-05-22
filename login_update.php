<?php include 'db.php';
include 'functions.php';
?>

<?php
if(isset($_POST['submit'])){
    UpdateTable();
}
?>
<?php include "includes/header.php";

?>
    <div class="container">
        <h1 class="text-center">Update</h1>
        <hr>
        <div class="row align-content-center justify-content-center h-100">
            <div class="col-sm-6">
                <form action="login_update.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <select name="id" id="id" class="form-control form-control-sm">
                            <?php
                            showAllData();
                            ?>
                        </select>
                    </div>
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"?>