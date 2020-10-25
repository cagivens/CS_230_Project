<?php 
require_once 'dbhandler.php';
date_default_timezone_set('UTC');

if(!isset($_POST['review-submit'])) {
    header("Location: ../review.php?error=Unknown");
    exit();
}

session_start();

$uname = $_SESSION['username'];
$title = $_POST['review-title'];
$date = date('Y-m-d H:i:s');
$review = $_POST['review'];
$item_id = $_POST['item_id'];
$rating = $_POST['rating'];

$sql = 'INSERT INTO reviews(item_id, uname, title, review_text, rev_date, rating_num, status) VALUES(?, ?, ?, ?, ?, ?, ?);';
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $conn)) {
    header("Location: ../review.php?error=SqlInjection");
    exit();
}

mysqli_stmt_bind_param($stmt, "issssii", $item_id, $uname, $title, $review, $date, $rating, 1);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
header("Location: ../review.php?id=$item_id");