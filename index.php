<?php
require_once './lib/setup.php';

$value = null;

if (isset($_POST['task'])) {
    $value = $_POST['task'];
    $_SESSION = $_POST;
}

$greeting = 'yes';

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
        <input name="task" id="userinput"size="35"align="center" value="<?php echo $value; ?>" placeholder="What do you want to remember?"type="text"></input>
        <input name="animal" type="text" class="text" value="" name="">
        <button type="submit">Salvar</button>
    </form>
  <button onclick="submit()">Add</button>
  <button onclick="clearA()">Clear</button>
  <ul id="list">
    <?php
    $tasks = [
      'Arrumar a cama',
      'Preparar a sentinela',
      'Arrumar a pasta do campo',
    ];
    foreach ($tasks as $task){
      echo "<li> hhhhh $task </li>";
    }
    ?>


    <?php foreach ($tasks as $task): ?>
      <li><?php echo $task ?></li>
   <?php endforeach ;?>
  </ul>
</body>
</html>
