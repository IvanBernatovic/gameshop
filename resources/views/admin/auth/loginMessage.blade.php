@if(session('flag') == 'activated')
<div class="form-signin">
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Congratulations!</strong> You successfully activated your account, you can now log in. 
	</div>
</div>

@elseif(session('flag') == 'notActivated')
<div class="form-signin">
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Activation link is already used or it doesn't exist.
	</div>
</div>

@elseif(session('flag') == 'wrongLogin')
<div class="form-signin">
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Wrong login info. Please try again.
	</div>
</div>

@else
<div class="form-signin">
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Well done!</strong> We have sent you an email with activation link. You can log in after you activate your account. 
	</div>
</div>
@endif