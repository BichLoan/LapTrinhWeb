<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Lap trinh web</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen">
	</head>
	<body>
		<div class="signin-form">

			<div class = "container">

				<form class="form-signin" action = "List.php" method="post" id="check" name = "check">

					<h2 class="form-signin-heading">Trang chủ Facebook</h2><hr />

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Bạn đang nghĩ gì" name="content" id="content" maxlength = "144" /><br />
					</div>

					<div class="form-group">
						<button type="submit" class="btnSubmit" name="btn-save" id="btn-submit">
							<span class="glyphicon glyphicon-log-in"></span> &nbsp; Đăng
						</button>
					</div>
					<div class="form-group">
						<div class="form-group">
							<button type="submit" class="Submit" name="btn-save" id="btn-submit">
								<span class="glyphicon glyphicon-log-in"></span> &nbsp; Hiển thị danh sách bạn bè
							</button>
						</div>
					</div>
					
					<div id="flash" align="left"  ></div>
					<ol  id="update" class="timeline">
					</ol>
					<?php
						include("Status.php");
					?>
					<div id="old_updates">

					</div>
				</form>
				
			</div>
		</div>
		
		<script src="js/bootstrap.min.js"></script>
	</body>
	<script type="text/javascript">
		$(function() {

			$(".btnSubmit").click(function() 
			{
				var element = $(this);
			   
				var boxval = $("#content").val();
				
				var dataString = 'content='+ boxval;
				
				if(boxval=='')
				{
				alert("Please Enter Some Text");
				
				}
				else
				{
					$("#flash").show();
					$("#flash").fadeIn(400).html('<img src="ajax.gif" align="absmiddle">&nbsp;<span class="loading">Loading Update...</span>');
					$.ajax({
						type: "POST",
						url: "update.php",
						data: dataString,
						cache: false,
						success: function(html){
					 
					  $("ol#update").prepend(html);
					  $("ol#update li:first").slideDown("slow");
					   document.getElementById('content').value='';
					  $("#flash").hide();
						
					  }
					});
				}
				return false;
			});
		});
	</script>
</html>
