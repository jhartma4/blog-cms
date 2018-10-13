<!DOCTYPE html>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <?php
                function getPostDetailsFromDatabase() {
                    // Get the post title
                    $postTitle = rawurldecode($_GET["title"]);

                    // Get the post that matches the postTitle
                    include_once 'db_connect.php';
                    $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
                    $result = mysqli_query($conn, $sql);

                    // Get the first row from the result as an associative array
                    $postDetails = mysqli_fetch_assoc($result);
                    return $postDetails;
                }
                
                // Post details contains all the data to generate the blog from
                $postDetails = getPostDetailsFromDatabase();
            ?>
            <h2 class="post-title"><?php echo $postDetails["title"]; ?></h2>
            <div class="post-date"><?php echo $postDetails["date"]; ?></div>
            <div class="post-content"><?php echo $postDetails["content"]; ?></div>
            <div class="post-author"><?php echo $postDetails["author"]; ?></div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>