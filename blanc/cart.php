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
								<td class="td-exe"><a href="#" class="button-exe"><img src="images/assets/x.png" alt=""></a></td>
								<td class="td-product"><a href="#"><img src="images/assets/img.png" alt="" width="94" height="106"></a><a href="#" class="name-product">Brown Leather Driving Gloves for Men</a></td>
								<td class="cost td-price">$321.00</td>
								<td class="td-qty">
									<input type="number" class="spinner" name="value" value="1" min="1" max="9999">
								</td>
								<td class="cost td-total">$321.00</td>
							</tr> 
						<?php } ?>
					</tbody>
				</table>
			</div>
			<!--end table-main -->
			<!-- checkout -->
			<div class="row checkout">
				<div class="col-md-6"> 
					<!-- coupon -->
					<div class="coupon">
						<h2>Have a coupon?</h2>
						<form action="" class="coupon-form">
							<input type="text" placeholder="Enter coupon code"> 
							<button type="submit" class="button-send coupon-btn">Add coupon</button> 
						</form>
					</div>
					<!--end coupon -->
					<!-- calculate -->
					<div class="calculate">
						<h2>Calculate Shopping</h2>
						<span><a href="#">Click here </a>to calculate shipping fee, based on your location or shipping address.</span>
					</div>
					<!-- calculate -->					
				</div>
				<div class="col-md-6"> 
					<!-- total-table -->
					<table class="total-table">
						<thead>
						<tr>
							<th colspan="2">Shopping Bag Total</th>
						</tr>
					</thead>
						<tbody>
							<tr>
								<td>Subtotal</td>
								<td class="subtotal">$321.00</td>
							</tr> 
							<tr>
								<td>Items</td>
								<td class="items">Freeshipping</td>
							</tr> 
							<tr>
								<td>Total</td>
								<td class="total">$321.00</td>
							</tr> 
						</tbody>
						<tfoot>
							<tr class="btn-cart-line">
								<td>
									<a href="#" class="btn-cart first-btn button-send">Update cart</a>
								</td>
								<td><a href="#" class="btn-cart button-send">Continue to checkout</a></td>
							</tr>
						</tfoot>
					</table>
					<!--end total-table -->
				</div>
			</div>
			<!--end checkout -->
		</div>
		<!--end main-cart -->
	</div>
	<!--end container -->
<?php include("footer.php") ?>	