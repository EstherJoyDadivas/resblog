<?php

		require ("db_connection.php");
		$email = $_POST['email'];
		$password = $_POST['password'];

		$usersql = $conn->prepare ("Select * from user where email = '$email' AND password = '$password'");

	$usersql->execute();
	$user = $usersql->fetch();
	if ($email) {
		if ($email['role'] == 'admin') {
			echo "
			<script>
				alert ('WELCOME ADMIN');
			</script> ";
			header('Location: admin/index.php'); //sample 
		}
		else if ($user['role'] !== 'admin') {
			"<script>
				alert ('WELCOME USER');
			</script> ";
			header('Location: user/index.php?id='.$user['userid']);		
		} else {
			"<script>
				alert ('No Records Found');
				window.location.href = 'index.php';
			</script> ";
		}
	}
	else {
		echo"
			<script>
				alert ('INVALID USER');
			</script>";
		}
	echo "
		<script>
			window.location.href = 'index.php';
		</script>
		";
?>
