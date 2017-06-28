<?php
require_once './lib/setup.php';

$value = null;

if (isset($_POST['task'])) {
    $value = $_POST['task'];
    $_SESSION = $_POST;
}

$greeting = 'yes';

if (!isset($_SESSION['tasks'])) {
  $_SESSION['tasks'] = [];
}

if (isset($_POST['taskName'])) {
  $_SESSION['tasks'][] = $_POST['taskName'];
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
  <?php endif ?>
    <div>
        <?php var_dump($_SESSION); ?>
        <?php var_dump($_POST); ?>
    </div>
    <form action="" method="post">
        <input name="taskName" id="userinput"size="35"align="center" value="<?php echo $value; ?>" placeholder="What do you want to remember?"type="text"></input>

        <button type="submit">Salvar</button>
    </form>
  <button onclick="submit()">Add</button>
  <button onclick="clearA()">Clear</button>
  <ul id="list">
    <?php foreach ($tasks as $task): ?>
      <li><?php echo $task ?></li>
   <?php endforeach ;?>
  </ul>
</body>
</html>
