<x-layout>
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-6">Create a New Collection</h1>

        <form action="{{ route('collections.store') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="title" name="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
                </div>

                <div>
                    <label for="movie_ids" class="block text-sm font-medium text-gray-700">Select Movies</label>
                    <select id="movie_ids" name="movie_ids[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @foreach($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded">Create Collection</button>
        </form>
    </div>
</x-layout>