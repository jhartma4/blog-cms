<body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <?php
                function getPostDetailsFromDatabase() {
                    $postDetails = array('title' => 'Post 1', 
                                        'date' => '09/27/2018',
                                        'author' => 'jhartman',
                                        'content' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas bibendum sodales libero id lobortis. Phasellus condimentum sollicitudin neque porta pellentesque. Pellentesque at sem sed dui interdum molestie eget vel eros. Nullam tempor felis ut dui molestie, non sollicitudin est aliquam. Aliquam laoreet ex vel sagittis porttitor. Donec vitae sem ac est semper lobortis. Sed a nibh a est condimentum pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam nec feugiat neque. Duis egestas odio eget nunc efficitur, eu viverra lacus pulvinar. Vestibulum urna tellus, tempus eu metus vel, imperdiet tincidunt magna.</p>'                                         
                                        );
                    return $postDetails;
                }
                
                $postDetails = getPostDetailsFromDatabase();
            ?>
            <h2 class="post-title"><?php echo $postDetails["title"]; ?></h2>
            <div class="post-date"><?php echo $postDetails["date"]; ?></div>
            <div class="post-content"><?php echo $postDetails["content"]; ?></div>
            <div class="post-author"><?php echo $postDetails["author"]; ?></div>
        </main>
        <?php include 'footer.php' ?>
</body>