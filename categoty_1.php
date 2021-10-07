<?php
    $t_id = $_GET['tid'];
    include("includes/header.php");
    $que = "select * from tutotial where id={$t_id} AND category=1;";
    $result=mysqli_query($con, $que);
    
    while ($row = mysqli_fetch_assoc($result)){
        $tit = $row['title'];
        $cat = $row['category'];
        $auth = $row['author'];
        $content = $row['editor'];
    } 
?>

<div id="content"> <!-- #content Begin -->
    <div class="container"> <!-- container Begin -->
        <div class="col-md-12"> <!-- col-md-12 Begin -->

            <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                <li>

                    <a href="index.php">Home</a>

                </li>
                <li>
                    Category 1
                </li>
            </ul> <!-- breadcrumb finish -->

        </div> <!-- col-md-12 finish -->

        <div class="col-md-3"> <!-- col-md-3 Begin -->

            <div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu Begin -->
                <div class="panel-heading"> <!-- panel-heading Begin -->
                    <h3 class="panel-title">Topic Names</h3>
                </div> <!-- panel-heading finish -->
                
                <div class="panel-body"> <!-- panel-body Begin -->
                    <ul class="nav nav-pills nav-stacked category-menu"> <!-- nav nav-pills nav-stacked category-menu Begin -->

                    <?php 
                            $que = "select * from tutotial where category=1;";
                            $result=mysqli_query($con, $que);
                            //echo $result;
                            while ($row = mysqli_fetch_assoc($result)){
                                echo '<li><a href="categoty_1.php?tid=' . $row['id']. '">'. $row['title'] . '</a></li>';
                             } 
                        
                    ?>

                    </ul> <!-- nav nav-pills nav-stacked category-menu finish -->
                </div> <!-- panel-body finish -->
                
            </div> <!-- panel panel-default sidebar-menu finish -->

        </div> <!-- col-md-3 finish -->

        <div class="col-md-9"> <!-- col-md-9 Begin -->
           
        <div class="box">
            <h1>Topic name: <?php echo $tit; ?></h1>
            <h1>Poster name: <?php echo $auth; ?></h1>
            <div><?php echo $content; ?></div>
        </div>
            
        </div> <!-- col-md-9 finish -->
            <div class="col-md-9"> <!-- col-md-9 Begin -->

                <div class='box'><!-- box Begin -->
                    <textarea class="col-lg-10"></textarea>
                    <button name="login" value="comment" class="btn btn-primary">
                        
                        <i class="fa fa-sign-in"></i> Comment
                        
                    </button>
                
                </div> <!-- box finish -->
                
            </div> <!-- col-md-9 finish -->
    </div> <!-- container finish -->
</div> <!-- #content finish -->

<?php 

include("includes/footer.php");

?>

<script src = "js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>   