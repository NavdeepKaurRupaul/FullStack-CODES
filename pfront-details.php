<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<style>
		body {
			background-color: #f7f797
		}

		.outer {
			border: 5px solid black;
			width: 60%;
			height: 320px;
			margin-top: 150px;
			background-image: linear-gradient(to right, #fc6666 0%, #ffbf49 25%, #f7f76e 50%, #7cff7c 75%, #4f4fff 100%);
			box-shadow: inset 0px 0px 20px black;
		}

		.tb {
			width: 70%;
			height: 30px;
			float: left;
		}

		.pic {
			width: 29%;
			height: 204px;
			float: left;
			border: 2px solid black;
			box-shadow: 0px 0px 10px black;
			background-color: #f7aaaa
		}

		table {
			width: 95%;
			border: 2px solid black;
			box-shadow: 0px 0px 10px black;
			background-color: #f7aaaa;
		}

		.buttonn {
			width: 300px;
			/*			background-color: yellow;*/
			/*			margin-top: 20px;*/
		}

		h2 {
			margin: 0px;
			border-top: 3px solid black;
			border-bottom: 3px solid black;
			margin-top: 10px;
			margin-bottom: 10px;
			background-color: #6ad3d6;
			box-shadow: 0px 0px 10px black;
			text-transform: uppercase;
		}

		input[type="text"] {
			width: 200px;
			background-image: linear-gradient(to right, #fc6666 0%, #ffbf49 25%, #f7f76e 50%, #7cff7c 75%, #4f4fff 100%);
			color: aliceblue;
		}

		input[type="password"] {
			width: 200px;
			background-image: linear-gradient(to right, #fc6666 0%, #ffbf49 25%, #f7f76e 50%, #7cff7c 75%, #4f4fff 100%);
			color: aliceblue;
		}
		input[type="file"] {
			width: 300px;
			background-image: linear-gradient(to right, #fc6666 0%, #ffbf49 25%, #f7f76e 50%, #7cff7c 75%, #4f4fff 100%);
			color: aliceblue;
		}
		
		td {
			font-size: 18px;
			padding: 5px;
			color: aliceblue;
			text-shadow: 0px 0px 10px black;
			font-weight: bolder;
		}

		.showw {
			display: none;
		}

		.bttn {
			box-shadow: 0px 0px 10px black;
			border: 2px solid black
		}
		
	</style>
	<script src="JS/jquery-1.8.2.min.js">
	</script>
	<script>
		////////////////////////////pic show fun/////////////////////////////////////////////////////
		function showpreview(file, strId) {
			//			alert("hi");
			if (file.files && file.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$(strId).prop('src', e.target.result);
				}
				reader.readAsDataURL(file.files[0]);
			}
		}

	</script>
	<script>
		$(document).ready(function() {
//			alert("hi");
			///////////////////////////loding fun/////////////////////////////////////////////////////
			$(document).ajaxStart(function() {
				$(".showw").css("display", "inline");
			});
			$(document).ajaxStop(function() {
				$(".showw").css("display", "none");
			});
			/////////////////////////user availabe fun////////////////////////////////////////////////
			$("#userid").blur(function() {
				//$.get(url,call-back-function);
				var uid = $("#userid").val();
				var url = "ajax-chk-uid.php?uidy=" + uid;
				$.get(url, function(responsex) {
					//				alert(responsex);
					$("#errUid").html(responsex); //string format
				});
			});
			/////////////////////////fetch to inputs fun//////////////////////////////////////////////
			$("#btnFetch").click(function() {
				//$.get(url,call-back-function);
				//			alert("hi");
				var uid = $("#userid").val();
				//			alert(uid);
				var url = "json-fetch-record.php?uidy=" + uid;
				$.getJSON(url, function(returnarray) {
					//alert(jsonAryFeeling);
					//					alert(JSON.stringify(returnarray));
					$("#password").val(returnarray[0].password);
					$("#mobnum").val(returnarray[0].mob_num);
					$("#ppic").prop("src", "uploads/" + returnarray[0].image_path);
				});
			});
		});

	</script>
</head>

<body>
	<center>
		<form action="pprocess-details.php" method="post" enctype="multipart/form-data">
			<div class="outer">
				<h2>U&nbsp;&nbsp; s &nbsp;&nbsp;e&nbsp;&nbsp; r &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; D &nbsp;&nbsp;e &nbsp;&nbsp;t &nbsp;&nbsp;i &nbsp;&nbsp;a &nbsp;&nbsp;l&nbsp;&nbsp; s</h2>
				<div class="tb">
					<table rules="cols">
						<tr>
							<!--------------------------User iD------------------------------------------->
							<td>User Id</td>
							<td><input type="text" placeholder="Enter user id here!" name="userid" id="userid" class="bttn" >
								<input type="button" value="Fetch" id="btnFetch" class="bttn" title="Click to auto fill, only if account exit &#129299!!">
								<span id="errUid"></span>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div class="spinner-grow spinner-grow-sm showw" role="status">
								</div>
								<div class="spinner-grow spinner-grow-sm showw" role="status">
								</div>
								<div class="spinner-grow spinner-grow-sm showw" role="status">
								</div>
							</td>
						</tr>
						<tr>
							<!---------------------------Password--------------------------------------->
							<td>Password</td>
							<td><input type="password" placeholder="Enter password here!" name="password" id="password" class="bttn"></td>
						</tr>
						<tr>
							<!---------------------------------MOb----------------------------------->
							<td>Mobile Number</td>
							<td><input type="text" placeholder="Enter mobile number here!" name="mobnum" id="mobnum" class="bttn"></td>
						</tr>
						<tr>
							<!----------------------------Profile Pic-------------------------------->
							<td>Profile Pic</td>
							<td><input type="file" onchange="showpreview(this,ppic);" accept="image/x-png,image/gif,image/jpeg" name="userpic" class="bttn"></td>
						</tr>
					</table>
				</div>
				<!-----------------------Profile Preview-------------------------------------------->
				<div class="pic">
					<img src="HM_TEMP/user.png" alt="" id='ppic' width="196px" height="200px">
				</div>
				<!-------------------Buttons-------------------------------------------------->
				<div class="buttonn">
					<input type="submit" value="LogIN" name="button" class="bttn" title="Click to login into account &#128513!!">
					<input type="submit" value="Update" name="button" class="bttn" title="Click to update account &#128579!!">
					<input type="submit" value="Delete" name="button" class="bttn" title="Click to delete account &#128557!!">
					<input type="submit" value="Show All" name="button" formaction="pprocess-details-fetchall.php" class="bttn" title="Click to see all accounts &#128526!!">
				</div>
			</div>
		</form>
	</center>
</body>

</html>
