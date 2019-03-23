<?php
include("header.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<div class="container" ng-app="liveApp" ng-controller="liveController">
	<h1 class="text-center">Manage Worker Categoty</h1>
	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>CategoryName</th>
					<th>Description</th>
					<th>Action</th>
				</tr>	
			</thead>
			<tbody>
				<tr ng-repeat="data in namesData" ng-include="getTemplate(data)">
					
				</tr>
			</tbody>
		</table>
		<script type="text/ng-template" id="display">
			<td>{{data.cname}}</td>
			<td>{{data.description}}</td>
			<td>
				<button type="button" class="btn btn-primary btn-sm">Edit</button>
				<button type="button" class="btn btn-primary btn-sm">Delete</button>
			</td>
		</script>
		<script type="text/ng-template" id="edit">
			<td><input type="text" ng-model="formData.first_name" class="form-control"/></td>
			<td><input type="text" ng-model="formData.last_name" class="form-control"/></td>
			<td>
				<input type="hidden" ng-model=formData.data.id"/>
				<button type="button" class="btn btn-info btn-sm">Save</button>
				<button type="button" class="btn btn-default btn-sm">Cancel/button>
			</td>
		</script>

	</div>
</div>
</body>
</html>
<script type="text/javascript">
	 
	 var app=angular.module('liveApp',[]);
	 app.controller("liveController",function($scope,$http){
	 	$scope.fetchData=function(){
	 		$http.get('select.php').success(function(data){
	 			$scope.nameData=data;
	 		})

	 	};

	 	$scope.formData={};
	 	$scope.getTemplate=function(data){
	 		if(data.id == $scope.formData.id)
	 		{
	 			return 'edit';
	 		}
	 		else
	 		{
	 			return 'display';
	 		}
	 	};
	 });

</script>