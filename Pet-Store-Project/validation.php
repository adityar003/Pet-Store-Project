<?php
$link = mysqli_connect("localhost:3306", "adityara_wdm2018", "wdm2018@", "adityara_wdm4");
                     
    // Checking connectivity
    if($link === false){
        die("ERROR" . mysqli_connect_error());
    }
    else 
    {
        
        echo("database connected");
    }    
    if(isset($_POST['submit']))
      {
        $fname=$_REQUEST['FName'];
        $lname=$_REQUEST['LName'];
        $email=$_REQUEST['emailid'];
        $phoneno=$_REQUEST['Phno'];
        $Bname=$_REQUEST['BName'];
        $Pwd=$_REQUEST['pwd'];
        $comments=$_REQUEST['Tarea'];
        $phone_string="(string)$phoneno";    
        $pattern='/[0-9|\+]{0,2}[0-9\- ]*/';
        if(empty($fname))
        {
           $ferror="*First Name cannot be empty*";
           
        }
        elseif(ctype_alpha($fname))
        {
            $fdbfire=1;
        }
        else
        {
            $ferror="*Enter a valid First Name (A-Z)*";
        }
        if(empty($lname))
        {
             $lerror="*Last Name cannot be empty*";
        }
        elseif(ctype_alpha($lname))
        {
            $ldbfire=1;
      }
        else
        {
            $lerror="*Enter a valid Last Name (A-Z)*";
        }

        if(empty($email))
        {
         $eerror="*Email Id cannot be empty**";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $eerror="*Enter a valid email(a-z,@,-,_,0-9)*"; 
            }
        else
        {
            $edbfire=1;
        }
   echo preg_match($pattern, $phone_string, $match)."done";
        if(empty($phoneno))
        {
             $pherror="*Phone Number cannot be empty*";
        }
          else if(preg_match($pattern,$phone_string))
               {       
                    $phdbfire=1;
               }      
                else
                {
                      $pherror="*Please enter a valid phone number*";
                }
      }
          ?>