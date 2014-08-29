<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
<?php

if(empty($this->session->userdata['id'])){
	redirect('blog/login');
}

?>
