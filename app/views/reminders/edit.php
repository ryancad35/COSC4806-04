<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header">
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <h1>Edit Your Reminder</h1>
        <form action="/reminders/edit_reminder" method="post">
            <fieldset>
                <legend>Enter Your Reminder</legend>
                <div class="form-group">
                    <textarea maxlength="255" name="message" id="message" class="form-control"><?php echo $reminder['subject']; ?></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="action" value="Edit Reminder" class="btn">
            </fieldset>
        </form>
    </div>
</div>
<?php require_once 'app/views/templates/footer.php'?>