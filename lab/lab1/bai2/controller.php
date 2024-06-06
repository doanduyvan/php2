<?php
require_once 'model.php';
$list_of_courses = get_courses();
$semester = (!empty($_GET['semester'])) ? $_GET['semester'] : '';
$course_name = find_by_semester($semester);
$page_content = $course_name;

$data = [];
$data['page_content'] = $page_content;
$data['list_of_courses'] = $list_of_courses;

view($data);

function view($data){
    extract($data);
    include_once 'view.php';
}