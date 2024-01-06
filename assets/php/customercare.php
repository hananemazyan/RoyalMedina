<?php

require_once 'connexions.php';
var_dump($_POST);
if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']) && 
    !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    $bdd = connexions();

    // Insert new message using mysqli
    $stmt = $bdd->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: /pages/customerCare.php?success=Your account has been created successfully");
        exit;
    } else {
        echo "<b>There was a problem sending your message. Please try again later.</b>";
    }
} else {
    echo "Please fill in all required fields.";
}

?>
