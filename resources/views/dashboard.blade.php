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
                    <ul class="flex flex-start flex-row text-center">
                        <li class="w-36">Namn</li>
                        <li class="w-36">genre</li>
                        <li class="w-36">release year</li>
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

            <input type="checkbox" id="popup_toggle" class="hidden peer">
            <div id="popup" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center peer-checked:flex hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg flex items-center justify-center flex-col">
                    <x-admin-create-movie></x-admin-create-movie>
                    <label for="popup_toggle" class="mt-4 bg-red-500 text-white px-4 py-2 rounded cursor-pointer p-4">Close</label>
                </div>
            </div>
        </div>
    </main>
</x-layout>