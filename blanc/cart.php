<?php include("header.php") ?>
	<!-- container -->
	<div class="container">
		<!-- main-cart -->
		<div class="main-cart">
			<!-- navigation-in-page -->
			<ul class="navigation-in-page">
				<li><a href="#">Home</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li><a href="#">Pages</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li>About us</li>
				<li><a href="#">< Back to previous page</a></li>
			</ul>
			<!--end navigation-in-page -->
			<!-- table-main -->
			<div class="table-main">
				<table>
					<thead>
						<tr>
							<th class="th-exe"></th>
							<th class="th-product">Items</th>
							<th class="th-price">Unit price</th>
							<th class="th-qty">Quantity</th>
							<th class="th-total">Total</th>
						</tr>
					</thead>
					<tbody>
						<?php for ($i=0; $i <4 ; $i++) { ?>
							<tr class="line">
								<td class="td-exe"><button type="submit" class="button-exe">X</button></td>
								<td class="td-product"><a href="#"><img src="images/assets/img.png" alt=""></a><a href="#">Brown Leather Driving Gloves for Men</a></td>
								<td class="cost td-price">$321.00</td>
								<td class="td-qty">
									<input type="number" id="spinner-line" name="value" value="04" min="1" max="9999">
								</td>
								<td class="cost td-total">$321.00</td>
							</tr> 
						<?php } ?>
					</tbody>
				</table>
			</div>
			<!--end table-main -->
		</div>
		<!--end main-cart -->
	</div>
	<!--end container -->
<?php include("footer.php") ?>	