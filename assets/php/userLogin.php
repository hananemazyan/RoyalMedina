<?php

require_once 'connexions.php';

if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $bdd = connexions();

    // Check if email already exists using mysqli
    $stmt = $bdd->prepare("SELECT * FROM user_login WHERE email = ?");
    $stmt->bind_param("s", $_POST['email']); // 's' specifies the variable type => 'string'
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        // Hash the password
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        // Insert new user using mysqli
        $stmt = $bdd->prepare("INSERT INTO user_login (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $_POST['email'], $hashedPassword); // 'ss' for two strings
        $stmt->execute();

        header("Location: /pages/index.php?success=Your account has been created successfully");
        exit;
    } else {
        echo "<b>An account with this email already exists.</b>";
    }
} else {
    echo "Please fill in all fields";
}
?>
