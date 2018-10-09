<!--
Logout page
-->
<!DOCTYPE html>
 <?php
       	session_start(); 
	if(isset($_POST))
            {
        	if ($_SESSION["CSRF"]==$_POST["token"])
                {
                    echo "Logout Success";
                    session_destroy();
		}
		else                    
                {
                    echo "CSRF Check Failed";
		}
            }	
?>
 

