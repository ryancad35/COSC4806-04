<?php

class Reminders extends Controller {

    public function __construct() {
        // If user is not logged in, redirect to login page
        if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
            header('Location: /login');
            exit;
        }
    }
    // Display all reminders
    public function index() {
        $reminder = $this->model('Reminder');
        $list_of_reminders = $reminder->get_all_reminders();
        $remindersList = $reminder->create_reminders_list($list_of_reminders);
        $this->view('reminders/index', ['reminders' => $list_of_reminders, 'remindersList' => $remindersList]);
    }

    // Redirect to page to create a new reminder
    public function create() {
        $reminder = $this->model('Reminder');
        $this->view('reminders/create');
    }

    // Capture when user submits a new reminder
    public function create_reminder() {
        $action = filter_input(INPUT_POST, 'action');

        if ($action === 'Submit Reminder') {
            $message = trim(filter_input(INPUT_POST, 'message'));

            if (!empty($message)) {
                $reminder = $this->model('Reminder');
                $reminder->add_reminder($message);
                header('Location: /reminders');
                exit;
            } else {
                $error = 'Reminder message cannot be empty.';
                $this->view('reminders/create', ['error' => $error]);
                return $error;
            }
        }
    }

    // Delete a reminder
    public function delete($id) {
        $reminder = $this->model('Reminder');
        $reminder->delete_reminder($id);
        header('Location: /reminders');
        exit;
    }

    
}