<!DOCTYPE html>
<html lang="en">
<?php

include_once 'config.php';

$heading = "Heading";
$body = "Body";
$date = "2002-04-17";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];
    $sql = "DELETE FROM `posts` WHERE `posts`.`id` = $id;";
    $mysqli->query($sql);

    echo "<script>window.alert('Post Deleted');window.location.href='index.php';</script>";
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = 1;
}

$sql = "SELECT * FROM posts WHERE id=$id;";

$result = $mysqli->query($sql);
if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $heading = $row['heading'];
        $body = $row['body'];
        $date = $row['date'];
    }
}

$page_title = "Jack's Blog | $heading";

include_once "head.php";


?>

<body>

    <?php include_once "header.php"; ?>

    <h3 class="text-center"><?php echo $heading; ?></h3>
    <div>
        <?php echo $body; ?>
    </div>
    <p><?php echo $date; ?></p>


    <hr>

    <h3 class="text-danger text-center">Are You Sure You Want To Delete The Above Post?</h3>

    <form action="delete.php?id= <?php echo $id;?>" method="post">

    <button type="submit" class="btn btn-danger">Delete Post</button>

    </form>



    <?php include_once "footer.php"; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    

</body>

</html>