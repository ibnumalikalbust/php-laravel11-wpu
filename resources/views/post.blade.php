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
                        <h2>{{ $post->title }}</h2>
                        <p>
                            <a href="/author/{{ $post->author }}" class="text-decoration-none">{{ $post->authorDetail->name }}</a>
                            <span> in </span>
                            <a href="/category/{{ $post->category }}" class="text-decoration-none">{{ $post->categoryDetail->name }}</a>
                            <span> | </span>
                            <span>{{ $post->updated_at->diffForHumans() }}</span>
                        </p>
                        <p class="text-justify">{!! nl2br(e($post->body)) !!}</p>
                        <p>
                            <a href="/post" class="text-decoration-none">&laquo; see all posts</a>
                        </p>
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
