<!DOCTYPE html>
<html lang="en">

<head>
    <title>this one</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Check In</h1>
    <div class="container">
        <form action="insert.php" method="POST" class="form">

            <input type="text" name="username" placeholder="Name" required>
            <input type="text" id="" placeholder="Email" name="email" required>
            <input type="text" id="" placeholder="Contact Number" name="contact" required>

            <div class="gender">
                <p>Please select your gender.</p>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other">Other</label>
            </div>

            <div>
                <br>
                <label for="">No. of People:</label>
                <input type="number" name="people" id="" min="0" value="0" required>
            </div>
            <br>
            <input type="submit" value="Click me" name="submit">
        </form>

    </div>

    <?php include("insert.php"); ?>
</body>

</html>