<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <!-- Display error if there is one -->
                <?php echo $error; ?>
                <h1>Create a Reminder</h1>
                <form action="/reminders/create_reminder" method="post">
                    <fieldset>
                        <legend>Enter Your Reminder</legend>
                    <textarea maxlength="255" name="message" id="message">
                    </textarea><br>
    
                    <input type="submit" name = "action" value="Submit Reminder">
                    </fieldset>
                </form>
            <br>
            </div>
        </div>
    </div>

<?php require_once 'app/views/templates/footer.php'?>