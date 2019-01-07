<?php 
session_start();
ob_start();
$user_data= $_SESSION['$loginflagb'];
$db_userid=$_SESSION['$user_ID'];

$_SESSION['$U_ID']=$db_userid;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/pet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <div id="container">
            <header>
            <h1>Business's Pet Store</h1>
            </header>
            <div id="ColLeft">
                <nav id="menu">
                    <text id="userdata"><?php print("Welcome back  $user_data !");?></text>
                        <a href="Logout.php">Logout</a>
                        <a href="password_change.php">Change Password</a>
                </nav>
            </div>
        <div id="ColRight">
    <div id="pagebaner">
        <img src="images/pet store banner 5 png.png">
    </div>
    <div id="pagecontent">
        <h2>My Business</h2> <br>
        Required information is marked with an asterik (*). <br><br>
        <table>
                <tbody><tr>
                <td>Business Name:</td>
                <td><input type="text" name="Bname "></td>
                </tr>
                <tr>
                <td>*Service:</td>
                <td><input type="text" name="pwd"></td>
                </tr>      
                </tbody>
        </table>
                <br>
                <input type="button" value="Add New One" name="Nitem" >
       <footer><em></em>Copyright &copy; 2018 Pet Store</em>
        <br><em><a href="mailto:aditya@ravikumar.com">aditya@ravikumar.com</a></em></footer>
    </div>
    </div>
</div>
</body>
</html>