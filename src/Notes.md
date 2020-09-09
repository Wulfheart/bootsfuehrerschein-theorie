# Getting answered tasks with task_id and count

````php
\App\Models\AnsweredTasks::rightJoin('tasks', function($join){
	$join->on('answered_tasks.task_id', '=', 'tasks.id')
      ->where(
        'learning_path_id', 
        \App\Models\User::first()->learningPaths()->first()->id
      );
})
  ->groupBy('tasks.id')
  ->selectRaw('tasks.id AS task_id, count(answered_tasks.task_id) AS count')
  ->get()
````

# Get Tasks with total_answered_count and answered_correctly_count by learning_path_id

````php
$first = \App\Models\Task::query()

  ->selectRaw('tasks.id AS task_id , count(answered_tasks.answered_correctly) AS answered_correctly_count')
  ->leftJoin('answered_tasks', function($join){
	$join->on('answered_tasks.task_id', '=', 'tasks.id')
      ->where('learning_path_id', 1)
      ->where('answered_correctly', 1);
})
  ->groupBy('tasks.id');



$second = \App\Models\Task::query()
  ->selectRaw('tasks.*, count(answered_tasks.task_id) AS total_answered_count, answered_correctly_count')
  ->leftJoin('answered_tasks', function($join){
	$join->on('answered_tasks.task_id', '=', 'tasks.id')
      ->where('learning_path_id', 1);
})
  ->joinSub($first, 'correct_count', function ($join){
  	$join->on('tasks.id', '=', 'correct_count.task_id');
  })
  ->groupBy('tasks.id')
  ->with('responses')
  ->get();
````
