<!DOCTYPE html>
<html lang="en">
<?php

include_once'config.php';

if(isset($_POST['criteria'])){
    $criteria = $_POST['criteria'];
}else{
    $criteria = "*";
}

if($criteria == "*"){
    $sql = "SELECT * FROM posts;";
}else{
    $sql = "SELECT * FROM posts WHERE `heading` LIKE '%$criteria%' or `body` LIKE '%$criteria%' OR `date` = '$criteria';";
}




$page_title = "Jack's Blog | Results for $criteria";

include_once "head.php";
?>

<body>

    <?php include_once "header.php"; ?>

    <h2 class="text-center">Results for '<?php echo $criteria; ?>'</h2>


    <?php 
    


    echo "<section class='basic-grid'>";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
  
      if (isset($_COOKIE["loggedIn"])) {
        while ($row = $result->fetch_assoc()) {
          $id = $row['id'];
          $heading = $row['heading'];
          $body = $row['body'];
          $date = $row['date'];
  
          echo "<div class='post' onclick='view($id)'>
        
          <h2 class=''text-center'>$heading</h2> <hr style='width:50%', size='3', color=white>  
          <hr style='width:50%', size='3', color=white>  
          <p>$date</p>
          <a href='edit.php?id=$id'>Edit</a>
          <a href='delete.php?id=$id'>Delete</a>
    
          </div>";
        }
      } else {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          $id = $row['id'];
          $heading = $row['heading'];
          $body = $row['body'];
          $date = $row['date'];
  
          echo "<div class='post' onclick='view($id)'>
        
        <h2 class=''text-center'>$heading</h2> <hr style='width:50%', size='3', color=white>  
        <hr style='width:50%', size='3', color=white>  
        <p>$date</p>
  
        </div>";
        }
      }
    }
  
    echo "</section>"
    
    
    ?>


    <?php include_once "footer.php"; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      function view(id){
        window.location.href = "post.php?id=" + id;
      } </script>
    </body>
