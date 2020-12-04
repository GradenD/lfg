<div class="info-head">
	<h1 id='h1-user'>Bio Graph <i class="fas fa-pencil-alt bio-row-i" aria-hidden="true"></i></h1>
	<h1 id='h1-password'>Password</h1>
</div>
<!-- Информация о пользователе -->
<div id="info-body" class="info-boddy">
	<div class="column">
		<div class="bio-row">
			<p>First Name: <p id="first" class="edit" contenteditable="false">Camila</p></p>
		</div>
		<div class="bio-row">
			<p>Country: <p id="country" class="edit">Australia</p></p>
		</div>
		<div class="bio-row">
			<p>Phone: <p id="phone" class="edit">(12) 03 4567890</p></p>
		</div>
		<div class="bio-row">
			<p>Skype: <p id="skype" class="edit">live:.cid.d1924dba0ec65b2b</p></p>
		</div>
	</div>
	<div class="column">
	    <div class="bio-row">
		    <p>Last Name: <p id="last" class="edit">Smith</p></p>
		</div>
		<div class="bio-row">
			<p>Birthday: <p id="bithday" class="edit">13 July 1998</p></p>
		</div>
		<div class="bio-row">
			<p>Email: <p id="email" class="edit">jsmith@flatlab.com</p></p>
		</div>
		<div class="bio-row">
			<p>Discord: <p id="discord" class="edit">The Gallywix Community</p></p>
		</div>
	</div>
</div>
<div id="info-footer" class="info-footer">
	<p id="info-fot">You can change personal information, such as your date of birth 
		and gender, as well as your email address and phone number.</p>
	<button id="save" class="btn-send" type="submit"> 
		<i class="fab fa-telegram-plane" aria-hidden="true"></i> Save changes
	</button>
</div>

<!-- Смена пороля -->
<div id="body-password" class="info-boddy info-password">
	<div class="bio-row">
		<div class="form-group">
			<label for="password" class="cols-sm-2 control-label">Current password</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
					<input type="password" required="" class="form-control" name="password" id="password" placeholder="Enter your Password">
				</div>
			</div>
		</div>
	</div>
	<div class="bio-row">
		<div class="form-group">
			<label for="password" class="cols-sm-2 control-label">New password</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
					<input type="password" required class="form-control" name="password" id="password" placeholder="Enter your Password">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="cols-sm-2 control-label">Repeat the new password</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
					<input type="password" required class="form-control" name="password" id="password" placeholder="Enter your Password">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer-password" class="info-footer">
	<button class="btn-send" type="submit"> 
		<i class="fab fa-telegram-plane" aria-hidden="true"></i> CHANGE PASSWORD
	</button>
</div>