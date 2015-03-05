app.directive('ngFileSelect',['$parse','$timeout',function($parse,$timeout){
	return function(scope, elem, attr){
		var fn = $parse(attr['ngFileSelect']);
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

app.directive('myDraggable', ['$document', function($document) {
  return function(scope, element, attr) {
    var startX = 0, startY = 0, x = 0, y = 0;
    $(".test").draggable();

    element.css({
     position: 'relative',
     cursor: 'move' 
    });

    element.on('mousedown', function(event) {
      // Prevent default dragging of selected content
      event.preventDefault();
      startX = event.pageX - x;
      startY = event.pageY - y;
      $document.on('mousemove', mousemove);
      $document.on('mouseup', mouseup);
    });

    function mousemove(event) { 
      y = event.pageY - startY;
      bottomBorder=element[0].parentElement.clientHeight-element[0].height;
      if (y>0) {y=0;}
      if (y<bottomBorder) {y=bottomBorder;}
      ratio=element[0].width/element[0].naturalWidth;
      scope.newReport.crop={};
      scope.newReport.crop.top=-Math.round(y/ratio);
      scope.newReport.crop.left=Math.round(x/ratio);
      scope.newReport.crop.height=Math.round(element[0].parentElement.clientHeight/ratio);
      scope.newReport.crop.width=Math.round(element[0].width/ratio);
      console.log("crop:{ top:("+scope.newReport.crop.top+"), left:("+scope.newReport.crop.left+"), height:("+scope.newReport.crop.height+"), width:("+scope.newReport.crop.width+") }");
      element.css({
        top: y + 'px',
        left:  x + 'px'
      });
    }

    function mouseup() {
      $document.off('mousemove', mousemove);
      $document.off('mouseup', mouseup);
    }
  };
}]);