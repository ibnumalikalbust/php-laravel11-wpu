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
                    <form action="" autocomplete="off">
                        <div class="input-group mb-3">
                            @if(request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif
                            @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <input type="text" name="keyword" class="form-control" placeholder="Search for article..." value="{{ request('keyword') ?? '' }}">
                            <button class="btn btn-outline-secondary" type="submit">SEARCH</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <article class="my-3">
        <div class="container">
            <div class="row">
                <div class="col my-2">
                    {{ $posts->onEachSide(1)->links() }}
                </div>
            </div>
            <div class="row">
                @forelse ($posts as $post)
                <div class="col-12 col-md-6 col-xxl-4">
                    <div class="py-2 border-bottom">
                        <h2>{{ $post->title }}</h2>
                        <div>
                            <a href="{{ url('/posts') . '?author=' . $post->author }}" class="text-decoration-none">{{ $post->authorDetail->name }}</a>
                            <span> in </span>
                            <a href="{{ url('/posts') . '?category=' . $post->category }}" class="text-decoration-none">{{ $post->categoryDetail->name }}</a>
                            <span> | </span>
                            <span>{{ $post->updated_at->diffForHumans() }}</span>
                        </div>
                        <p>{{ Str::limit($post->body, 100) }}</p>
                        <a href="{{ url('/read') . '/' . $post->slug }}" class="text-decoration-none">read more &raquo;</a>
                    </div>
                </div>
                @empty
                <div class="col text-center">
                    <p>
                        <span class="d-block">Article Not Found</span>
                        <a class="d-block" href="/post">see all posts</a>
                    </p>
                </div>
                @endforelse
            </div>
            <div class="row">
                <div class="col my-2">
                    {{ $posts->onEachSide(1)->links() }}
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
