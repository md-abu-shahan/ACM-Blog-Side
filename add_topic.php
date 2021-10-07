<?php
    include("includes/header.php");
?>

    <div id="content"> <!-- #content Begin -->
        <div class="container"> <!-- container Begin -->
            <div class="col-md-12"> <!-- col-md-12 Begin -->

                <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        Add Topic
                    </li>
                </ul> <!-- breadcrumb finish -->

            </div> <!-- col-md-12 finish -->

            <div class="col-md-12"> <!-- col-md-9 Begin -->

                <div class="box"> <!-- box Begin -->

                    <div class="box-header"> <!-- box-header Begin -->

                        <center> <!-- center Begin -->

                            <h2>Add a new Poster </h2>

                        </center> <!-- center finish -->

                        <form action="add_topic.php" method="post" enctype="multipart/form-data"> <!-- form Begin -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Add Category: </label>

                                <select class="form-select" aria-label="Default select example" name="category">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Topic Name</label>

                                <input type="text" class="form-control" name="t_name" required>

                            </div> <!-- form-group finish -->

                            <textarea id="editor" name="editor">

                            </textarea>

                            <div class="text-center"> <!-- text-center Begin -->

                                <button type="submit" name="add" class="btn btn-primary">

                                    <i class="fa fa-user-md"></i> Submit

                                </button>

                            </div> <!-- text-center finish -->

                        </form> <!-- form finish -->

                    </div> <!-- box-header finish -->

                </div> <!-- box finish -->

            </div> <!-- col-md-9 finish -->

        </div> <!-- container finish -->
    </div> <!-- #content finish -->

    <?php 

    include("includes/footer.php")

    ?>

    <script src = "js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>

</body>
</html>  

<?php

if(isset($_POST['add'])){
    include("includes/db.php");
    $name = $_POST['t_name'];
    $category = $_POST['category'];
    $editor = $_POST['editor'];
    $u_name = $_SESSION['email'];
    $date = date("Y-m-d h:i:s");
    
    $insert = "insert into tutotial (title,category,author,added_time,editor) values ('$name','$category','$u_name','$date','$editor')";

    $run_customer = mysqli_query($con,$insert);
    echo "<script>alert('Insert Successfully done')</script>";
    echo "<script>window.open('index.php','_self')</script>";
    
}

?>