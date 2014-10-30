app.directive('ngPicture', ['Report' , function(Report){
	return {
		transclude: true,
		restrict: 'EA',
		link: function ($scope, Element, attrs) {
			$scope.addPicture = function() {
				Report.addPicAlt($scope.newReport.id, $scope.newPicture.b64pic).then(function() {
//				Report.addPic($scope.newPicture).then(function() {
	        		$scope.loading=false;
	                //$scope.newReport={};
	        	}, function(msg) {
	        		alert(msg);
	        	})
			}
		},
		replace: true,
		template:'<div class="photo-form" ng-controller="PictureController">'+
				'		<form ng-submit="addPicture()" role="form2">'+
				'		<div class="drop-zone">'+
				'		<img class="drop-img" ng-src="{{newPicture.b64pic}}"/>'+
				'		<input type="hidden" ng-model="newPicture.idReport"/>'+
				'			<div ng-hide="newPicture.b64pic" class="file_upload">'+
				'				<input type="file" ng-file-select="onFileSelect($files)" id="cameraInput" name="cameraInput" accept="image/*" ng-model="newPicture.picture">'+
				'			</div>'+
				'			<div ng-hide="newPicture.b64pic" class="desc-photo">'+
				'				<i class="fa fa-camera fa-5x"></i>'+
				'			</div>'+
				'	</div>'+
				'		<input class="btn btn-success btn-lg btn-block" type="submit" value="Terminer"/>'+
				'		</form>'+

				'</div>'
	}
}]);

app.directive('ngFileSelect',['$parse',"$timeout",function($parse,$timeout){
	return function(scope, elem, attr){
		var fn = $parse(attr['ngFileSelect']);
		console.log(elem);
		elem.bind('change', function(evt) {
		var files = [], fileList, i;
		fileList = evt.__files_ || evt.target.files;
		if (fileList != null) {
			for (i = 0; i < fileList.length; i++) {
				files.push(fileList.item(i));
			}
		}
		$timeout(function() {
			fn(scope, {
				$files : files,
				$event : evt
				});
			});
		});
	}
}]);