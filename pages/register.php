<link rel="stylesheet" type="text/css" href="css/checkbox.css">
<section id="reg" class="no-margin log-user fon wrapper">
	<div class="log-reg">
		<div class="container">
			<div class="row main-form">
				<form class="action-form" method="post" action="#">				
					<h1 class="h1-margin">Register</h1>
					<div class="row reg-form">
						<div class="col-xs-5 col-md-5 col-pad">
							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Your Name</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fas fa-user" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="username" id="username" placeholder="Enter your Name"/>
									</div>
								</div>
							</div>					
							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Your Email</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fas fa-envelope" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="email" id="email" placeholder="Enter your Email"/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-5 col-md-5 col-pad">
							<div class="form-group">
								<label for="discord" class="cols-sm-2 control-label">Discord</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fab fa-discord" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="discord" id="discord" placeholder="Enter your Discord"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="skype" class="cols-sm-2 control-label">Skype</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fab fa-skype" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="skype" id="skype" placeholder="Enter your Skype"/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-5 col-md-5 col-pad">
							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" required class="form-control" name="password" id="password" placeholder="Enter your Password"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" required class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password"/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-5 col-md-5 col-pad">
							<div class="form-group reg-info">
								<div class="checkbox">
									<div class="check-l">
										<input type="checkbox" id="cb1" checked>
										<label class="check" required for="cb1"><div class="tick reg-tick"></div></label>
									</div>
									<div class="check-r">
										<p>I agree with Terms of Service and Privacy Policy</p>
									</div>
								</div>
								<div class="checkbox">
									<div class="check-l">
										<input type="checkbox" id="cb2" checked>
										<label class="check" for="cb2"><div class="tick reg-tick"></div></label>
									</div>
									<div class="check-r">
										<p>Subscribe to our Limited Offer newsletter (Optional)</p>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-but">
							<div class="form-but-a">
								<button	id="button" class="btn btn-primary btn-lg btn-block login-button" type="submit">Register</button>
								<a href="/?page=login"><p class="red-color">Already have an account? Sign in!</p></a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
</section>