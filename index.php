<?php
session_start();
session_destroy();

include "partials/_header.php";

if(isset($_POST['login_btn'])){
    $_SESSION['login'] = true;
    $_SESSION['username'] = $_POST['username'];
}
if(isset($_SESSION['login']) && $_SESSION['login'] == true){?>
<div class="container">
    <h2> <?php if(isset($_SESSION['username']) && $_SESSION['username'] !== ""){
        echo "Hey, " . $_SESSION['username'];
    };?></h2>
    <button id="fetch">Get the list</button>
    <p id="text1">
        Get the details about customers e.g. Name, Username, Website, Phone, Address etc.
    </p>

    <p id="text2"> Details about customers :</p>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Website</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Company</th>
        </thead>
        <tbody id="tb-1"> </tbody>
    </table>
</div>
<?php }
else{?>

<div class="container">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <h1>Login</h1>
        <input type="text" placeholder="Username" name="username" required />
        <input type="password" placeholder="Password" required />
        <button type="submit" id="login_btn" name="login_btn">Login</button>
    </form>
</div>
<?php }
include 'partials/_scripts.php';
?>
</body>

</html>