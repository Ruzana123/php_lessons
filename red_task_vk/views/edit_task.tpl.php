<div class="container">
	<form role="form" action="" method="POST">
		<?php $user_mas=request_user_id(get_username());
		$task=name_task($_GET['category'],$_GET['id'],$user_mas['id']); ?>
		<label for="todo" style="display: block;">Edit name task</label>
		<input type="text" class="form-control" name="task_name" placeholder="<?php echo  $task['todo'] ?>" style="width:75%; display: inline-block;">
		<button type="submit" class="btn btn-success">Редагувати</button>
	</form>
</div>