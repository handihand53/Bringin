<?php
    session_start();
    include 'connection.php';

        if(isset($_POST)){
            $sql="SELECT * FROM USER WHERE EMAIL='".$_POST['email']."' AND PASSWORD='".$_POST['password']."'";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0){
            $data = mysqli_fetch_assoc($result);
            // $_SESSION['username'] = $data['username'];
            // $_SESSION['iduser'] = $data['iduser'];
            //echo  $data['iduser'];
            header("location: menu.php");
            }
            else{
                header("location: index.php");
            }
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<h1 id="logo">Bringin</h1>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Teko:300&display=swap" rel="stylesheet">
<body>
    
	<div class="center">
        <div id="body"> 
			<div id="header-login">
				<h1>Login</h1>
			</div>
			<div id="body-login">
				<form method="post" action="index.php">
					<label class="text">E-mail</label>
					<input class="input" type="text" name="email" placeholder="E-mail" required="yes">
					<br>
					<label class="text">Password</label>
					<input class="input" type="Password" name="password" placeholder="Password" required="yes" maxlength="32">
					<br>
					<div id="button-login">
					    <button id="login">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>


</body>
<!-- <footer><div id="footer">COPYRIGHT 71170146</div></footer> -->
</html>