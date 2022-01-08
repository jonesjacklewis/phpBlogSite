<header>
    <nav class="navbar navbar-dark bg-primary text-white">
        <form class="form-inline" action="results.php" method="post">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Search Post</span>
                </div>
                <input type="text" class="form-control" placeholder="Search Post" aria-label="criteria" name="criteria" id="criteria" aria-describedby="basic-addon1">
            </div>
        </form>
        <h1 onclick="home()">Jack's Blog</h1>
        <?php 
        
        if(isset($_COOKIE['loggedIn'])){
            echo '<a class="btn btn-outline-secondary text-white" href="createPost.php">New Post</a>';
            echo '<a class="btn btn-outline-secondary text-white" href="signout.php">Sign Out</a>';
        }else{
            echo '<a class="btn btn-outline-secondary text-white" href="login.php">Log In</a>';
        }
        
        ?>
    </nav>
</header>

<script>
    function home(){
        window.location.href = "index.php";
    }
</script>