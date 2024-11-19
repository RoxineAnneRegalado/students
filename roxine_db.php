<?php

include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $course_section = $_POST['course_section'];


    $sql = "INSERT INTO students (firstname, middlename, lastname, email, course_section) 
            VALUES (:firstname, :middlename, :lastname, :email, :course_section)";
    $stmt = $pdo->prepare($sql);

    // Bind values
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':middlename', $middlename);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':course_section', $course_section);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<p style='color: green;'>Record added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: Could not add record.</p>";
    }
}
?>
