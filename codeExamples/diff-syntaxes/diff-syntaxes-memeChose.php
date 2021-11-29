<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $condition = false; ?> 
    <?php if($condition): ?>

        <p>Hello, tu vas bien ? <?php echo $_POST['name']; ?> </p>

        <?php 
            echo "<p> Hello, tu vas bien  ".$_POST['name']."</p>";
        ?>

    <?php endif; ?>

    <?php 
        if($condition){
            echo "<p> Hello, tu vas bien  ".$_POST['name']."</p>";
        }
    ?>



    
</body>
</html>
