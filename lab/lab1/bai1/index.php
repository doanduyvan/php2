<?php

// data
$course = [
    's1' => 'course1',
    's2' => 'course2',
    's3' => 'course3'
];


//model
function get_courses()
{
    global $course;
    return $course;
}

function find_by_semester($semester)
{
    global $course;
    return (array_key_exists($semester, $course)) ? $course[$semester] : 'Invalid course';
}

//controller
$list_of_courses = get_courses();
$semester = (!empty($_GET['semester'])) ? $_GET['semester'] : '';
$course_name = find_by_semester($semester);
$page_content = $course_name;
?>


<!-- view -->
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
    <form action="">
        <select name="semester" id="">
            <option value="" disabled selected>Chọn khóa học</option>
            <?php foreach ($list_of_courses as $key => $course_name) : ?>
                <option value="<?= $key ?>"><?= $course_name ?></option>
            <?php endforeach; ?>
        </select>
        <button>Chọn</button>
    </form>
</body>

</html>