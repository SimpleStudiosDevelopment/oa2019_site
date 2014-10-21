<!DOCTYPE html>
<html>
<?php
include '/var/www/oa/header.php';
include '/var/ww2/db/db.php';
$tid;
$data;

if(!isset($_GET['tid'])){
	echo 'No tid.';
} else {
	
	global $tid, $data;
	$tid = $_GET['tid'];
	
	$conn = connect_db("teachers");
	$query = mysqli_query($conn,"SELECT * FROM teachers WHERE tid=\"" . $tid . "\"");
	$data = mysqli_fetch_array($query);
	
	$classes = unserialize($data['classes']);
	$classN;
	
	foreach($classes as $value){
		global $classN;
		$name = mysqli_fetch_array(mysqli_query($conn,"SELECT 'name' from classes WHERE cid='" . $value . "'"));
		array_push($classN,$name);
	}
	
}

?>

<body>
	<div id="content-wrapper">
		<h1><?php echo $data['name']; ?></h1>
        
        <ul class="nav nav-tabs">
        <li class="active"><a href="#" data-toggle="tab">Test</a></li>

        <?php
		
		
		foreach($classN as $value){
			echo "<li><a href=\"#\" data-toggle=\"tab\">" . $value . "</a></li>";
		}		  
		?>
        </ul>
        <div id="tabs" class="tab-content">
          <div class="tab-pane fade active in" id="home">
            <p></p>
          </div>
        </div>
    </div>
</body>

</html>