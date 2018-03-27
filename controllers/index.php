<?php


$tasks = $app['database']->selectALL('todos');

// dd($tasks[0]->description);


// dd($tasks);
require 'index.view.php';

?>