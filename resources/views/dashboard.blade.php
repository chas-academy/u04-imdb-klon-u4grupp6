<x-layout>

    <main class="flex justify-around bg-neutral-900 h-screen">
        <aside class="flex flex-col justify-center bg-lime-950 text-white box-border w-1/5 h-96 mt-6">
            <h1 class="pl-6 text-2xl">manage</h1>
            <ul class="px-4">
                <li class="text-xl"><a href="/dashboard/movies">movies</a></li>
                <li class="text-xl"><a href="/dashboard/reviews">reviews</a></li>
            </ul>
        </aside>
        <div class="mt-6">
            <section class="flex flex-col">
                <div class="bg-neutral-300 p-2">
                    <ul class="flex flex-start flex-row text-ce ter">
                        <li class="w-36">title</li>
                        <li class="w-36">release year</li>
                        <li class="w-36">genre</li>
                        <li class="w-36">description</li>
                        <li class="w-36">actions</li>
                    </ul>
                </div>
                @foreach($movies as $movie)
                <x-admin-movie :title="$movie->title" :description="$movie->description" :genre="$movie->genre" />
                @endforeach
            </section>
            <div class="flex rounded-full text-4xl bg-white w-12 h-12 m-2 justify-center">
                <label for="popup_toggle" class="cursor-pointer">+</label>
            </div>
            <x-admin-create-movie></x-admin-create-movie>

        </div>
    </main>
</x-layout>