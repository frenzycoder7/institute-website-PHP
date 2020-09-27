<?php 
	include "../class/user.php";
	$admin = new admin;
	$user = new user;
	if(isset($_POST['work'])){
		extract($_POST);
		if($userid=='blackcoder' && $pwd=='blackcoder'){
			echo "logged in successfully....";
			
			echo "User:- ".$admin->user."</br>";
			echo "password:- ".$admin->pas."<br/>";
			echo "database name:- ".$admin->db;
		}
		else{
			$admin->link('../index.php?auth=failed');
			?>
			<script>
				alert('Go to hell');
			</script>
			<?php
		}
	}
	?>
	<form action="controle.php" method="post">
		<input type="text" placeholder="userId" name="userid" >
		<input type="password" placeholder="password" name="pwd">
		<input type="submit" name="work" value="login">
	</form>
	<?php
?>