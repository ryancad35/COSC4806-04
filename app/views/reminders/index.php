    <?php require_once 'app/views/templates/header.php' ?>
    <div class="container">
        <div class="page-header">
            <h1>Reminders</h1>
            <p><a href='reminders/create'>Create a reminder</a></p>
        </div>

        <div class="reminders-list">
            <?php echo $remindersList; ?>
        </div>
    </div>
    <?php require_once 'app/views/templates/footer.php' ?>