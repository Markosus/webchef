<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<canvas id="gamecanvas" width="500" height="500" style="border:1px solid black;"></canvas>
<script>
	
	var cvs = document.getElementById('gamecanvas').getContext('2d');

	var canvasHeight = 500;
	var canvasWidth = 500;
	var message = 'Bouncing';


	//player
	var player = {
		x:50,
		xspd:30,
		y:10,
		yspd:30,
		Icon:"p",
	};


	//enemy
	enemyList = {};

	createEnemy('AI1', 150, 10, 10, 15);
	createEnemy('AI2', 250, 30, 5, 10);

	function createEnemy(enemyID, x, y, xspd, yspd){

		var ai = {
			x:x,
			xspd:xspd,
			y:y,
			yspd:yspd,
			Icon:"x",
			id:enemyID,
		};
		enemyList[enemyID] = ai;
			
	}


	setInterval(update,40);

	cvs.font = "30px Arial";

	

	function updatePlayer(){

		//player

		cvs.fillText(player.Icon, player.x ,player.y);
		player.x += player.xspd;
		player.y += player.yspd;


		if (player.x > canvasHeight || player.x < 0) {
			console.log(message);
			player.xspd = -player.xspd;
		}

		
		if (player.y > canvasWidth || player.y < 0) {
			console.log(message);
			player.yspd = -player.yspd;
		}
		
	}

	// function updateAi(){

	// 	//ai

	// 	cvs.fillText(ai.Icon, ai.x ,ai.y);
	// 	ai.x += ai.xspd;
	// 	ai.y += ai.yspd;

	// 	if (ai.x > canvasHeight || ai.x < 0) {
	// 		console.log(message);
	// 		ai.xspd = -ai.xspd;
	// 	}

		
	// 	if (ai.y > canvasWidth || ai.y < 0) {
	// 		console.log(message);
	// 		ai.yspd = -ai.yspd;
	// 	}

	// }



		function updateEntity(something){

		//ai

		cvs.fillText(something.Icon, something.x ,something.y);
		something.x += something.xspd;
		something.y += something.yspd;

		if (something.x > canvasHeight || something.x < 0) {
			console.log(message);
			something.xspd = -something.xspd;
		}

		
		if (something.y > canvasWidth || something.y < 0) {
			console.log(message);
			something.yspd = -something.yspd;
		}

	}

	function update(){
		cvs.clearRect(0,0,canvasHeight,canvasWidth);
		// updatePlayer();
		updateEntity(player);		

		for (var i in enemyList){
			updateEntity(enemyList[i]);
		}
	};




	// cvs.fillStyle = 'red';
	// cvs.globalAlpha = 0.5;

	// //draw something
	// cvs.fillRect(40, 40, 100,100);
	// cvs.clearRect(60, 60, 100,100);

	 




</script>
</body>
</html>