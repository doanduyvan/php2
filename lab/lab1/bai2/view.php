
<?= $page_content ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p></p>
    <form action="index.php">
    <select name="semester" id="">
        <option value="" disabled selected>Vui lòng chọn</option>
        <?php foreach($list_of_courses as $key => $course_name): ?>
            <option value="<?= $key ?>"><?= $course_name ?></option>
        <?php endforeach; ?>
    </select>
    <button>Chọn</button>
    </form>
</body>
</html>