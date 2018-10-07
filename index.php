<!DOCTYPE html>
    <head>
        <title>My New Blog</title>
        <link rel="stylesheet" type="text/css" href="format-new.css">
    </head>
<body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <?php
            function getPostTitlesFromDatabase() {
                $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
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