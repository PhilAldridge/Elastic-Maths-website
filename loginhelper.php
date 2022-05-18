<?php 

// Define variables and initialize with empty values
$email = $password = "";
$err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
 	// Validate username
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $err = "Please enter a valid email.";
		include "logintoast.php";
    } elseif(strlen(trim($_POST["password"]))<8){
        $err = "Password must be at least 8 letters long";
		include "logintoast.php";
    } else{
		$stmt = $link->prepare('SELECT id, password FROM users WHERE email = ?');
			$stmt -> bind_param('s', $_POST['email']);
			$stmt -> execute();
			$stmt -> store_result();
			
			if($stmt -> num_rows > 0) {
				$stmt -> bind_result($id,$password);
				$stmt -> fetch();
				
				if(password_verify($_POST['password'],$password)){
					session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['id'] = $id;	
				} else {
					$err = "The password does not match an account in the database";
					include "../logintoast.php";
				}
			} else if(strlen($_POST['password2'])>0){
				if($_POST['password2']==$_POST['password']) {
					$err = "The two passwords did not match";
					include "../logintoast.php";
					include "../loginform2.php";
				} else{
					//create account
					$stmt2 = $link-> prepare("INSERT INTO users (forename,surname,password,email) VALUES (?, ?, ?, ?)");
					$passwordHash = password_hash($_POST['password'],PASSWORD_DEFAULT);
					$stmt2 -> bind_param('ssss',$_POST['forename'], $_POST['surname'], $passwordHash, $_POST['email']);
					$stmt2 -> execute();
					
					session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['id'] = $link->insert_id;
					$err = "You have successfully logged in";
					$stmt2 -> close();
				}
			} else {
				$err = "Account not found.";
				include "../logintoast.php";				
				include "../loginform2.php";
			}
			
			$stmt -> close();
	}
}
?>