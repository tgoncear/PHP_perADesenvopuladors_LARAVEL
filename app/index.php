

<?php

use App\Framework\App;

$tasks = App::get('database')->selectAll('tasks');
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();