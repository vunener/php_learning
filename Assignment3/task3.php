<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
    <h2>Registration for hackathon</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Role:
        <input type="checkbox" name="role" value="Project Leader">Project Leader
        <input type="checkbox" name="role" value="Programmer">Programmer
        <input type="checkbox" name="role" value="other">Tester
        <br><br>
        Dietary Requirements:
        <select name="diet">
            <option value="Select">Select</option>
            <option value="None">None</option>
            <option value="Vegetarian">Vegetarian</option>
            <option value="Banting">Banting</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
include 'menu.inc';
// define variables and set to empty values
// $name, $email, $role;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $role = test_input($_POST["role"]);
    $diet = test_input($_POST["diet"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "<h2>Your have entered the following information:</h2>";
echo "Full name <b>{$name}</b>";
echo "<br>";
echo "email address <b>{$email}</b>";
echo "<br>";
echo "Your role is <b>{$role}</b>";
echo "<br>";
echo "with dietary requirements <b>{$diet}</b>";
echo "<br>";
?>

<iframe src="task3.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
