<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Список моїх завдань</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<header>
		</header>
		<div class="container">
			<h1 style="display: inline-block; margin-right:15px;">Latest task</h1><h4 style="display: inline-block; color:gray;">manage your tasks</h4>
			
			<div class="row todos">
				<?php show_template("good"); show_template("print_error");?>
				<div class="col-md-8">
					<ul class="list-group">
						<?php 
						if (is_logged_in()){
							$user_mas=request_user_id(get_username());
							foreach (request_task_list() as $key => $list) {
								?><div class="alert alert-success" role="alert">
								<a href="<?php get_url_post("todos",'id',$list['list_id'])?>"> <?php echo $list['name'];  $count=count_task($list['list_id'],$user_mas['id']); 
								echo  "   ".$count[COUNT(`todo`)];?></a>
								</div><?php
							}
							//$user_mas=request_user_id(get_username());
							if(!empty($_GET['id'])){
								foreach (request_todos($user_mas['id'],$_GET['id']) as $key => $todo) {
								if ($todo[marker]==1){
								?>
						 		<li class="list-group-item" style="text-decoration:line-through">
						    		<span class="badge todos">done</span>
								    <?php echo $todo[todo]; ?>
								    <div class="todo-btn" style="float:right; margin: 10px;">
										<a href="<?php get_url_post("new",'id',$todo['id']) ?>" style="color:blue; text-decoration:none"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></a>
								 <?php }
								else{ ?>
									<li class="list-group-item">
						    		<span class="badge todos">new</span>
								    <?php echo $todo[todo]; ?>
								    <div class="todo-btn" style="float:right; margin: 10px;">
										<a href="<?php get_url_post("done",'id',$todo['id']) ?>" style="color:blue; text-decoration:none"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
								<?php } ?>
										<a href="<?php get_url_post("delete",'id',$todo['id']) ?>" style="color:blue; text-decoration:none"><span class="glyphicon glyphicon-remove" aria-hidden="true"></a>
						 			</div>
								 </li> <?php
										}
									?>
								</ul>
							</div>
							<div class="col-md-4">
								<form role="form" action="index.php?action=todos" method="POST">
									<label for="todo" style="display: block;">Add new task</label>
									<input type="hidden" name = "id_list" value="<?php echo $_GET['id'] ?>">
									<input type="text" class="form-control" name="todo" placeholder="todo..." style="width:75%; display: inline-block;">
									<button type="submit" class="btn btn-success">Додати</button>
								</form>
							</div><?php
						}
							
				}
				else{
					?><div class="alert alert-danger" role="alert"><?php
			        echo "Для перегляду завдань ввійдіть в систему";  
			        ?></div><?php
				}
				?>
			</div>
		</div>
		<div>
			<span>
				
			</span>
		</div>
		<footer>
			
		</footer>
		<!-- end footer -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</body>
</html>