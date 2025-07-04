<?php

class Reminder {

    public function __construct() {
      }

    public function add_reminder() {
      $db = db_connect();
      $message = filter_input(INPUT_POST, 'message');
      $query = 'INSERT INTO reminders (subject) VALUES (:subject)';
      $statement = $db->prepare($query);
      $statement->bindValue(':subject', $message);
      $statement->execute();
    }

    public function get_all_reminders() {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function update_reminder($subject, $id) {
      $db = db_connect();
      $query = 'UPDATE reminders SET subject= :subject WHERE id = :id';
      $statement = $db->prepare($query);
      $statement->bindValue(':subject', $subject);
      $statement->bindValue(':id', $id);
      $statement->execute();
      $statement->closeCursor();  
    }

  public function delete_reminder($id) {
    $db = db_connect();
    $query = 'DELETE from reminders WHERE id= :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();  
  }

    function create_reminders_list($reminders)
    {
      $remindersList = "";
  
      foreach ($reminders as $row) {
        $subject = htmlspecialchars($row['subject']);
        $created_at = htmlspecialchars($row['created_at']);
        $id = $row['id'];
  
        $remindersList .= "<p><strong>Reminder:</strong> $subject</p>";
        $remindersList .= "<p><b>Created on:</b> $created_at</p>";
        $remindersList .= "<p>
          <a href='reminders/edit/$id'>Edit</a> | 
          <a href='reminders/delete/$id'>Delete</a>
        </p><hr>";
      }
      return $remindersList;
    }
}