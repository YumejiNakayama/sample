<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello/index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 100pt;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0 -100px 0;
        }
    </style>
</head>

<body>
    <h1>Index</h1>
    <p>ID=<?php echo $id; ?></p>
    <p><?php echo $name; ?></p>
    <p><?php echo $msg; ?></p>
    <p><?php echo date("Y年n月j日"); ?></p>
</body>

</html>