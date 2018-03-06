<html>
	<head>
		<script type="text/javascript" src="phaser.min.js"></script>
		<title>HTML5 Tetris</title>
		<script>
		var config = {
 		   type: Phaser.AUTO,
 		   width: 400,
 		   height: 450,
 		   scene: {
       	  	 preload: preload,
       		 create: create,
       		 update: update
   		   }
		};

		var game = new Phaser.Game(config);

		function preload ()
		{
			this.load.image('bg', 'assets/background.jpg');
		}

		function create ()
		{
			this.add.image(0, 0, 'bg').setOrigin(0, 0)	
		}

		function update ()
		{
		}
		</script>
	</head>
	<body>
		
	</body>
</html>
