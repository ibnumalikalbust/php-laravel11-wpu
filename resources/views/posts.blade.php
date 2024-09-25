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
                @foreach ($posts as $post)
                <div class="col-12 col-md-6">
                    <div class="py-2 border-bottom">
                        <h2>{{ $post->title }}</h2>
                        <div>
                            <a href="#" class="text-decoration-none">{{ $post->author }}</a>
                            <span> | </span>
                            <span>{{ $post->updated_at->diffForHumans() }}</span>
                        </div>
                        <p>{{ Str::limit($post->body, 100) }}</p>
                        <a href="/post/{{ $post['slug'] }}" class="text-decoration-none">read more &raquo;</a>
                    </div>
                </div>
                @endforeach
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
