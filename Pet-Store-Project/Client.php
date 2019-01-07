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
                    $id=(uniqid());
                    $pwd=(string)(substr("$id",-4,6));
                    #print("pwd :hello@$pwd");
                    $uniqid=substr(("$id"),4,-6);
                    print(" uid: $uniqid");
                    $to = "$email";
                    $subject = "Password Verification";
                    $txt = "Dear $fname $lname , Your credentiels are as follows : \n Email :$email \nPassword: hello@$pwd" ;
                    $headers = "From: pet@petservice.com" . "\r\n" ;
                    mail($to,$subject,$txt,$headers);  
                    $sql1="INSERT INTO data(user_id,password,email_id,role_id) Values('Petstr_$uniqid','hello@$pwd','$email','1')";
                if(mysqli_query($link,$sql1))
                    {
                         $sql="INSERT INTO client(fname,lname,phone_no,email_id,service_id,user_id,client_id) Values('$fname','$lname','$phoneno','$email','','cid_$uniqid','')";
                       //  echo "insert stmt $sql";       
                        
                
                        if(mysqli_query($link,$sql))
                            {   
                                echo '<script language="javascript">';
                                echo 'alert("you are registered, check your mail for Login details")';
                                echo '</script>';
                            } 
                            else
                            {
                                /* echo "child error";   */
                            }      
                    }
                else
                {
                    echo "Error : Add Error";
                }
        }
?>

<html>
        <head>
            <title>Client</title>
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
        <h2>Client</h2> <br>
        Required information is marked with an asterik (*). <br><br>
        <table>
            <form action="Client.php" method="post" id="form1">           
            <tbody>
                <tr>
                <td>*First Name:</td> 
                <td><input type="text" name="FName" required value="<?php echo isset ($_POST["FName"])? $_POST["FName"] : ''; ?>" ><text id="error"><?php if(isset($ferror)) echo$ferror;?></text>
                </td>
                </tr>   
                <tr>
                <td>*Last Name:</td>
                <td><input type="text" name="LName" required  value="<?php echo isset ($_POST["LName"])? $_POST["LName"] : '';?>"  ><text id="error"><?php if(isset($lerror)) echo$lerror;?></text>
                </td>
                </tr>
                
                <tr>
                <td>*E-mail:</td>
                <td><input type="email" name="emailid" required  value="<?php echo isset ($_POST["emailid"])? $_POST["emailid"] : '';?>"    ><text id="error"><?php if(isset($eerror)) echo$eerror;?></text></td>
                </tr>

                <tr>
                <td>Phone:</td>
                <td><input type ="Phno" name="Phno" minlength="10" maxlength="12" placeholder="123-456-7890 format" value="<?php echo isset ($_POST["Phno"])? $_POST["Phno"] : '';?>"    ><text id="error"><?php if(isset($pherror)) echo$pherror;?></text></td>
                </tr>         
        </table>
            <br>
            <input type="submit" value="submit" name="submit">
            </form>
       <footer><em></em>Copyright &copy; 2018 Pet Store</em>
        <br><em><a href="mailto:aditya@ravikumar.com">aditya@ravikumar.com</a></em></footer>
        </div>
        </div>
        </div>
    </body>
    </html>        
