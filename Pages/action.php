<?php
require_once '../vendor/autoload.php';
use App\Classes\StringWordCount;
use App\Classes\Student;

if (isset($_POST['btn']))
{
    $stringWordCount = new StringWordCount($_POST);
    $result = $stringWordCount->getWordString();
    include 'index.php';
}
elseif (isset($_POST['search_btn']))
{
    $student = new Student($_POST);
    $result = $student->getAllStudentBySearchText();
    include 'search_result.php';
}
else if (isset($_GET['status']))
{
    if ($_GET['status'] == 'search')
    {
        $student = new Student();
        $students = $student->getAllStudent();
        include 'search.php';
    }
}
else
{
    header('Location: index.php');
}