<?php 
  if(!isset($title_name)){$title_name = 'Staff Areac';}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GBI - <?php echo  u($title_name); ?></title>
  <link rel="stylesheet" href=" <?php echo url_for('/assets/css/staff.css');?>">
</head>
<body>
    <header>
      <h1>GBI Staff Area</h1>
    </header>
    <navigation>
      <ul>
        <li>
            <a href=" <?php echo url_for('/staff/index.php');?>">Menu</a>
        </li>
      </ul>
    </navigation>