<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $gender = htmlspecialchars($_POST['gender']);
}
?>
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Submission Successful</title>
    <link rel=\"stylesheet\" href=\"styles.css\">
</head>
<body>
    <div class=\"form-container\">
        <h1>Submission Successful</h1>
        <p><strong>Name:</strong> <?= $name ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Phone:</strong> <?= $phone ?></p>
        <p><strong>Address:</strong> <?= $address ?></p>
        <p><strong>Gender:</strong> <?= $gender ?></p>
    </div>
</body>
</html>
