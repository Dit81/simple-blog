<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $heading;?></h1>
<ol>
<?php foreach($query as $row):?>

<h3><?php echo anchor('blog/post/'.$row->id,$row->title);?></h3>
<p><?php echo $row->body;?></p>
<?php echo anchor('blog/edit/'.$row->id,'edit');?><br>
<?php echo anchor('blog/del/'.$row->id,'delete');?>

<hr>

<?php endforeach;?>

<?php echo anchor('blog/write','Write Post');?>

</body>
</html>
