<html>
<head>
<title>Login to your account</title>
</head>
<body>

<p>You havn't logged in yet.</p>

<?php echo form_open('blog/login') ?>

Username:<input type="text" name="name" /><br>

Password:<input type="password" name="passwd" /><br>

<input type="submit" value="submit" />

</form>

<span>Don't have an account? </span><?php echo anchor('blog/register','register');?>

</body>
</html>
