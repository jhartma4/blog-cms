<!DOCTYPE html>

<html>
    <head>
        <title>My New Blog</title>
        <link rel="stylesheet" type="text/css" href="format-new.css">
        <script src="script.js"></script>
    </head>
    <body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
        
    <div id="sortable-blog-list">
    <input class="search" placeholder="Search" />
    <button class="sort" data-sort="title">Sort</button>
    <ul class="list">
        <?php
            $postTitles = getPostTitlesFromDatabase();
            foreach($postTitles as $postTitle) {
                echo "<li><a href='post.php?title=" . $postTitle 

                    . "' class='title'>" . $postTitle . "</a></li>";
            }
        ?>
    </ul>
    </div>

        <button onclick="revealMessage()">Hello</button>
        <p id="hiddenMessage" style="display:none">Hi there!</p>
        
        <ul class="blog-list">
        <?php
            function getPostTitlesFromDatabase() {
                // Get all the post titles from the posts table
                include_once 'db_connect.php';
                $sql = "SELECT title FROM posts";
                $result = mysqli_query($conn, $sql);    

                // Get each result row as an assoc array, then add title to $postTitles
                $postTitles = array();
                while($row = mysqli_fetch_assoc($result)){
                    array_push($postTitles, $row['title']);
                }
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