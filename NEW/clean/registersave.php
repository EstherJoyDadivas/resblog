<?php
	require ("db_connection.php");
	$sqlstr = 'INSERT INTO user (name, gender, birthDate, mobile, email, role, password, about) VALUES
	(:name, :gender, :birthDate, :mobile, :email, :role, :password, :about)';
	$saveUsers = $conn->prepare($sqlstr);

	$saveUsers->bindparam(':name', $_POST['name']);
	$saveUsers->bindparam(':gender', $_POST['gender']);
	$saveUsers->bindparam(':birthDate', $_POST['birthDate']);
	$saveUsers->bindparam(':email', $_POST['email']);
	$saveUsers->bindparam(':mobile', $_POST['mobile']);
	$saveUsers->bindparam(':role', $_POST['role']);
	$saveUsers->bindparam(':password', $_POST['password']);
	$saveUsers->bindparam(':about', $_POST['about']);
	$saveUsers->execute();

		echo "
		<script>
			alert ('New User Added');
		</script>
				";
		echo "
		<script>
			window.location.href = 'index.php';
		</script>
		";

?>