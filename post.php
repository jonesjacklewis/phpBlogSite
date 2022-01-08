<!DOCTYPE html>
<html lang="en">
<?php

include_once 'config.php';

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
    <div >
        <?php echo $body; ?>
    </div>
    <p><?php echo $date; ?></p>



    <?php include_once "footer.php"; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    

</body>

</html>