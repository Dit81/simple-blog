<html>
<head><title><?php echo $title;?></title></head>
<body>
<h3><?php echo $title;?></h3>
<p><?php echo $body;?></p><hr>
<div class="comment">
<p>Comments</p>
<?php foreach($comments as $row): ?>
<p><?php echo $row->title;?></p>
<p><?php echo $row->content;?></p>
<p><?php echo anchor('comment/del/'.$row->id,'delete');?></p><hr>
<?php endforeach;?>
<p>Post Comment</p>
<?php echo validation_errors();?>
<?php echo form_open('comment/insert') ?>
<input type="hidden" name='post_id' value="<?php echo $id;?>" />
<input type="text" name="title" /><br>
<textarea name="content" cols="45" row="5"></textarea><br>
<input type="submit" value="submit" />
</form>
</div>
<p><?php echo anchor('blog','Home');?></p>
</body>
</html>
