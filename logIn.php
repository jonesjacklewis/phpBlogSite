<!DOCTYPE html>
<html lang="en">
<?php

$page_title = "Jack's Blog | Log In";

include_once "head.php";

if(isset($_POST["username"])){
    $username = $_POST["username"];
    $password = encrypt($_POST["password"]);
  
    $sql = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password';";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        setcookie("loggedIn", "true");
        echo "<script>window.location.href = 'index.php';</script>";
    }else{
        echo "<script>window.alert('Invalid Credentials');</script>";
    }
    
}

?>


<body>

    <?php include_once "header.php"; ?>

    <h2 class="text-center">Log In</h2>


    <div class="form-center">

        <form action="login.php" method="post" class="form-horizontal form-center">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"> <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"> <br>
            <button type="submit">Log In</button>
        </form>

    </div>



    <?php include_once "footer.php"; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>