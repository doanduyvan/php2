<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?= isset($user) && !empty($user) ? is_array($user) ? $user['firstname'] . " " . $user['lastname'] : $user : "Vui lòng nhập email" ?>
    </p>

    <form action="" method="post">
        <input type="email" name="email">
        <input type="submit">
    </form>
</body>

</html>