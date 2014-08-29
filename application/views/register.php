<html>
<head>
<title>Login to your account</title>
</head>
<body>

<?php echo form_open('blog/register') ?>

Username:<input type="text" name="name" /><br>

Password:<input type="password" name="passwd" /><br>

<input type="submit" value="submit" />

</form>

<?php echo anchor('blog/login','login');?>

</body>
</html>
