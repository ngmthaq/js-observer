<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Observer</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="app">
        <?php for ($i = 1; $i <= 1000; $i++) : ?>
            <div class="box" id="<?php echo 'box-' . $i ?>">
                <?php echo $i ?>
            </div>
        <?php endfor; ?>
    </div>

    <script src="./main.js"></script>
</body>

</html>