
<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COSC 4806</title>
    <link rel="stylesheet" href="/app/views/templates/style.css">
</head>
<body>
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">COSC 4806</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/reminders">Reminders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/reminders/create">Create Reminder</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#">Account</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/reminders">My Reminders</a></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
