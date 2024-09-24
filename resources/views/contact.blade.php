<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
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
</x-layout>
