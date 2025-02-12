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
                        <li class="w-36">release date</li>
                        <li class="w-36">genre</li>
                        <li class="w-36">description</li>
                        <li class="w-36">actions</li>
                    </ul>
                </div>
                @foreach($movies as $movie)
                <!-- saknar release date -->
                <x-admin-movie :id="$movie->id" :title="$movie->title" :release_date="$movie->release_date" :description="$movie->description" :genre="$movie->genre" />
                @endforeach
            </section>
            <div class="flex rounded-full text-4xl bg-white w-12 h-12 m-2 justify-center">
                <label for="popup_toggle_create" class="cursor-pointer">+</label>
            </div>
            

        </div>
    </main>
    <!-- admin update/delete/create components as popups-->
    <x-admin-delete-movie></x-admin-delete-movie>

    <x-admin-create-movie></x-admin-create-movie>
</x-layout>