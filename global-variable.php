<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global variable</title>
</head>
<body>
<?php
$b = 23; //outside the function box(global variable)
function count_to_twelve(){
  global $b;
  $b = 15; //now 15 is global variable by the declaration
for($s = 0;$s <= 12; $s++){
    echo $s ."<br/>";
}


}
count_to_twelve();

echo "<br>";
echo $b;
?>
    
</body>
</html>