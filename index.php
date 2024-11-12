<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        /* Your existing CSS styles */
    </style>
</head>
<body>

    <h2>Student Information Form</h2>

    <form action="submit_form.php" method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middlename">

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>

        <label for="section">Section:</label>
        <input type="text" id="section" name="section" required>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
