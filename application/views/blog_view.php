<h1><?php echo $heading;?></h1>
<p>My ID is: <?php echo $this->session->userdata['id'];?>
<ol>
<?php foreach($query as $row):?>

<h3><?php echo anchor('blog/post/'.$row->id,$row->title);?></h3>
<p><?php echo $row->body;?></p>
<?php echo anchor('blog/edit/'.$row->id,'edit');?><br>
<?php echo anchor('blog/del/'.$row->id,'delete');?>

<hr>

<?php endforeach;?>

<?php echo anchor('blog/write','Write Post');?>
