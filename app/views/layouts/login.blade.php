<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<!-- Set the route on the form here -->
		{{ Form::open(array('url' => '/user/login')) }}
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="loginModalLabel">Login</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="tf_login_username" class="control-label">Username:</label>
						<input type="text" class="form-control" id="tf_login_username" name="tf_login_username" tabindex="1" required>
					</div>
					<div class="form-group">
						<label for="tf_login_password" class="control-label">Password:</label>
						<input type="password" class="form-control" id="tf_login_password" name="tf_login_password" tabindex="2" required>
					</div>
					<div class="form-group">
						<label class="form-control"><input type="checkbox" name="persist" tabindex="3">&nbsp;Remember me?</label>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" tabindex="5">Close</button>
					<input type="submit" class="btn btn-primary" id="btn-login" value="Login" tabindex="4" />
				</div>
			</div>
		</form>
	</div>
</div>