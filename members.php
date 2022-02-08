
<?php


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All members</title>
</head>
<body>
<div>
    <?php

    foreach ($users as &$value) {
        echo $value["last_name"].'<br>';
};

    ?>
</div>
</body>
</html>