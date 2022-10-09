<?php include "connect.php"?>
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
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        while ($row=$stmt->fetch()) {
            ?>
            username: <?=$row["username"]?><br>
            address: <?=$row["address"]?><br>
            email: <?=$row["email"]?><br>
            <a href="editform.php?username=<?=$row["username"]?>">แก้ไข</a>
            <hr>
            <?php } ?>
</body>
</html>