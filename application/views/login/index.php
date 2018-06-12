<!DOCTYPE html>
<html>
<head>
	<title>Welcome To FTools</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--=======================================================================================================================-->
	<link href="<?php echo base_url();?>assets/login/css/style.css" rel="stylesheet">
<!--=======================================================================================================================-->
</head>
<body>
	 <body class="align">

  <div class="grid">


    <?php echo form_open('User/action',['role' => 'form','id' => 'login-form']); ?>

      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="username" placeholder="Email" required>
        </div>

        <div class="form__field">
          <input type="password" placeholder="Password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Login">
      </footer>

    <?php echo form_close(); ?>

  </div>

</body>
</body>
</html>