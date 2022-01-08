<!DOCTYPE html>
<html lang="en">
<?php

include_once 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = 1;
}

if (isset($_POST["heading"])) {
    $id = $_POST["id"];
    $heading = $_POST["heading"];
    $body = $_POST["body"];
    $date = date('Y-m-d');

    $sql = "UPDATE `posts` SET `heading` = '$heading', `body` = '$body', `date` = '$date' WHERE `posts`.`id` = $id;";



    
    if ($mysqli->query($sql) === FALSE) {
        echo "<script>window.alert('Error Updating');</script>";
    }else{
        echo "<script>window.location.href = './';</script>";
    }

        
 
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

$page_title = "Jack's Blog | Editing $heading";

include_once "head.php";


?>

<body>

    <?php include_once "header.php"; ?>

    <main>
        <h1 class="text-center">Edit Post</h1>
        <div class="container center_div">
            <form action="edit.php" method="post">

                <input type="text" name="id" id="id" value="<?php echo $id ;?>">

                <label for="heading">Heading: </label>
                <input type="text" name="heading" id="heading">

                <textarea name="body" id="body"></textarea>
                <button type="submit">Edit</button>

            </form>
        </div>
    </main>





    <?php include_once "footer.php"; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        tinymce.init({
            selector: '#body',
            width: 600,
            height: 300,
            resize: false
        });


        document.getElementById("heading").value = "<?php echo $heading ?>";
        document.getElementById("body").value = `<?php echo implode("",explode("\n",$body)); ?>`;

    </script>

</body>

</html>