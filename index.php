<?php
    include("includes/header.php");


    $qry = "select * from tutotial where category = 1;";
    $res = mysqli_query($con, $qry);
    $t1 = mysqli_num_rows($res);

    $qry = "select * from tutotial where category = 2;";
    $res = mysqli_query($con, $qry);
    $t2 = mysqli_num_rows($res);

    $qry = "select * from tutotial where category = 3;";
    $res = mysqli_query($con, $qry);
    $t3 = mysqli_num_rows($res);
?>
    
    <div id="advantages"> <!-- #advantages Begin -->
        
        <div class="container"> <!-- container Begin -->
            
            <div class="same-height-row"> <!-- same-height-row Begin -->
                
                <div class="col-sm-4"> <!-- col-sm-4 Begin-->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon">  <!-- icon Begin -->
                            
                            <i class="fa fa-heart"></i>
                            
                        </div> <!-- icon finish -->
                        
                        <h3><a href="#">Category 1</a></h3>
                        
                        <p>Total Topic : <?php echo $t1;?></p>
                        
                    </div> <!-- box same-height finish -->
                    
                </div> <!-- col-sm-4 finish -->
                
                <div class="col-sm-4"> <!-- col-sm-4 Begin-->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon">  <!-- icon Begin -->
                            
                            <i class="fa fa-tag"></i>
                            
                        </div> <!-- icon finish -->
                        
                        <h3><a href="#">Category 2</a></h3>
                        
                        <p>Total Topic : <?php echo $t2;?></p>
                        
                    </div> <!-- box same-height finish -->
                    
                </div> <!-- col-sm-4 finish -->
                
                <div class="col-sm-4"> <!-- col-sm-4 Begin-->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon">  <!-- icon Begin -->
                            
                            <i class="fa fa-thumbs-up"></i>
                            
                        </div> <!-- icon finish -->
                        
                        <h3><a href="#">Category 3</a></h3>
                        
                        <p>Total Topic : <?php echo $t3;?></p>
                        
                    </div> <!-- box same-height finish -->
                    
                </div> <!-- col-sm-4 finish -->
                
            </div> <!-- same-height-row finish -->
            
        </div> <!-- container finish -->
        
    </div><!-- advantages finish -->
    
    <div id="hot"> <!-- #hot Begin -->
        
        <div class="box"> <!-- box Begin -->
            
            <div class="container"> <!-- container Begin -->
                
                <div class="col-md-12"> <!-- col-md-12 Begin -->
                    
                    <h2>
                        Our Latest Topic.
                    </h2>
                    
                </div> <!-- col-md-12 finish -->
                
            </div> <!-- container finish -->
            
        </div> <!-- box finish -->
        
    </div> <!-- #hot finish -->
    
    <div id="content" class="container"> <!-- container Begin -->
        
        <div class="row my-lg-2"> <!-- row Begin -->

            <div class="col-lg-4 my-2"> <!-- col-md-12 Begin -->
                <h4 class="text-danger"> Category 1:<h4>
                <h2 class="text-primary">
                    <?php
                        $que="SELECT * FROM tutotial WHERE id = (SELECT MAX(id) FROM tutotial where category=1)";
                        $res = mysqli_query($con, $que);
                        $row = mysqli_fetch_assoc($res);
                        echo '<li><a href="categoty_1.php?tid=' . $row['id']. '">'. $row['title'] . '</a></li>';
                    ?>
                     
                </h2>
                    
            </div>
            <div class="col-lg-4 my-2"> <!-- col-md-12 Begin -->
                    
                <h4 class="text-danger"> Category 2:<h4>
                <h2 class="text-primary">
                    <?php
                        $que1="SELECT * FROM tutotial WHERE id = (SELECT MAX(id) FROM tutotial where category=2)";
                        $res1 = mysqli_query($con, $que1);
                        $row1 = mysqli_fetch_assoc($res1);
                        echo '<li><a href="categoty_2.php?tid=' . $row1['id']. '">'. $row1['title'] . '</a></li>';
                    ?>
                </h2>
                    
            </div>
            <div class="col-lg-4 my-2"> <!-- col-md-12 Begin -->
                    
                <h4 class="text-danger"> Category 3:<h4>
                <h2 class="text-primary">
                    <?php
                        $que2="SELECT * FROM tutotial WHERE id = (SELECT MAX(id) FROM tutotial where category=3)";
                        $res2 = mysqli_query($con, $que2);
                        $row2 = mysqli_fetch_assoc($res2);
                        echo '<li><a href="categoty_3.php?tid=' . $row2['id']. '">'. $row2['title'] . '</a></li>';
                    ?>
                </h2>
                    
            </div>
        
        </div> <!-- row finish -->
        
    </div> <!-- container finish -->
    
    <?php 
    
    include("includes/footer.php")
    
    ?>
    
    <script src = "js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>   