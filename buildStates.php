<?php
$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

foreach ($states as $state) {
        $aState=str_replace(' ','_',$state);
     $statePage = fopen("./pages/" .$aState. ".html", "w") or die("Unable to open file!");

$txt = <<<EOT


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$state</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>
<body>
<div class="container"><div class="row"><div class="col-md-12">
<h1>$state</h1>
<a href='../index.php' class='btn btn-info'>Go to Gallery</a>
<iframe src="https://en.wikipedia.org/wiki/$state" width="100%" height="10000" framborder="0"></iframe>
</div></div></div>    
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>


EOT;

   
fwrite($statePage, $txt);
fclose($statePage);

   
} 




header ("Location: index.php");


?>
