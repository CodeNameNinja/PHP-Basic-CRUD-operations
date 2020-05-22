<?php include 'db.php';
include 'functions.php';

if (isset($_POST['submit'])) {
    createRows();   
}

?>


<?php include "includes/header.php";

?>
    <div class="container">
    <h1 class = "text-center">Create</h1>
    <hr>
        <div class="row align-content-center justify-content-center h-100">
            
            <div class="col-sm-6">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <!-- <div class="row align-content-center justify-content-center">

            </pre>

        </div> -->
    </div>
    <?php include "includes/footer.php"?>