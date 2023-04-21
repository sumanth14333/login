<a href="http://localhost/index.html"> click to go back</a>
<?php 
if(isset($_POST['btn']))
{
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$hint = $_REQUEST['hint'];
	$path = $_FILES['file']['name'];

	echo "file uploaded";

		echo "<br> USERNAME:".$username;
		echo "<br> PASSWORD:".$password;
		echo "<br> Image:<img src=".$path." height=l00 width=100/>";
}
else{
	echo "not worked";
}

?>