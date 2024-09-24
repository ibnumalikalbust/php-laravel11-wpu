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
                    <p class="text-center">
                        <a class="btn btn-sm btn-primary" target="_blank" href="{{ $facebook }}">Facebook</a>
                        <a class="btn btn-sm btn-primary" target="_blank" href="{{ $instagram }}">Instagram</a>
                        <a class="btn btn-sm btn-primary" target="_blank" href="{{ $twitter }}">Twitter</a>
                        <a class="btn btn-sm btn-primary" target="_blank" href="{{ $tiktok }}">Tiktok</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
