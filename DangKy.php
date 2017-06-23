<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Lap trinh web</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
		<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js" type="text/javascript"></script>
	</head>
	<body>
		<div class = "signin-form">
		<form class = "form-signin" method = "POST" id = "check" name = "check">
			<h2 class="form-signin-heading">Sign Up</h2><hr />
            <div id="error">
            </div>
			<div>
			User name:<br>
			<input type = "text" name = "username" id="username" size="30"><br>
			</div>
			
			<div>
			User password:<br>
			<input type = "password" name = "pw" id = "pw"><br>
			</div>
			
			<div>
			ReConfirmPassword:<br>
			<input type = "password" name = "confirmPW" id = "confirmPW"><br>
			</div>
			<button type = "submit" name = "sign-up" id = "btn-submit"><br>
				<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button>
		</form>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function() {
			 $("#check").validate({
				rules: {
					username: {
						required: true,
					},
					pw:{
						required: true,
						minlength: 4
					},
					confirmPW:{
						required: true,
						minlength: 4,
						equalTo: "#pw"
					}		
				},
				messages: {
					username: "Không được để trống",
					pw: {
						required: "Không được để trống",
						minlength: "Mật khẩu phải dài hơn 4 kí tự"
					},
					confirmPW: {
						required: "Không được để trống",
						minlength: "Mật khẩu phải dài hơn 4 kí tự",
						equalTo: "Hai mật khẩu phải trùng nhau"
					}
				},
				submitHandler: submitForm
				});
		});
		function submitForm()
		{
			var data = $("#check").serialize();

			$.ajax({

				type : 'POST',
				url  : 'kiemtra.php',
				data : data,
				beforeSend: function()
				{
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
				{
					if(data=="YES"){

						$("#error").fadeIn(1000, function(){


							$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry username already taken !</div>');

							$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

						})

					}
					else if(data = "NO")
					{

						$("#btn-submit").html('Signing Up');
						setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").html("Success Sign-up"); }); ',5000);

					}
					else{

						$("#error").fadeIn(1000, function(){

							$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

							$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

						});

					}
				}
			});
			return false;
		}
		
	</script>
</html>
