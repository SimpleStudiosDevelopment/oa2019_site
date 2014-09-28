<!DOCTYPE html>
<html>
<?php
include '/var/www/html/oa/header.php';
include '/var/ww2/db/db.php';
$tid;
$data;

if(!isset($_GET['tid'])){
	echo 'TID not set';
} else {
	
	global $tid, $data;
	$tid = $_GET['tid'];
	
	$conn = connect_db("teachers");
	$query = mysqli_query($conn,"SELECT * FROM teachers WHERE tid=\"" . $tid . "\"");
	$data = mysqli_fetch_array($query);
}

?>

<body>
	<div id="content-wrapper">
		<h1><?php echo $data['name']; ?></h1>
    </div>
</body>

</html>