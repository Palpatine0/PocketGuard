<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if category name is empty
    if (empty($_POST['category_name'])) {
        echo '<div class="alert alert-danger" role="alert">Please enter a category name.</div>';
    } else {
        // Process the form data and insert into database
        $category_name = $_POST['category_name'];
        $sql = "INSERT INTO categories (name) VALUE('$category_name')";
        mysqli_query($conn, $sql);
    }
}
?>