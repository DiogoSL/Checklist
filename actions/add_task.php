<?php

/**
 * @return array a collection of validation errors if there are any
 *              if there are no errors returns empty array
 */
function addTask(string $taskName) : array {
  $taskName = trim($taskName);

  $errors = [];

  if ($taskName !== null) {
    foreach ($_SESSION['tasks'] as $task){
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

  return $errors;
}



$taskName = $_POST['taskName'];


$errors = addTask($taskName);
