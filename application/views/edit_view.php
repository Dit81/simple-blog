<?php echo validation_errors();?>

<?php echo form_open('blog/update') ?>

<input type="hidden" name="id" value="<?php echo $id;?>" />

<input type="text" name="title" value="<?php echo $title;?>" /><br>

<textarea name="body" cols="45" row="5"><?php echo $body;?></textarea><br>

<input type="submit" value="submit" />

</form>
