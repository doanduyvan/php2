<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];

    $nomal = htmlspecialchars($content);
    // Bạn có thể xử lý nội dung $content ở đây, ví dụ lưu vào cơ sở dữ liệu

    // Hiển thị nội dung nhận được
    echo "<h1>Content Received</h1>";
    echo "<div>{$nomal}</div>";
    echo "<div>{$content}</div>";

} else {
    echo "Invalid request method.";
}
?>
