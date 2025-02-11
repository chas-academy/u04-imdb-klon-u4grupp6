<x-layout>
   <body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-yellow-600 p-4 flex items-center justify-between">
        <div class="text-white font-bold text-xl">CHAs</div>
        <div class="flex items-center gap-4">
            <button class="text-white">Watchlist</button>
            <button class="text-white">Namn</button>
            <button class="bg-white text-yellow-600 px-4 py-2 rounded">SWE</button>
        </div>
    </header>

    <!-- Watchlist Section -->
    <main class="max-w-4xl mx-auto p-6">
        <section class="bg-white shadow-md rounded-lg p-6">
            <div class="border-b pb-4 mb-4">
                <h1 class="text-2xl font-semibold mb-2">Your Watchlist</h1>
                <p class="text-gray-600">Created 23 hours ago • Modified 21 hours ago</p>
                <p class="text-gray-600">
                    Your Watchlist is the place to track the titles you want to watch. You
                    can sort your Watchlist by the CHAs rating, popularity score and
                    arrange your titles in the order you want to see them.
                </p>
            </div>

            <div class="space-y-4">
                @foreach ([
                    [
                        'title' => 'Recep Ivedik 3',
                        'year' => '2010',
                        'duration' => '1hr 53min',
                        'description' => 'Recep struggles with life after the loss of his grandmother. Comedy and drama ensue.',
                        'director' => 'Togan Gökbakar',
                        'image' => 'https://via.placeholder.com/80x120?text=Recep+Ivedik+3'
                    ],
                    [
                        'title' => 'Sky Force',
                        'year' => '2025',
                        'duration' => '2hr 5min',
                        'description' => 'An epic tale of aviation heroes saving the world in the face of a global crisis.',
                        'director' => 'Sandra Kwok',
                        'image' => 'https://via.placeholder.com/80x120?text=Sky+Force'
                    ],
                    [
                        'title' => 'Rush Hour',
                        'year' => '2007',
                        'duration' => '1hr 31min',
                        'description' => 'A Hong Kong detective teams up with an LAPD officer to solve a kidnapping case.',
                        'director' => 'Brett Ratner',
                        'image' => 'https://via.placeholder.com/80x120?text=Rush+Hour'
                    ],
                    [
                        'title' => '22 Jump Street',
                        'year' => '2014',
                        'duration' => '2hr 12min',
                        'description' => 'Two undercover cops go to college to take down a drug ring.',
                        'director' => 'Phil Lord & Christopher Miller',
                        'image' => 'https://via.placeholder.com/80x120?text=22+Jump+Street'
                    ]
                ] as $index => $movie)
                <div class="flex items-start gap-4 bg-gray-50 p-4 rounded-lg shadow-sm">
                    <img
                        src="{{ $movie['image'] }}"
                        alt="{{ $movie['title'] }}"
                        class="w-20 h-32 rounded-md"
                    />
                    <div>
                        <h2 class="text-lg font-semibold">
                            {{ $index + 1 }}. {{ $movie['title'] }}
                        </h2>
                        <p class="text-gray-600 text-sm mb-2">
                            {{ $movie['year'] }} • {{ $movie['duration'] }}
                        </p>
                        <p class="text-gray-600 text-sm">
                            {{ $movie['description'] }}
                        </p>
                        <p class="text-gray-600 text-sm mt-2 font-medium">
                            Regisser: {{ $movie['director'] }}
                        </p>
                    </div>
                    <button class="ml-auto text-blue-600">i</button>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Recently Seen -->
        <section class="mt-6">
            <h2 class="text-xl font-semibold">Nyligen Sett</h2>
            <p class="text-gray-600">Du har inte nyligen tittat på sidor</p>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-6">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <div class="space-x-4">
                <span>Följ CHAs på sociala:</span>
                <a href="#" class="underline">TikTok</a>
                <a href="#" class="underline">Instagram</a>
                <a href="#" class="underline">YouTube</a>
                <a href="#" class="underline">Facebook</a>
            </div>
            <div>
                <a href="#" class="bg-white text-black px-4 py-2 rounded">Få appen CHAs</a>
            </div>
        </div>
    </footer>
</body>
</x-layout>
