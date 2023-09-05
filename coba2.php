<?php
function hello ($name = "User"){
    return "My $name, how are you?";  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1> <?= hello("Rexy");?> </h1>   
</body>
</html>