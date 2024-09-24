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
					<p class="text-center">This Website Develop By {{ $developer }}</p>
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