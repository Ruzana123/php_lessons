<div class="container">
	<form role="form" action="" method="POST">
		<?php $category=new_name_category($_GET['id_category']); ?>
		<label for="todo" style="display: block;">Edit name category</label>
		<input type="text" class="form-control" name="category_name" placeholder="<?php echo  $category['name'] ?>" style="width:75%; display: inline-block;">
		<button type="submit" class="btn btn-success">Редагувати</button>
	</form>
</div>