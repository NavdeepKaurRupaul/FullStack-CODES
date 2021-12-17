<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../CSS/bootstrap.css">
	<!-- Optional JavaScript; choose one of the two! -->

	<script src="../JS/jquery-1.8.2.min.js"></script>

	<script src="../JS/bootstrap.bundle.min.js"></script>

	<script>
	$(document).ready(function(){
		//-----------------
		
		$(document).ajaxStart(function()
							 {
			$("#chakkar").css("display","inline");
		});
		$(document).ajaxStop(function()
							 {
			$("#chakkar").css("display","none");
		});
		
		//---------------
		
		
		$("#txtUid").blur(function(){
			
			//$.get(url,call-back-function);
			var uid=$("#txtUid").val();
			
			var url="ajax-chk-uid.php?uidy="+uid;
			
			$.get(url,function(responsex){
				$("#errUid").html(responsex);//string format
			});
		});
		//---------------------
		$("#btnFetch").click(function(){
			//$.get(url,call-back-function);
//			alert("hi");
			var uid=$("#txtUid").val();
			
			var url="json-fetch-record.php?uidy="+uid;
			
			$.getJSON(url,function(jsonAryFeeling){
				//alert(jsonAryFeeling);
				alert(JSON.stringify(jsonAryFeeling));
				$("#txtPwd").val(jsonAryFeeling[0].password);
				$("#prev").prop("src","../uploads/"+jsonAryFeeling[0].image_path);
				$("#hdn").val(jsonAryFeeling[0].image_path);
				alert($("#hdn").val());
			});
		});
	});
	
	  
	</script>
	<style>
	  
		label{
			padding: 5px 0px 5px;
		}
		#chakkar{
			display: none; 	
		}
	
	  </style>
	<title>Hello, world!</title>
</head>
<body>
	<div class="container">
		<div class="row bg-danger">
			<div class="col-md-12">
				<h3>
					<center>User Profile </center>
				</h3>
			</div>
		</div>
		<form action="BS-profile-process-mysql.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="hdn" id="hdn">
		<div class="row ">
			<div class="col-md-4 form-group">
				<label for="">User ID</label>
				<img id="chakkar" src="pics/loading9.gif">
				<input type="text" class="form-control" name="txtUid" id="txtUid">
				<span id="errUid">*</span>
			</div>
			<div class="col-md-2 form-group">
				<label for=""> &nbsp;</label>
				
				<input type="button" class="form-control btn btn-primary"  id="btnFetch" value="Fetch">
			</div>
			<div class="col-md-6 form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="txtPwd" id="txtPwd">
				<span id="errPwd">*</span>

			</div>

		</div>
		<div class="row ">
			<div class="col-md-6 form-group">
				<label for="">Profile Pic</label>
				<input type="file" class="form-control" name="ppic">
				<span id="errUid">*</span>
			</div>
			<div class="col-md-6 form-group">
				<img src="pics/userlogin.png" width="100" height="100" id="prev">

			</div>

		</div>
		<div class="row">
			<div class="col-md-6 offset-md-4">
				<input type="submit" class="btn btn-danger" value="Signup Here" name="btn">
				<input type="submit" class="btn btn-danger" value="Delete" name="btn">
				<input type="submit" class="btn btn-danger" value="Update" name="btn">
				<input type="submit" class="btn btn-danger" value="ShowAll" formaction="BS-profile-fetch-all.php" name="btn">
					
			</div>
		</div>
	</form>
	
	</div>
</body>
</html>
