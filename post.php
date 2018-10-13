<!DOCTYPE html>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <?php
                function getPostDetailsFromDatabase() {
                    $postTitle = rawurldecode($_GET["title"]);

                    include_once 'db_connect.php';
                    $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
                    $result = mysqli_query($conn, $sql);

                    $postDetails = mysqli_fetch_assoc($result);
                    return $postDetails;
                }
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>