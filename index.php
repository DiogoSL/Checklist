<?php
require_once './lib/setup.php';
$_SESSION['error_1'] = null;
$_SESSION['error_2'] = null;
$taskName = null;

if (isset($_POST['taskName'])) {
  $taskName = $_POST['taskName'];
}

$greeting = 'yes';

if (!isset($_SESSION['tasks'])) {
  $_SESSION['tasks'] = [];
}

if ($taskName !== null) {
  foreach ($_SESSION["tasks"] as $task){
    if($_POST["taskName"]==$task){
      $_SESSION['error_1'] = true;
    }

  }
  if ($_POST['taskName'] == '') {
    $_SESSION['error_2'] = true;
  }
  $_SESSION['tasks'][] = $taskName;

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

  <?php if ($greeting == 'yes') : ?>
    <p>Ola tudo bem</p>
  <?php endif; ?>
  <div>
    <?php var_dump($_SESSION); ?>
    <?php var_dump($_POST); ?>
  </div>
  <form action="" method="post">
    <input name="taskName" id="userinput" size="35" align="center" value="" placeholder="What do you want to remember?" type="text"></input>

    <button type="submit">Salvar</button>
  </form>
  <?php if ($_SESSION['error_1'] == true): ?>
  <p>You alredy have this task!</p>
  <?php endif;
  if ($_SESSION['error_2'] == true): ?>
  <p>Please dont leave it empty</p>
  <?php endif; ?>

  <button onclick="submit()">Add</button>
  <button onclick="clearA()">Clear</button>
  <ul id="list">
    <?php foreach ($tasks as $task): ?>
      <li>
        <?php echo protect($task) ?>
      </li>
    <?php endforeach ;?>
  </ul>
</body>

</html>
