<!DOCTYPE html>
<html>
    <head>
        <title>My New Blog</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
         crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="format-new.css">
        <script src="hello.js"></script>
    </head>
    <body>
        <button onclick="revealMessage()">Hello</button>
        <p id="hiddenMessage" style="display:none">Hi there!</p>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
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