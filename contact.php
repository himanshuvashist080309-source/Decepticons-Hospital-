
<?php
$hospital = "Decepticons Hospital";
$year = date("Y");
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $user_message = htmlspecialchars(trim($_POST["message"]));

    if ($name != "" && $email != "" && $user_message != "") {
        $message = "Thank you, $name! Your message has been received.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - <?php echo $hospital; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h2><?php echo $hospital; ?></h2>

    <nav>
        <a href="index.php">Home</a>
        <a href="departments.php">Departments</a>
        <a href="doctors.php">Doctors</a>
        <a href="appointment.php">Appointment</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section class="about">

    <h1>Contact Us</h1>
    <p>We are happy to hear from you!</p>

    <div class="doctor-card">
        <h2>📍 Address</h2>
        <p><?php echo $hospital; ?></p>
        <p>Panipat, Haryana, India</p>
        <p>(Sample address for student project)</p>
    </div>

    <div class="doctor-card">
        <h2>📞 Phone</h2>
        <p>Contact us for general enquiries.</p>
        <p>Phone: +91 00000 00000 (Demo)</p>
    </div>

    <div class="doctor-card">
        <h2>✉️ Email</h2>
        <p>careplus@example.com (Demo)</p>
    </div>

    <h2>Send Us a Message</h2>

    <?php if ($message != "") { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>

    <form method="POST" action="contact.php">

        <p>
            <label>Your Name:</label><br>
            <input type="text" name="name" placeholder="Enter your name" required>
        </p>

        <p>
            <label>Your Email:</label><br>
            <input type="email" name="email" placeholder="Enter your email" required>
        </p>

        <p>
            <label>Your Message:</label><br>
            <textarea name="message" rows="5" placeholder="Write your message" required></textarea>
        </p>

        <button type="submit" class="btn">Send Message</button>

    </form>

</section>

<footer>
    <p>© <?php echo $year; ?> <?php echo $hospital; ?></p>
</footer>

</body>
</html>
