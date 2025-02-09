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
                        <li class="w-36">actions</li>
                    </ul>
                </div>
                <x-admin-movie></x-admin-movie>
            </section>
            <div class="flex rounded-full text-4xl bg-white w-12 h-12 m-2 justify-center align-items-center">
                <a href="#">+</a>
            </div>
        </div>
    </main>
    <form action="/movies/store" method="POST">
        <div>
            <label for="movie name">Movie name:</label>
            <input type="text" id="name" name="name" placeholder="Enter movie name" required>
        </div>

        <div>
            <label for="release date">Release date:</label>
            <input type="text" id="release date" name="release date" placeholder="Enter release date" required>
        </div>

        <div>
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" placeholder="Enter genre" required>
        </div>

        <button type="submit">Submit</button>
    </form>
</x-layout>