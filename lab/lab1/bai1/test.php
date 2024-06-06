<?php
$course = [
    's1' => 'course1',
    's2' => 'course2',
    's3' => 'course3'
];

// Model
function get_courses()
{
    global $course;
    return array_values($course);
}

function find_by_semester($semester)
{
    global $course;
    return (array_key_exists($semester, $course)) ? $course[$semester] : 'KHÓA HỌC KHÔNG TỒN TẠI';
}

// Controller
$course_name = ''; // ??

$list_of_courses = get_courses();
if (!empty($_GET['btn'])) {
   $semester = (!empty($_GET['semester'])) ? $_GET['semester'] : '';
    $course_name = find_by_semester($semester);

   echo $semester, "dong 28";
    echo $course_name , "dong 29"; die();
}

$page_content = $course_name;

?>
<!-- View -->


<form action="" method="get">
    <select name="semester">
        <option value="">Chọn học kỳ</option>
        <?php foreach ($list_of_courses as  $course_name) : ?>
            <option><?=$course_name?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" name="btn" value="Chọn">
</form>
<?=$page_content; ?>

<!-- chạy thử xem -->