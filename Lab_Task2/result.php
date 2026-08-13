<?php


$name = $_GET["name"] ?? "";
$applicant_id = $_GET["id"] ?? "";
$cv = $_GET["cv"] ?? "";

$request_name = $_REQUEST["name"] ?? "";
$request_id = $_REQUEST["id"] ?? "";

?>

<!DOCTYPE html>
<html>

<head>

    <title>Application Successful</title>

</head>

<body>

<h2>APPLICATION SUCCESSFUL</h2>

<hr>

<p>
    <strong>Applicant ID:</strong>
    <?php echo htmlspecialchars($applicant_id); ?>
</p>

<p>
    <strong>Name:</strong>
    <?php echo htmlspecialchars($name); ?>
</p>


<p>
    <strong>Uploaded CV:</strong>
    <?php echo htmlspecialchars($cv); ?>
</p>

<p>
    <strong>Request Name:</strong>
    <?php echo htmlspecialchars($request_name); ?>
</p>

<p>
    <strong>Request ID:</strong>
    <?php echo htmlspecialchars($request_id); ?>
</p>

<p>
    Application submitted successfully.
</p>

<a href="index.php">Apply Again</a>

</body>
</html>