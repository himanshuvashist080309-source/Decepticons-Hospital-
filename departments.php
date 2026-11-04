
<?php
$hospital = "Decepticons Hospital";
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments - <?php echo $hospital; ?></title>
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
    <h1>Our Hospital Departments</h1>
    <p>Explore our different healthcare departments.</p>

    <div class="doctor-card">
        <h2>❤️ Cardiology</h2>
        <p>Department for heart health and cardiac care.</p>
    </div>

    <div class="doctor-card">
        <h2>🧠 Neurology</h2>
        <p>Department for brain and nervous system care.</p>
    </div>

    <div class="doctor-card">
        <h2>🦴 Orthopedics</h2>
        <p>Department for bones, joints and muscles.</p>
    </div>

    <div class="doctor-card">
        <h2>👶 Pediatrics</h2>
        <p>Healthcare services for children.</p>
    </div>

    <div class="doctor-card">
        <h2>🩺 General Medicine</h2>
        <p>General health consultations and checkups.</p>
    </div>

    <div class="doctor-card">
        <h2>🦷 Dental Care</h2>
        <p>Department for teeth and oral health.</p>
    </div>

</section>

<footer>
    <p>© <?php echo $year; ?> <?php echo $hospital; ?></p>
</footer>

</body>
</html>
