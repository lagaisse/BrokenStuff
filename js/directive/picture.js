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



app.directive('pictureTool', ['$document', function($document) {
  return function(scope, element, attr) {

    element.css({
     position: 'relative',
     cursor: 'move' 
    });


    var myElement = document.getElementById('pic');
    var picture = document.getElementById('pic');
    
    var mc = new Hammer(myElement,{
            transform_always_block: true,
            transform_min_scale: 1,
            drag_block_horizontal: true,
            drag_block_vertical: true,
            threshold: 0,
            drag_min_distance: 0
        });

    var pinch = new Hammer.Pinch();
 //   var rotate = new Hammer.Rotate();

// we want to detect both the same time
//    pinch.recognizeWith(rotate);

// add to the Manager
//    mc.add([pinch, rotate]);
    mc.add([pinch]);

    mc.get('pinch').set({ enable: true });
    mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });
//    mc.get('rotate').set({ enable: true });

    var scale=1, last_scale =1 , transform = "", posX = 0, posY = 0, last_posX = 0, last_posY = 0, max_pos_x = 0, max_pos_y = 0 , rotation = 0;
    var el = picture;

    mc.on("pinch doubletap pinchout pinchend pan panend rotate", function(ev) {
    ev.preventDefault();

      if (ev.type==="rotate") {console.log("rot");}

      if (ev.type === "pinch") { scale = Math.max(.999, Math.min(last_scale * (ev.scale), 4));       }

      if(ev.type === "pinchend") {last_scale = scale;}

      if (ev.type == "doubletap") {
        if (last_scale===2) {
          transform = "translate3d(0, 0, 0) " + "scale3d(1, 1, 1) ";
          scale = 1;
          last_scale = 1;
          }
        else {
          transform ="translate3d(0, 0, 0) " + "scale3d(2, 2, 1) ";
          scale = 2;
          last_scale = 2;       
          }
      }

      posX = last_posX + ev.deltaX;
      posY = last_posY + ev.deltaY;
      max_pos_x = Math.ceil((scale - 1) * el.clientWidth / 2);
      max_pos_y = Math.ceil((scale - 1) * el.clientHeight / 2);

      if (posX > max_pos_x) {
          posX = max_pos_x;
      }
      
      if (posX < -max_pos_x) {
          posX = -max_pos_x;
      }
      
      if (posY > max_pos_y) {
          posY = max_pos_y;
      }
      if (posY < (element[0].parentElement.clientHeight/scale)-element[0].height) {
          posY = (element[0].parentElement.clientHeight/scale)-element[0].height;
      }

      if(ev.type === "panend"){
      last_posX = posX < max_pos_x ? posX : max_pos_x;
      last_posY = posY < max_pos_y ? posY : max_pos_y;

      ratio=scale*element[0].width/element[0].naturalWidth;
      scope.newReport.crop={};
      scope.newReport.crop.height=Math.round(element[0].parentElement.clientHeight/ratio);
      scope.newReport.crop.width=Math.round(element[0].width/ratio);
      scope.newReport.crop.top=Math.round((max_pos_y-last_posY)/ratio);
      scope.newReport.crop.left=Math.round((max_pos_x-last_posX)/ratio);
      console.log("crop:{ top:("+scope.newReport.crop.top+"), left:("+scope.newReport.crop.left+"), height:("+scope.newReport.crop.height+"), width:("+scope.newReport.crop.width+") }");
      }

      transform ="translate3d("+posX+"px,"+posY+"px, 0) " +"scale3d(" + scale + ", " + scale + ", 1) " + "rotate("+rotation+"deg) ";

      if (transform) {
          picture.style.transform = transform;
          picture.style.oTransform = transform;
          picture.style.msTransform = transform;
          picture.style.mozTransform = transform;
          picture.style.webkitTransform = transform;
          }
});













/*
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
      console.log("starty:"+startY+" top :"+y+ " bottom :"+bottomBorder);
      //if (y>0) {y=0;}
      //if (y<bottomBorder) {y=bottomBorder;}
      ratio=element[0].width/element[0].naturalWidth;
      scope.newReport.crop={};
      scope.newReport.crop.top=-Math.round(y/ratio);
      scope.newReport.crop.left=Math.round(x/ratio);
      scope.newReport.crop.height=Math.round(Math.round(element[0].parentElement.clientHeight/ratio)/scale);
      scope.newReport.crop.width=Math.round(Math.round(element[0].width/ratio)/scale);
      //console.log("crop:{ top:("+scope.newReport.crop.top+"), left:("+scope.newReport.crop.left+"), height:("+scope.newReport.crop.height+"), width:("+scope.newReport.crop.width+") }");
      element.css({
        top: y + 'px',
        left:  x + 'px'
      });
    }

    function mouseup() {
      $document.off('mousemove', mousemove);
      $document.off('mouseup', mouseup);
    }
*/

  };
}]);