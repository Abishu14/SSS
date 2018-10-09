<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <style type ="texts/css">
        th{
            text-align: right;
          }
        h3{
            text-align: center;
          }
    </style>
                    <?php
                      session_start();
                      $length = 32;
                      $_SESSION["CSRF"] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
                      setcookie('CS_Cookie',$_SESSION["CSRF"] ,  time()+60*60*7);
                    ?>   
                      
    <body>
        <table cellpadding="5" cellspacing="10" align="center" >
            <h3>Login form using session and cookies</h3>            
      
        <form method="post" action="validate.php">
            <tr><th>Email</th><td><input type="text" name="email"/></td></tr>
            <tr><th>Password</th><td><input type="password" name="password"/></td></tr>
            <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1"/>Remember me</td></tr>
            <tr><td colspan="2" align="right"><input type="submit" name="login" value="login"/></td></tr>          
        </form>
        </table>      
           
    </body>
    <script>
		window.onload=getToken();
		function getToken(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			  if (this.readyState === 4 && this.status === 200) {
				var form = document.getElementById("logout");
				var token = document.createElement("input");
				token.setAttribute("type", "hidden");
				token.setAttribute("name", "csrf");
				token.setAttribute("value", this.responseText);
				form.appendChild(token);
			  }
			};
			xhttp.open("POST", "token.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("token");
		}
	</script> 

    
        
</html>
