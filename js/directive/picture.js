app.directive('ngPicture',function(){

	return {
		transclude: true,
		templateUrl:'template/_addPicture.html',
		scope : {
			id : '='
		}
	}
})