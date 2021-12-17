<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="angular.min.js">
	</script>
	<script>
		var mymodule = angular.module("mykuchbhi", []);
		mymodule.controller("mycontroller", function($http, $scope) {

			$scope.jsonArray = [];
			$scope.doFetchAll = function() {

				var url = "json-fetch-all.php";
				$http.get(url).then(fxOk, fxNotok);

				function fxOk(response) {
					//alert(JSON.stringify(response.data));
					$scope.xx = response.data;

				}

				function fxNotok(error) {
					alert(error.data);
				}

			}
			//-------------------
			$scope.doDelete = function(userid) {
				alert(userid);
			}

		});

	</script>
</head>

<body ng-app="mykuchbhi" ng-controller="mycontroller" ng-init="doFetchAll();">

	<?php
	include_once("header.php");
	?>

	<center>
		<hr>
		<input type="button" value="Fetch All" ng-click="doFetchAll();">
		<hr>
		<table border="1" rules="rows" width="100%">
			<tr height="40" bgcolor="orange">
				<th>Delete</th>
				<th>Sr. No.</th>
				<th>uid</th>
				<th>password</th>
				<th>Date of signup</th>
				<th>Pic path</th>
				<th>Pic</th>
			</tr>
			<tr ng-repeat="x in xx">
				<td align="center">
					<img src="../Spics/closeico.png" alt="" width="20" height="20" ng-click="doDelete(x.userid);">
				</td>
				<th>{{$index+1}}</th>
				<td>{{x.userid}}</td>
				<td>{{x.password}}</td>
				<td>{{x.mob_numb}}</td>
				<td>{{x.image_path}}</td>
				<th>
					<img src="../uploads/{{x.image_path}}" alt="" width="40" height="40">
				</th>


			</tr>
		</table>

	</center>

</body>

</html>
