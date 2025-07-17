
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">COSC 4806</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/reminders">My Reminders</a></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
