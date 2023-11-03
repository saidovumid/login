<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="/pwz7J5l1g3-logo.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Buxdu
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text"  name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" name="s1">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="reg.php">Sign up</a>
        </div>
    </div>
</body>

<?
if(isset($_GET['s1'])){
    $login=$_GET['userName'];
    $password=$_GET['password'];
    $con=mysqli_connect('localhost','root','','registr');
    $sql="SELECT * FROM `user` WHERE user_name='{$login}' AND password='{$password}';";
    $r=mysqli_query($con,$sql);
    $q=mysqli_num_rows($r);
   
    if($q!=0){
        ?>
        <script>
            window.location.href='user.php';
        </script>
        <?
    }
    else{
        
        ?>
        <script>
            alert("Login yoki parol xato?");
        </script>
        <?
    }
}

?>

</html>