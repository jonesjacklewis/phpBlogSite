<!DOCTYPE html>
<html lang="en">
<?php

$page_title = "Jack's Blog | Create Post";

include_once "head.php";


if (isset($_POST["heading"])) {
    $heading = $_POST["heading"];
    $body = $_POST["body"];
    $date = date('Y-m-d');

    $sql = "INSERT INTO posts VALUES (null, '$heading', '$body', '$date');";

    if ($mysqli->query($sql) === FALSE) {
        echo "<script>window.alert('Error Posting');</script>";
    }

    echo "<script>window.location.href = './';</script>";
        
 
}

?>


<body>

    <?php include_once "header.php"; ?>

    <main>
        <h1 class="text-center">New Post</h1>
        <div class="container center_div">
            <form action="createPost.php" method="post">

                <label for="heading">Heading: </label>
                <input type="text" name="heading" id="heading">

                <textarea name="body" id="body"></textarea>
                <button type="submit">Submit</button>

            </form>
        </div>
    </main>





    <?php include_once "footer.php"; ?>

    <script>
        tinymce.init({
            selector: '#body',
            width: 600,
            height: 300,
            resize: false
        });
    </script>
</body>

</html>