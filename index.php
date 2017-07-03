<?php
require_once './lib/setup.php';

$action = null;
$taskName = null;
$errors = [];

if (isset($_POST['action'])) {
  $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
  $action = $_GET['action'];
}

if (!isset($_SESSION['tasks'])) {
  $_SESSION['tasks'] = [];
}

if ($action == 'addTask') {
  require_once 'actions/add_task.php';
}

if ($action == 'deleteTask') {
  require_once 'actions/delete_task.php';
}

if ($action == 'deleteAllTasks') {
  require_once 'actions/delete_all_tasks.php';
}

$tasks = $_SESSION['tasks'];

?>
<html>

<head>
  <title>Checklist</title>
  <link rel="stylesheet" type="text/css" href="css/css.css" />
  <script src="js/js.js"></script>

</head>

<body style="background-color:powderblue;">

  <div>
    <?php var_dump($_SESSION); ?>
    <?php var_dump($_POST); ?>
    <?php var_dump($_GET); ?>
  </div>
  <form action="" method="post">
    <input type="hidden" name="action" value="addTask">
    <input name="taskName" id="userinput" size="35" align="center" value="" placeholder="What do you want to remember?" type="text"></input>

    <button type="submit">Salvar</button>
  </form>

  <?php foreach($errors as $error) : ?>
    <p><?php echo $error ?></p>
  <?php endforeach; ?>

<a href="?action=deleteAllTasks">Delete all tasks</a>
  <ul id="list">
    <?php foreach ($tasks as $task): ?>
      <li>
        <?php echo protect($task) ?>&nbsp;<a href="?action=deleteTask&taskName=<?php echo urlencode($task) ?>">Remove</a>
      </li>
    <?php endforeach ;?>
  </ul>
</body>

</html>
