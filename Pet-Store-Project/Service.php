<?
    include 'validation.php';
   if(($fdbfire AND $ldbfire AND $edbfire AND $phdbfire AND $Bname)==1)
        { 
                    $id=(uniqid());
                    $pwd=(string)(substr("$id",-5,7));
                    #print("pwd :hello@$pwd");
                    $uniqid=substr(("$id"),-6,-2);
                    print(" uid: $uniqid");
                    $value=rand(12156,99999);
                    $Sid=rand(100,900);
                    $to = "$email";
                    $subject = "Password Verification";
                    $txt = "Dear $fname $lname  your are registerd as Business at The Petstore ,Arlington, TX. Your credentials as as follows : \n Email :$email \n Password: hello@$pwd  \n Please use the same for loging inn. Have a great time!" ;
                    $headers = "From: pet@petservice.com" . "\r\n" ;
                    mail($to,$subject,$txt,$headers);  
                    $sql="INSERT INTO service_data(b_id,fname,lname,phone_no,email_id,user_id,bname) Values('$value','$fname','$lname',
                    '$phoneno','$email ','user_$uniqid','$Bname')";  
                    $sql1="INSERT INTO services(service_id,b_id) VALUES ($Sid,$value)";
                    $sql2="INSERT INTO data(user_id,password,email_id,role_id) Values('WDM_$uniqid','hello@$pwd','$email','2')";
                if(mysqli_query($link,$sql) )
                 {
                   if(mysqli_query($link,$sql1))
                    {   
                        if(mysqli_query($link,$sql2))
                        {
                             echo '<script language="javascript">';
                        echo 'alert("you are registered, check your mail for Login details")';
                        echo '</script>';
                        }
                    }
                 }
                else
                {
                    echo "Error : Add Error";
                }
       
        }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Service</title>
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
        <img src="images/pet store banner 5 png.png">
    </div>

    <div id="pagecontent">
        <h2>Service</h2> <br>
        Required information is marked with an asterik (*). <br><br>
        <table>
            <form action="Service.php" method="post" id="form1">    
            <tbody>
                <tr>
                <td>*First Name:</td>
                <td><input type="text" name="FName"   value="<?php echo isset ($_POST["FName"])? $_POST["FName"] : '';?>"><text id="error"><?php if(isset($ferror)) echo$ferror;?></text></td>
                </tr>   

                <tr>
                <td>*Last Name:</td>
                <td><input type="text" name="LName"  value="<?php echo isset ($_POST["LName"])? $_POST["LName"] : '';?>"  ><text id="error"><?php if(isset($lerror)) echo$lerror;?></text>
                </td>
                </tr>
                
                <tr>
                <td>*E-mail:</td>
                <td><input type="email" name="emailid"  value="<?php echo isset ($_POST["emailid"])? $_POST["emailid"] : '';?>"    ><text id="error"><?php if(isset($eerror)) echo$eerror;?></text></td>
                </tr>

                <tr>
                <td>Phone:</td>
                <td><input type ="Phno" name="Phno"  value="<?php echo isset ($_POST["Phno"])? $_POST["Phno"] : '';?>"    ><text id="error"><?php if(isset($pherror)) echo$pherror;?></text></td>
                </tr>
                <tr>
                <td>Business Name:</td>
                <td><input type="text" name="BName"  value="<?php echo isset ($_POST["BName"])? $_POST["BName"] : '';?>"></td>
                </tr>     
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