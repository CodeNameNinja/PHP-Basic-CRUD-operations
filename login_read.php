<?php include 'db.php';
include 'functions.php';
?>


<?php include "includes/header.php";

?>
<div class="container ">
    <h1 class="text-center">All Users</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-sm-6 ">

            <div class="card">
                <div class="card-body">

                    <pre>
        <?php getAllRows() ?>
    </pre>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include "includes/footer.php" ?>