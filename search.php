<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    
<?php include "includes/navigation.php"; ?>   

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                
                
                <?php
                if(isset($_POST['submit'])) {
                    
                $search = $_POST['search'];
                    
                    
                $per_page = 5;
                
                if(isset($_GET['page'])) {
                    
                    
                    
                    
                    $page = $_GET['page'];
                
                } else {
                    
                    $page = "";
                }
                
                if($page == "" || $page == 1) {
                
                $page_1 = 0;
                
                } else {
                    
                    $page_1 = ($page * $per_page) - $per_page;
                    
                }
                
                
                $post_query_count = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' AND post_status = 'published' ";
                $find_count = mysqli_query($connection,$post_query_count);
                $count = mysqli_num_rows($find_count);
                
                $count = ceil($count/$per_page);
                
                
    
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' AND post_status = 'published' ORDER BY post_id DESC LIMIT $page_1, $per_page ";
                $search_query = mysqli_query($connection, $query);
                
                if(!$search_query) {
                    die("QUERY FAILED" . mysqli_error($connection));
                }
            
                $search_count = mysqli_num_rows($search_query);
                    
                if($search_count == 0) {
                    
                    echo "<h1>NO RESULT</h1>";
                } else {

        while($row = mysqli_fetch_assoc($search_query)) {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];
        
               ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title . ' ' . $count; ?></a>
                </h2>
                <p class="lead">
                    by <a href="author_posts.php?author=<?php echo $post_author; ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>      
                 
            
        <?php } 
                
                
                
                
                
            
               
               }
                
                } 
                
                
                
        ?>
                
                
        
                
                 
                   

            </div>

            <!-- Blog Sidebar Widgets Column -->

<?php include "includes/sidebar.php"; ?>           

        </div>
        <!-- /.row -->
        
        <ul class="pager">
        <?php
            
        $query = "SELECT post_tags FROM posts WHERE post_tags LIKE '%$search%' ";
            
        $select_all_categories_query = mysqli_query($connection,$query);

//        while($row = mysqli_fetch_assoc($select_all_categories_query)) {

            echo $search = $row['post_tags'];
            
            
//        for($i=1; $i <= $count; $i++) {
//            
//            if($i == $page) {
//              
//            echo "<li><a href='search.php?search={$search}&page={$i}'>{$i}</a></li>";
//                
//            } else {
//            
////            echo "<li><a href='category.php?category={$cat_id}&page={$i}'>{$i}</a></li>";
//                echo "<li><a href='search.php?search={$search}&page={$i}'>{$i}</a></li>";
//                
//            }
//            
//        }
//    }

            
            ?>    
        
            
        </ul>
        

        <hr>

<?php include "includes/footer.php"; ?>    

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
