<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

		* {
			box-sizing: border-box;
			font-family: 'Roboto', sans-serif;
		}

		body {
			margin: 0;
			background-color: #f2f3f5;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}

		.container {
			background: #fff;
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0 4px 20px rgba(0,0,0,0.1);
			width: 100%;
			max-width: 400px;
			text-align: center;
		}

		.container h1 {
			font-size: 24px;
			margin-bottom: 5px;
			color: #202124;
		}

		.container p {
			color: #5f6368;
			font-size: 14px;
			margin-bottom: 30px;
		}

		form {
			text-align: left;
		}

		label {
			font-size: 14px;
			color: #202124;
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #dadce0;
			border-radius: 4px;
			font-size: 14px;
			transition: border-color 0.3s ease;
		}

		input.invalid {
			border-color: #d93025;
		}

		.invalid-feedback {
			color: #d93025;
			font-size: 13px;
			margin-top: -15px;
			margin-bottom: 15px;
		}

		input[type="submit"] {
			background-color: #1a73e8;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #1765c1;
		}

		@media (max-width: 500px) {
			.container {
				padding: 20px;
			}
		}
	</style>
</head>
<body>

	<div class="container">
		<h1>Login</h1>
		<p>Masuk ke Dashboard</p>

		<?php if($this->session->flashdata('error')): ?>
			<div class="invalid-feedback">
				<?php echo $this->session->flashdata('error'); ?>
			</div>
		<?php endif ?>

		<form action="<?php echo site_url('auth/authenticate'); ?>" method="POST">
			<div>
				<label for="username">Username</label>
				<input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>"
					   placeholder="you@example.com" value="<?= set_value('username') ?>" required />
				<?php if (form_error('username')): ?>
					<div class="invalid-feedback"><?= form_error('username') ?></div>
				<?php endif ?>
			</div>

			<div>
				<label for="password">Password</label>
				<input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
					   placeholder="Enter your password" required />
				<?php if (form_error('password')): ?>
					<div class="invalid-feedback"><?= form_error('password') ?></div>
				<?php endif ?>
			</div>

			<div>
				<input type="submit" value="Login">
			</div>
		</form>
	</div>

</body>
</html>
