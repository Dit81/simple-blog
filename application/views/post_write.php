<html>
<head><title>Write Post</title></head>
<body>

<?php echo validation_errors();?>

<?php echo form_open('blog/write') ?>

<input type="text" name="title" /><br>
<textarea name="body" cols="45" row="5"></textarea><br>
<input type="submit" value="submit" />

</form>

</body>
</html>
