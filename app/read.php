<?php
session_start();
include "header.php";
include "db.php" ;


?>


<div class="container">

    <br>
    <br>
    <br>


    <form action="readerToDB.php" method="post" enctype="multipart/form-data">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">name</span>
            </div>
            <input type="file" name="file" accept=".xlsx" class="form-control">
        </div>
        <div class="mt-3">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>



    </form>


</div>


<?php include "footer.php" ?>
