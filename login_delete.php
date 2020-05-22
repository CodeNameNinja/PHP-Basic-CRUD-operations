<?php include 'db.php';
include 'functions.php';
?>

<?php
if(isset($_POST['DELETE'])){
    deleteRows();
}
?>
<?php include "includes/header.php";

?>
    <div class="container">
        <h1 class="text-center">Delete</h1>
        <hr>
        <div class="row align-content-center justify-content-center h-100">
            <div class="col-sm-6">
                <form action="login_delete.php" method="post">
                    
                    <div class="form-group">
                        <select name="id" id="id" class="form-control form-control-sm">
                            <?php
                            showAllData();
                            ?>
                        </select>
                    </div>
                    <button class="btn btn-block btn-danger" type="submit" name="DELETE">Delete</button>
                </form>
            </div>
        </div>
    </div>
<?php include "includes/footer.php"?>