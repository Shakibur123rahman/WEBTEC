<?php

$text="";
$password="";
if($_SERVER["REQUEST_METHOD"] =="GET")
	{  
		if(empty($_GET['name,Email']))
	 {
	  $text="";
	  $password="";
	   }
	   else {
	   	$myfile = fopen("Hello.txt","w") or die("Unable to open");
	    $text=$_GET['name'];
	     $Email=$_GET['mail'];
	     fwrite($myfile,$text);
	      fclose($myfile);
	       }
	   } 
	   ?>
	   <!DOCTYPE html>
	   <html>
	   <head>
	   <title>Reg</title>
	   </head>
	   <body>
	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
	?>"method="get">
	<fieldset>
	 <legend><B>REGISTRATION</legend></B>
	 Name: <input type="text" name="name"id="name"placeholder="Enter First Name"><br>
	 <hr>
	 Email: <input type="mail" name="Ename"placeholder="Enter your Email"><br>
	 <hr>
	 Password: <input type="password" name="pass"placeholder="Enter your Email"><br>
	 <hr>
	  Your image: <input type="file" name="img"placeholder="fileupload"><br>

	  <button>Submit</button>
	  </fieldset>
	   </form>
	</body>
	</html>