<?php
include 'validation.php';

$link = mysqli_connect("localhost:3306", "adityara_wdm2018", "wdm2018@", "adityara_wdm4");
                     
    // Checking connectivity
    if($link === false){
        die("ERROR: Could not connect! " . mysqli_connect_error());
    }
    else 
    {
        
        echo("database connected");
    }
       if(($fdbfire AND $ldbfire AND $edbfire AND $phdbfire)==1)
        {               
                    $sql="INSERT INTO Contactus(fname,lname,email_id,phone_no,comments) Values('$fname','$lname','$email','$phoneno','$comments')"; 
                    
                    
                
             if(mysqli_query($link,$sql))
                {
                      echo "Records Added";
                }
            else
                {
                    echo"adding error";           
                }
        }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/pet.css" />
</head>
<body>
        <div id="container">
            <header>
            <h1>Pet Store</h1>
            </header>
            <div id="ColLeft">
                <nav id="menu">
                        <a href="index.html">Home</a>
                        <a href="AboutUs.html">About Us</a>
                        <a href="ContactUs.php">Contact Us</a> 
                        <a href="Client.php">Client</a> 
                        <a href="Service.php">Service</a>
                        <a href="Login.php">Login</a>
                </nav>
            </div>
        <div id="ColRight">
    <div id="pagebaner">
        <img src="images/pet store banner 7 png.png">
    </div>
    <div id="pagecontent">
        <h2>Contact Us</h2> <br>
        Required information is marked with an asterik (*). <br><br>
        <table>
            <form action="ContactUs.php" method="post" name="form_contctus">     
            <tbody>
                <tr>
                <td>*First Name:</td>
                <td><input type="text" name="FName"  value="<?php echo isset ($_POST["FName"])? $_POST["FName"] : '';?>"><text id="error"><?php if(isset($ferror)) echo$ferror;?></text></td>
                </tr>   
                <tr>
                <td>*Last Name:</td>
                <td><input type="text" name="LName" value="<?php echo isset ($_POST["LName"])? $_POST["LName"] : '';?>"><text id="error"><?php if(isset($lerror)) echo$lerror;?></text>
                </td>
                </tr>
                
                <tr>
                <td>*E-mail:</td>
                <td><input type="email" name="emailid" value="<?php echo isset ($_POST["emailid"])? $_POST["emailid"] : '';?>"><text id="error"><?php if(isset($eerror)) echo$eerror;?></text></td>
                </tr>

                <tr>
                <td>Phone:</td>
                <td><input type ="Phno" name="Phno" value="<?php echo isset ($_POST["Phno"])? $_POST["Phno"] : '';?>"    ><text id="error"><?php if(isset($pherror)) echo$pherror;?></text></td>
                </tr>
                <tr>
                <td>*Comments: </td>
                <td><textarea name ="Tarea" ><?php echo isset ($_POST["Tarea"])? $_POST["Tarea"] : '';?></textarea><text id="error"><?php if(isset($terror)) echo$terror;?></text></td></tr>     
               </tbody>
            </table>
                    <br>
            <input type="submit" name="submit" value="submit">
                    <br>
            </form>
                <br>
       <footer><em></em>Copyright &copy; 2018 Pet Store</em>
        <br><em><a href="mailto:aditya@ravikumar.com">aditya@ravikumar.com</a></em></footer>
    </div>
    </div>
</div>
</body>
</html>