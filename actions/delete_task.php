<?php

function deleteTask($taskName) {
  foreach ($_SESSION['tasks'] as $key => $value) {
    if ($value == $taskName) {
      // remove o elemeto do array se ele tiver o mesmo nome do paramtro $_GET['taskName']
      unset($_SESSION['tasks'][$key]);
    }
  }
}

deleteTask($_GET['taskName']);
