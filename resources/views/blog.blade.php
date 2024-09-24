<!DOCTYPE html>
<html lang="en">

<x-head>{{ $title }}</x-head>

<body>
	<x-navbar></x-navbar>
	<header class="my-3">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="text-center">{{ $title }}</h1>
				</div>
			</div>
		</div>
	</header>
	<main class="my-3">
		<div class="container">
			<div class="row">
				<div class="col">
					<?php foreach ($articles as $article) : ?>
					<h2>{{ $article['title'] }}</h2>
					<p>{{ $article['paragraph1'] }}</p>
					<p>{{ $article['paragraph2'] }}</p>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</main>
	<footer class="my-3">
		<div class="container">
			<div class="row">
				<div class="col">
					<p></p>
				</div>
			</div>
		</div>
	</footer>
	<x-script></x-script>
</body>

</html>