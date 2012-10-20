$(document).ready(function(){
	var canvasDiv = document.getElementById('canvasDiv');
	if (canvasDiv){
		canvas = document.createElement('canvas');
		canvas.setAttribute('width', 400);
		canvas.setAttribute('height', 400);
		canvas.setAttribute('id', 'canvas');
		canvasDiv.appendChild(canvas);
		if(typeof G_vmlCanvasManager != 'undefined') {
			canvas = G_vmlCanvasManager.initElement(canvas);
		}
		context = canvas.getContext("2d");

		var offset = $('#canvas').offset();

		$('#canvas').mousedown(function(e){
			var mouseX = e.pageX + offset.left;
			var mouseY = e.pageY - offset.top - 80;
			console.log(offset);
				
			paint = true;
			addClick(e.pageX - offset.left, e.pageY - offset.top - 80);
			redraw();
		});

		$('#canvas').mousemove(function(e){
			if(paint){
				addClick(e.pageX - offset.left, e.pageY - offset.top - 80, true);
				redraw();
			}
		});

		$('#canvas').mouseup(function(e){
			paint = false;
		});

		$('#canvas').mouseleave(function(e){
			paint = false;
		});

		var clickX = new Array();
		var clickY = new Array();
		var clickDrag = new Array();
		var paint;

		function addClick(x, y, dragging)
		{
			clickX.push(x);
			clickY.push(y);
			clickDrag.push(dragging);
		}

		function redraw(){
			canvas.width = canvas.width; // Clears the canvas
			
			context.strokeStyle = "#000000";
			context.lineJoin = "round";
			context.lineWidth = 5;
					
			for(var i=0; i < clickX.length; i++)
			{		
				context.beginPath();
				if(clickDrag[i] && i){
					context.moveTo(clickX[i-1], clickY[i-1]);
				 }else{
					 context.moveTo(clickX[i]-1, clickY[i]);
				 }
				 context.lineTo(clickX[i], clickY[i]);
				 context.closePath();
				 context.stroke();
			}
		}

		$('#clear').onclick(function(){
			$('#canvas').attr('width', 5)
									.attr('width', 400);
			clickX = [];
			clickY = [];
			clickDrag = [];
		});

		$('#save').onclick(function(){
			var drawing_url = $('canvas')[0].toDataURL();
			var data = { drawing: drawing_url }
			$('body').fadeOut(500);
			$.post('drew_action.php', data, function(drewResult) {
				console.log(drewResult);
				document.location.reload(true);
			});
		});
	}

	$('#wordInput').keypress(function(e){
		if ($('#wordInput').val() == '') return;
		if (e.keyCode == 13){
			var data = { phrase : $('#wordInput').val() };
			$('body').fadeOut(500);
			$.post('wrote_action.php', data, function(wroteResult) {
				console.log(wroteResult);
				document.location.reload(true);
			});
			return false;
		}
	});
});
