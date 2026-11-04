
<?php
$hospital = "Decepticons Hospital";
$year = date("Y");

$doctors = [
    ["Aashi", "Cardiology"],
    ["Himanshu", "General Medicine"],
    ["Anusha", "Pediatrics"],
    ["Anubhav", "Neurology"],
    ["Mayank", "Orthopedics"],
    ["Gorav", "Dermatology"],
    ["Khushi", "Dental Care"],
    ["Lokesh", "ENT Specialist"],
    ["Daksh", "Emergency Medicine"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors - <?php echo $hospital; ?></title>
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
    <h1>Meet Our Doctors</h1>
    <p>Meet the team of <?php echo $hospital; ?>.</p>

    <?php foreach ($doctors as $doctor) { ?>
        <div class="doctor-card">
            <h2>Dr. <?php echo htmlspecialchars($doctor[0]); ?></h2>
            <p><?php echo htmlspecialchars($doctor[1]); ?></p>
        </div>
    <?php } ?>

</section>

<footer>
    <p>© <?php echo $year; ?> <?php echo $hospital; ?></p>
</footer>

</body>
</html>
