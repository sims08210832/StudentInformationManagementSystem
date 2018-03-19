<?php
	include_once 'header.php';
?>
<section class="main-container">
	<div>
		<h2>Sign Up </h2>
	</div>
	<form id="signupform" action="database/signup.db.php" method="POST">
		<input type="text" name="firstname" placeholder="firstname"><br>
		<input type="text" name="lastname" placeholder="lastname"><br>
		<input type="text" name="department" placeholder="department"><br>
		<input type="text" name="regno" placeholder="Reg no."><br>
		<input type="text" name="uid" placeholder="Userid"><br>
		<input type="password" name="password" placeholder="Password">
		<button type="submit" name="submit">Sign Up</button><br>
		

	</form>
		
</section>
<?php
	include_once 'footer.php';
?>