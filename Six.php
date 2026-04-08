<?php
$file = "counter.txt";

if(!file_exists($file)){
    file_put_contents($file, 0);
}

$count = file_get_contents($file);
$count++;

file_put_contents($file, $count);
?>

<html>
<head>
<title>Visitor Counter</title>
</head>

<body>

<h1>Welcome to My Web Page</h1>
<h2>Total Visitors:</h2>
<h3><?php echo $count; ?></h3>

</body>
</html>
