<?php  


if (isset($_POST['name']) && isset($_POST['password'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['password']);

	if (empty($password) || empty($name)) {
		header("Location: login.html");
	}else {

		$sql = "INSERT INTO test(name, message) VALUES('$name', '$password')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Conta criada com sucesso!";
		}else {
			echo "Não foi possível criar sua conta";
		}
	}

}else {
	header("Location: login.html");
}



