<?php
require_once '../src/controllers/EventController.php';

$eventController = new EventController();
$events = $eventController->getUpcomingEvents();

include '../src/views/header.php';
?>

<div class="container">
    <h1>Upcoming Events</h1>
    <?php if (count($events) > 0): ?>
        <ul>
            <?php foreach ($events as $event): ?>
                <li>
                    <h2><?php echo htmlspecialchars($event['title']); ?></h2>
                    <p><?php echo htmlspecialchars($event['description']); ?></p>
                    <p><strong>Date:</strong> <?php echo htmlspecialchars($event['date']); ?></p>
                    <p><strong>Location:</strong> <?php echo htmlspecialchars($event['location']); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No upcoming events at this time.</p>
    <?php endif; ?>
</div>

<?php include '../src/views/footer.php'; ?>