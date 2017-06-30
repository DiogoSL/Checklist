<?php

if (isset($_POST['taskName'])) {
  $taskName = trim($_POST['taskName']);
}

if ($taskName !== null) {
  addTask($_SESSION["tasks"]);
}
function addTask ($tasks){
  foreach ($tasks as $task){
    if(strtolower($taskName) == strtolower($task)){
      $errors[] = 'You already added this task';
      break;
  }
}
}

  if ($taskName == '') {
    $errors[] = 'Cannot be blank';
  }

  if (count($errors) == 0) {
    $_SESSION['tasks'][] = $taskName;
  }
