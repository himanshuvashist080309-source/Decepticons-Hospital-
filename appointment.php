
<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $department = htmlspecialchars($_POST["department"]);
    $date = htmlspecialchars($_POST["date"]);
    $user_message = htmlspecialchars($_POST["message"]);

    $message = "Appointment form submitted successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Decepticons Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h2>Decepticons Hospital</h2>
    <nav>
        <a href="index.php">Home</a>
        <a href="departments.php">Departments</a>
        <a href="doctors.php">Doctors</a>
        <a href="appointment.php">Appointment</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section class="about">
    <h1>Book Your Appointment</h1>
    <p>Please fill in the form below.</p>

    <?php if ($message != "") { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>

    <form method="POST" action="appointment.php">

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="name" placeholder="Enter your name" required>
        </p>

        <p>
            <label>Email Address:</label><br>
            <input type="email" name="email" placeholder="Enter your email" required>
        </p>

        <p>
            <label>Phone Number:</label><br>
            <input type="tel" name="phone" placeholder="Enter phone number" required>
        </p>

        <p>
            <label>Select Department:</label><br>
            <select name="department" required>
                <option value="">Choose Department</option>
                <option>Cardiology</option>
                <option>Neurology</option>
                <option>Orthopedics</option>
                <option>Pediatrics</option>
                <option>General Medicine</option>
                <option>Dental Care</option>
            </select>
        </p>

        <p>
            <label>Appointment Date:</label><br>
            <input type="date" name="date" required>
        </p>

        <p>
            <label>Message:</label><br>
            <textarea name="message" rows="4" placeholder="Write your message"></textarea>
        </p>

        <button type="submit" class="btn">Book Appointment</button>

    </form>
</section>

<footer>
    <p>© 2026 Decepticons Hospital</p>
</footer>

</body>
</html>
