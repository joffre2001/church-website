<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Church</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<?php
include_once '../views/header.php';
?>

<div class="home-container">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Our Church</h1>
            <p>Join us in worship, community, and service. Together, we grow in faith and love.</p>
            <a href="/about.php" class="btn-primary">Learn More</a>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="events-section">
        <h2>Upcoming Events</h2>
        <ul class="event-list">
            <li>
                <h3>Sunday Worship</h3>
                <p>Every Sunday at 08:00 AM</p>
            </li>
            <li>
                <h3>Cellule de priere</h3>
                <p>Chaque Mardi $ Jeudi.</p>
            </li>
            <li>
                <h3>Bible Study</h3>
                <p>Wednesdays at 7:00 PM</p>
            </li>
        </ul>
        <a href="/events.php" class="btn-primary">View All Events</a>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <h2>Our Mission</h2>
        <p>We are dedicated to spreading love, hope, and faith through worship, community, and service.</p>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <h2>Get Involved</h2>
        <p>Discover how you can be part of our church family and make a difference.</p>
        <a href="/contact.php" class="btn-primary">Contact Us</a>
    </section>
</div>

<?php
include '../src/views/footer.php';
?>

</body>
</html>