<x-layout>
    <main class="flex justify-around bg-cyan-500 h-screen">
        <aside class=" flex flex-col justify-center bg-pink-500 box-border w-1/5 h-96 mt-6">
            <h1 class="pl-6">manage</h1>
            <ul class="px-4">
                <li><a href="/dashboard/movies">movies</a></li>
                <li><a href="/dashboard/reviews">reviews</a></li>
            </ul>
        </aside>
        <section class="flex flex-col bg-blue-500 w-3/5 mt-6 h-96">
            <div class="bg-red-500 p-2">
                <ul class="flex flex-row justify-evenly">
                    <li>Namn</li>
                    <li>genre</li>
                    <li>release year</li>
                    <li>actions</li>
                </ul>
            </div>
            <div class="bg-green-500 p-2">
                <ul class="flex flex-row justify-evenly">
                    <li>dune</li>
                    <li>2010</li>
                    <li>coolt</li>
                    <p>HEJ!</p>
                </ul>


            </div>
        </section>
    </main>
</x-layout>