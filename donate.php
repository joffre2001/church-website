<?php
include_once '../views/header.php';
?>

<div class="donate-container">
    <section class="donate-hero">
        <h1>Support Our Mission</h1>
        <p>Your generosity helps us continue our work in the community and beyond. Thank you for your support!</p>
    </section>

    <section class="donate-form-section">
        <h2>Make a Donation</h2>
        <form action="/process-donation.php" method="POST" class="donate-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="amount">Donation Amount:</label>
            <input type="number" id="amount" name="amount" min="1" required>

            <label for="message">Message (Optional):</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit" class="btn-primary">Donate Now</button>
        </form>
    </section>
</div>

<?php
include_once '../views/footer.php';
?>