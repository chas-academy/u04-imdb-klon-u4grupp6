<x-layout>
   <body class="bg-gray-100 text-gray-800">

    <!-- Watchlist Section -->
    <main class="max-w-4xl mx-auto p-6">
        
        <!-- Add New Collection Button -->
        <div class="mb-4">
            <a href="{{ route('collections.create') }}" class="bg-blue-600 text-white py-2 px-4 rounded">Add New Collection</a>
        </div>

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
                @foreach ($collections as $collection)
                    <div class="flex items-start gap-4 bg-gray-50 p-4 rounded-lg shadow-sm sm:flex-row">
                        <div>
                            <h2 class="text-lg font-semibold sm:text-md">
                                {{ $collection->title }}
                            </h2>
                            <p class="text-gray-600 text-sm mb-2 sm:text-xs">
                                {{ $collection->description }}
                            </p>

                            <!-- Movies in the collection -->
                            <ul>
                                @foreach ($collection->movies as $movie)
                                    <li>{{ $movie->title }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- Edit & Delete Buttons -->
                        <div class="ml-auto">
                            <a href="{{ route('collections.edit', $collection->id) }}" class="text-blue-600">Edit</a>
                            <form action="{{ route('collections.destroy', $collection->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600">Delete</button>
                            </form>
                        </div>
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
        <div class="max-w-4xl mx-auto flex justify-between items-center sm:flex-row sm:gap-x-4">
            <div class="flex gap-x-4 sm:flex-row sm:gap-x-6">
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