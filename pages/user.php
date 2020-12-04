<link rel="stylesheet" type="text/css" href="css/profile.css">
<section id="user" class="no-margin log-user fon wrapper">
	<div class="">
		<div class="container">
			<div class="row main-form">
				<form class="action-form" method="post" action="#">				
					<div class="user-form">
						<div id="config-user" class="config-user">
							<div class="row user-mb">
								<div class="col-12">
									<div class="user-head">
										<img src="img/avatar.png">
										<h1>mrs.Smith</h1>
									</div>
									<div class="user-body">
										<div id="pr"   class="block-config">
											<div class="param confg-active">
												<p><i class="fas fa-user" aria-hidden="true"></i> Profile</p>
											</div>
										</div>
										<div id="ed-pr"   class="block-config">
											<div class="param">
												<p><i class="fas fa-edit"></i> Edit profile</p>
											</div>
										</div>
										<div id="password" class="block-config">
											<div class="param">
												<p><i class="fas fa-pencil-alt"></i> Change password</p>
											</div>
										</div>
										<div class="block-config">
											<div class="param">
												<p><i class="fas fa-door-open"></i> Sign out</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div id="info-user" class="info-user">
							<?php 
								require_once 'pages/config-user.php';
							?>
						</div>
					</div>
					<div class="orders-form">
						<div class="row">
							<div class="col-12">
								<div class="orders-head">
									<h1>My Orders</h1>
								</div>
								<div class="orders-body">
									<div class="orders">
										<div class="orders-title">
											<div class="title">
												<h2>Dungeons, Mithic+</h2>
											</div>
											<div class="price">
												<div class="price-info">
													<p>26 MAY, 00:30 (ASIA, YEKATERINBURG)</p>
												</div>
												<div class="price-info">
													<p>$ 256</p>
												</div>
											</div>
										</div>
										<div class="orders-info">
											<p>Key lvl 16, Specific key choise, Gear traders, 
											Number of runs 4, Priority (express)</p>
										</div>
									</div>
									<div class="orders">
										<div class="orders-title">
											<div class="title">
												<h2>Dungeons, Mithic+</h2>
											</div>
											<div class="price">
												<div class="price-info">
													<p>26 MAY, 00:30 (ASIA, YEKATERINBURG)</p>
												</div>
												<div class="price-info">
													<p>$ 256</p>
												</div>
											</div>
										</div>
										<div class="orders-info">
											<p>Key lvl 16, Specific key choise, Gear traders, 
											Number of runs 4, Priority (express)</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
</section>
<script type="text/javascript" src='js/user.js'></script>