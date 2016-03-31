<div class="container">
	<div>
		<table class="table table-condensed table-hover">
			<tr class="success">
				<td>ID</td>
				<td>NICK</td>
				<td>EMAIL</td>
				<td>VK_NAME</td>
				<td>VK_IMG</td>
				<td>VK_LINK</td>
			</tr>
			<?php foreach (all_users() as $key => $user) { ?>
					<tr class="info">
						<td> <?php echo $user['id'] ?></td>
						<td> <?php echo $user['nick'] ?></td>
						<td> <?php echo $user['email'] ?></td>
						<td> <?php echo $user['vk_name'] ?></td>
						<?php if (!empty($user['vk_img'])){ ?>
							<td> <?php echo '<img src="' .  $user['vk_img'] . '"/>'?> </td><?php
						} 
						else{ ?>
							<td> <?php echo '<img src="' . "ava.jpg" . '"/>'?> </td><?php
						}?>
						<td><a href="https://vk.com/<?php echo $user['vk_link'] ?>"><?php echo $user['vk_link'] ?></a></td>
					</tr>
				<?php
			} ?>
		</table>
	</div>
</div>