<?php include('header.php') ?> aroceu's music log (2021)</title>


		<style type="text/css">
		:root{
			--body: #fafafa linear-gradient(to top left, #fafafa 0%, #bababa 100%);
			--body-border: #bababa;
			--container: #fafafa; 
			--h1: #888;
			--h2: #333;
			--accent: #888;
			--accent-light: #bababa;
		}

		</style>

		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

	</head>

	<body>

		<div id="container">

		<h1>arrow's year in music: 2021</h1>
		<h2>rock bottom</h2>

		<div id="blurb">

		<p align="center"><a href="https://open.spotify.com/playlist/5fynF2s18fxEOJtH2vfV2o?si=OZwKyjo7QZWaROwW6VpI8w" class="button">Listen on Spotify</a>
			<br /><b>Count:</b> 44</p>

		</div>

		<div id="playlist">

		<?php include('playlistheader.php') ?>

		<?php include('lists/2021.php') ?>	

		</div>

	<div id="navigation">

			<span class="prev">
				<a href="2020">&larr; Previous</a>
			</span>

			<span class="next">
				<a href="2022">Next &rarr;</a>
			</span>
		</div>

	<?php include('footer.php') ?>