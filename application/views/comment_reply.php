<?php echo form_open('comment/insert'); ?>

<input type="hidden" name="reply_to" value="<?php echo $reply_to;?>">

<input type="hidden" name="post_id" value="<?php echo $post_id;?>">

<input type="text" name="title" /><br />

<textarea name="content" cols="45" row="5"></textarea><br>

<input type="submit" value="submit" />

</form>
