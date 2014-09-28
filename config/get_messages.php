<?php

include '/var/www/html/oa/config/db.php';

connect_db("chat");


$sql="
SELECT * FROM (
    SELECT * FROM table ORDER BY id DESC LIMIT 50
) sub
ORDER BY id ASC
";
$result = mysqli_query($con,$sql);

?>