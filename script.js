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


							$("#error").html('<div><img src="images/danger.png"> &nbsp; Ten nguoi dung da ton tai !</div>');

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
	});
		