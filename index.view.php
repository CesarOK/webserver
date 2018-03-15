<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">	
	<title>Pagina do César e do Abdala</title>
	
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>

</head>


<body>
  <header>
  	<h1><?= $greetings ?></h1>
  </header>
  <ul>
   <?php foreach ($names as $name) : ?>
      <li><?= $name; ?></li>
  <?php endforeach; ?>
  </ul>
  <ul>
    <?php foreach ($person as $key => $feature) : ?>
      <li> <strong><?= $key; ?></strong> <?= $feature; ?> </li>
    <?php endforeach; ?>
  </ul>
  <?=dd($task);?>

  <h1>Task for today</h1>
  <ul>
    <li>
      <strong>Title: </strong> : <?= $task['title']; ?>
    </li>
    <li>
      <strong>Due Date: </strong> : <?= $task['due']; ?>
    </li>
    <li>
      <strong>Responsible: </strong> : <?= $task['assigned_to']; ?>
    </li>
    <li>
      <strong>Status: </strong> : <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
    </li>
  </ul>
</body>

</html>