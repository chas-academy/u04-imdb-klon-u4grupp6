<x-layout>
   <body class="bg-gray-100 text-gray-800">
    <main class="max-w-4xl mx-auto p-6">
        <section class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-semibold mb-4">Edit Collection: {{ $collection->title }}</h1>

            <!-- Edit Collection Form -->
            <form action="{{ route('collections.update', $collection->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <!-- Title Field -->
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        value="{{ old('title', $collection->title) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md @error('title') border-red-500 @enderror"
                    >
                    @error('title')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description Field -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea 
                        name="description" 
                        id="description" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md @error('description') border-red-500 @enderror"
                    >{{ old('description', $collection->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Movies Selection -->
                <div class="mb-4">
                    <label for="movie_ids" class="block text-gray-700">Movies</label>
                    <select 
                        name="movie_ids[]" 
                        id="movie_ids" 
                        multiple 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md @error('movie_ids') border-red-500 @enderror"
                    >
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}" 
                                @if (in_array($movie->id, old('movie_ids', $collection->movies->pluck('id')->toArray()))) selected @endif>
                                {{ $movie->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('movie_ids')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Update Collection</button>
                </div>
            </form>
        </section>
    </main>
</body>
</x-layout>
