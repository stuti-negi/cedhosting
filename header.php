<?php session_start(); ?>
<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php"><span style="color: #e7663f;">CED</span> <span style="color: #585ca7;"><strong>HOSTING</strong></span> </a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
							
								<li><a href="services.php">Services</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
									<?php
											include 'logics/Product.php';
											$product=new Product();
											$data=$product->select();
											$no_r=$data->num_rows;
											for($i=0;$i<$no_r;$i++)
											{
												$row=$data->fetch_assoc();

									?>
									<li><a href="hosting.php?id=<?php echo $row["id"];?>&name=<?php echo $row['prod_name'];?>"><?php echo $row['prod_name'];?></a></li>
									<?php }?>
										
									</ul>			
								</li>
								<li><a href="pricing.php">Pricing</a></li>
								<!-- <li><a href="codes.php">Codes</a></li> -->
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php"><i class="fas fa-shopping-cart"></i>
								<span class="badge badge-light">
								<?php
								if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']['data']);}else{echo 0;}
								?>
								</span></a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>