<script type="text/javascript" src="<?php echo base_url().'resource/ckeditor/ckeditor.js';?>"></script>

<?php echo validation_errors();?>

<?php echo form_open('blog/write') ?>

<input type="text" name="title" /><br>
<textarea name="body" cols="45" row="5" class="ckeditor"></textarea>
<br>
<input type="submit" value="submit" />

</form>

<script type="text/javascript">CKEDITOR.replace('body',{toolbar:'Full',skin:'moono'});</script>

<?php echo anchor('blog','Home');?>
