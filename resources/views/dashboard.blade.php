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
            <div class="bg-white p-2">
                <ul class="flex flex-row text-center">
                    <li class="w-36">dune</li>
                    <li class="w-36">2010</li>
                    <li class="w-36">coolt</li>
                    <div class="w-36">
                        <svg class=""src=""></svg>
                    </div>

                </ul>
            </div>
        </section>
        <div class="flex rounded-full text-4xl bg-white w-12 h-12 justify-center align-items-center"><a href="#">+</a></div>
    </div>
    </main>
</x-layout>
