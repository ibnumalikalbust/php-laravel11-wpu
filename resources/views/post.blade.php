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
    <article class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-2 border-bottom">
                        <h2>{{ $post['title'] }}</h2>
                        <div>
                            <a href="#" class="text-decoration-none">{{ $post['author'] }}</a>
                            <span> | </span>
                            <span>{{ $post['date'] }}</span>
                        </div>
                        <p>{{ $post['body'] }}</p>
                        <a href="/post" class="text-decoration-none">&laquo; see all posts</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
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
