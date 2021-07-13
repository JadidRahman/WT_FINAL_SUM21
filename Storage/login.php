<?php
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$hasError= false;

$users = array("u1"=>"123","u2"=>"123");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["uname"])){
		$err_uname = "Username Requird";
		$hasError = true;
	}
	else{
		$uname = $_POST["uname"];
	}
	
	if(empty($_POST["pass"])){
		$err_pass = "Password Requird";
		$hasError = true;
	}
	else{
		$pass = $_POST["pass"];
	}
	
	if(!$hasError){
		foreach($users as $u=>$p){
			if($uname == $u && $pass == $p){
				setcookie("loggedUser", $uname, time()+60);
				header("Location: dashboard.php");
			}
		}
		echo "Invalid User";
	}
}
?>

<html>
	<head></head>
	<body>
	    <h3>Login</h3>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>"></td>
						<td><span><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Password: </td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" ></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Login"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</boady>
</html>