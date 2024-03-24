<?php
$komputer =['motherboard','procescor','hardisk','pc coller','pga card','ssd'];
sort($komputer);

array_unshift($komputer,'modem');
array_unshift($komputer,'card reader');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
</head>
<body>
    <h3>macam macam perangkat keras komputer</h3>

    <ol>
    <?php foreach ($komputer as $b ) : ?>
  
        <li><?= $b; ?> </li>
<?php endforeach;?>
    </ol>
    
</body>
</html>