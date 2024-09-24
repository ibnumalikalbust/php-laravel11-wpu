<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
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
</x-layout>