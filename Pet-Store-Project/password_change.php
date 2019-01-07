<?php 
//include 'validation.php';
session_start();
ob_start();
$User_ID=$_SESSION['$U_ID'];
$link = mysqli_connect("localhost:3306", "adityara_wdm2018", "wdm2018@", "adityara_wdm4");
                     
    // Checking connectivity
    if($link === false){
        die("ERROR: Could not connect! " . mysqli_connect_error());
    }
    else 
    {
        
        echo("database connected");
    }  
    if(isset($_POST['submit']))
    {
         $Old_Pwd=$_REQUEST['pwdold'];
         $New_Pwd=$_REQUEST['pwdnew'];
    if(empty($Old_Pwd))
    {
         $pwderror="*Password Cannot be empty*";
    }
    else
    {   
        $Old_Pwd=rtrim($_POST['pwdold']);
    }
    if(empty($New_Pwd))
    {
        $pwderror="*Password Cannot be empty*";
    }
    else
    {
        $New_Pwd=rtrim($_POST['pwdnew']);   
    }
    if(isset($New_Pwd) AND $Old_Pwd )
    {
       $sql="SELECT password  FROM data WHERE user_id='$User_ID'";  
                    $result = $link->query($sql);
                 if ($result->num_rows > 0)
                 {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    $db_pwd=rtrim($row["password"]);
                }
                 }
                if(empty($db_pwd))
                {
                     $pwderror="*Enter correct password*";   
                }
                else if(isset($db_pwd))
                {
                    
                    $sql="UPDATE data SET  password = '$New_Pwd' WHERE user_id='$User_ID'";
                    $result = $link->query($sql);
                    if ($result->num_rows > 0)
                 {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    $db_newpwd=rtrim($row["password"]);
                }
                 }
                        echo '<script language="javascript">';
                        echo 'alert("Your Password has been changed Successfully!")';
                        echo '</script>';
                }
        }
} 

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
            <h1>Pet Store</h1>
            </header>
            <div id="ColLeft">
                <nav id="menu">
                 <a href="Logout.php">Logout</a>
                 <a href="password_change.php">Change Password</a>
                </nav>
            </div>
    
        <div id="ColRight">

    <div id="pagebaner">
        <img src="images/pet store banner 5 png.png">
    </div>

    <div id="pagecontent">
        <h2>Password Change</h2> <br>

        Required information is marked with an asterik (*). <br><br>

        <table>
               <form method ="POST">
                   
                <tbody><tr>
                
                <td>Enter Old Password*:</td>
                <td><input type="password" name="pwdold"  value="<?php echo isset ($_POST["pwdold"])? $_POST["pwdold"] : '';?>"><text id="error"><?php if(isset($pwderror)) echo$pwderror;?></text></td>
                </tr>
                <tr>
                <td>Enter New Password*:</td>
                <td><input type="password" name="pwdnew"  value="<?php echo isset ($_POST["pwdnew"])? $_POST["pwdnew"] : '';?>"><text id="error"><?php if(isset($pwderror)) echo$pwderror;?></text></td>
                </tr>      
                </tbody>
              
        </table>


                <br>
                <input type="submit" value="login" name='submit'>
                
                  </form>
    
       <footer><em></em>Copyright &copy; 2018 Pet Store</em>
        <br><em><a href="mailto:aditya@ravikumar.com">aditya@ravikumar.com</a></em></footer>
    </div>
    </div>
</div>
</body>
</html>

