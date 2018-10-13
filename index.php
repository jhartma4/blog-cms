<?php include_once 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>My New Blog</title>
        <link rel="stylesheet" type="text/css" href="format-new.css">
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <?php
            function getPostTitlesFromDatabase() {
                $postTitles = array("Post 1", "Post 2", "Post 3");
                return $postTitles;
            }
        ?>
        <main>
            <ul class="blog-list">
                <?php 
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
                }
        ?>
            </ul>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>