<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<div class="row">
    <main>
        <h2>New Post</h2>
    </main>
</div>
    <form action="/submit-post.php" method="get">
        First name: <input type="text" name="fname"><br>
        Last name: <input type="text" name="lname"><br>
        Date: <input type="date" name="date"><br>
        Title: <input type="text" name="title"><br>
        <textarea rows="4" cols="50">
        At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
        </textarea>
        <button type="submit" value="Submit">Submit</button>  
        <button type="reset" value="Reset">Reset</button>    
    </form>
<?php include 'footer.php' ?>