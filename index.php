<?php
$x=1;
$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">




</head>
<body>
<div class="container"><div class="row"><div class="col-md-12">    
<h1>States</h1>
<a href="./buildStates.php">Build State Pages</a>
<table class="table table-hover table-striped table-bordered text-center">
 <tr>
 <?php
 foreach ($states as $state) {
        $aState=str_replace(' ','_',$state);
echo"<td class='text-center'><a href='./pages/$aState.html'>

<img src='https://jaxcode.com/stateflags/$aState.svg.png'><br>
Go to $state</a>

</td>";

if ($x % 5 == 0){echo "</tr><tr>";}

$x++; 
}
?>
 </tr>
</table>

</div></div></div>
</body>
</html>