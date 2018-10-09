<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       
       
        <?php
        $myemail="abishu14@gmail.com";
        $mypass="123";
        if (isset($_POST ['login']))
        {
            $email=$_POST['email'];
            $pass=$_POST['password'];
            
            
            if( $email == $myemail and $pass == $mypass )
            {
            if( isset($_POST['remember']) )
            {
             setcookie('email',$email,  time()+60*60*7);
             setcookie('pass',$pass,  time()+60*60*7);
            } 
          
            $_SESSION['email']=$email;
            header("location:welcome.php");
            }
            else 
            {
                echo "email or password is invalid.<br> click here to <a href='Login.php'> try again</a>";
               
            }
   
        }
        
        else 
        {
            header("location:Login.php") ;  
        }
        ?>
    </body>
</html>
