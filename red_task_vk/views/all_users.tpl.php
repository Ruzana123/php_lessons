<div class="container">
	<div>
		<table class="table table-condensed table-hover">
				<thead>
					<tr class="active">
						<td>ID</td>
						<td>NICK</td>
						<td>EMAIL</td>
						<td>VK NAME</td>
						<td>AVATAR</td>
						<td>VK LINK</td>
						<td>ADMIN</td>
					</tr>
				</thead>
			<?php foreach (all_users() as $key => $user) { ?>
					<tr>
						<td> <?php echo $user['id'] ?></td>
						<td> <?php echo $user['nick'] ?></td>
						<td> <?php echo $user['email'] ?></td>
						<td> <?php echo $user['vk_name'] ?></td>
						<?php if (!empty($user['vk_img'])){ ?>
							<td> <?php echo '<img src="' .  $user['vk_img'] . '"/>'?> </td><?php
						} 
						else{ ?>
							<td> <?php echo '<img src="' . "ava.gif" . '"/>'?> </td><?php
						}?>
						<td><a href="https://vk.com/<?php echo $user['vk_link'] ?>"><?php echo $user['vk_link'] ?></a></td>
						<?php if ($user['admin']==true){ ?>
							<td><span class="glyphicon glyphicon-flag" style="margin-right: 10px;" aria-hidden="true"></td><?php
						} 
						else { ?>
							<td><span class="glyphicon glyphicon-remove" style="margin-right: 10px;" aria-hidden="true"></td><?php
						}?>
					</tr>
				<?php
			} ?>
		</table>
	</div>
</div>