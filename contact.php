<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Church Website</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="contact-container">
        <h1>Contact Us</h1>
        <p>If you have any questions, feel free to reach out to us using the form below or through our contact information.</p>

        <form action="/src/controllers/ContactController.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>

        <div class="contact-info">
            <h2>Our Contact Information</h2>
            <p>Email: info@churchwebsite.com</p>
            <p>Phone: (123) 456-7890</p>
            <p>Address: 123 Church St, City, State, ZIP</p>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>