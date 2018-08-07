<form method="POST" target="login.php">
	<input type="text" name="username" placeholder="Name."/><br/>
	<input type="password" name="password" placeholder="Password."/><br/>
	<i>Remember login? (for 100 days)</i>
	<input type="checkbox" name="remember" value="yes"/><br/>
	<input type="submit" name="submit" value="Submit."/>
</form>
<?php
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$check = $_POST['remember'];
		$get = $conf['database']->db_query_get("select * from user where username = '$username'");
		foreach ($get as $a) {
			if ($a->password ==  $password) {
				if (isset($check) && $check == 'yes') {
					$value = bin2hex(random_bytes(5));
					setcookie("access", $value, time()+3600*2400);
					$conf['database']->db_query_set("update user set cookie='$value' where username = '$username'");
				}
				$_SESSION['access'] = 1;
				header("Refresh: 1");
			}
		}

	}
?>
