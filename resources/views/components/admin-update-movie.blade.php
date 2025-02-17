@props([
'title' => 'Missing Title',
'release_date' => 'Missing release Date',
'genre' => 'Missing Genre',
'description' => 'Missing Description',
'id' => 'Missing ID'
])

<main class="flex justify-around bg-neutral-900 h-screen items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg flex items-center justify-center flex-col">
        <h1 class="text-xl">Update {{$title}}</h1>
        <form action="{{ route('movies.update', ['id' => $id]) }}" class="flex flex-col flex-end p-4" method="POST">
            @csrf
            @method('PATCH')

            <div class="p-2">
                <label for="title">Movie title</label>
                <input type="text" id="title" class="w-full" name="title" placeholder="Enter movie title" value="{{$title}}" required>
            </div>

            <div class="p-2">
                <label for="release_date">Release date:</label>
                <input type="date" id="release_date" class="w-full" name="release_date" placeholder="Enter release date" value="{{$release_date}}" required>
            </div>

            <div class="p-2">
                <label for="genre">Genre:</label>
                <select id="genre" name="genre" class="w-full" value="{{$genre}}" required>
                    <option value="foo">Foo</option>
                    <option value="bar">Bar</option>
                    <option value="baz">Baz</option>
                </select>
            </div>
            <div class="p-2 flex flex-col">
                <label for="description">Description:</label>
                <textarea type="text" class="w-full h-32" id="description" name="description" placeholder="Enter description" required>{{$description}}</textarea>
            </div>

            <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded cursor-pointer" type="submit">Submit</button>
        </form>
        <div class="flex flex-row">
        <a href="/movies" class="mx-1 mt-2 bg-red-500 text-white px-4 py-2 rounded cursor-pointer">Close</a>
        <label for="popup_toggle_delete" class="mx-1 mt-2 bg-red-900 text-white px-4 py-2 rounded cursor-pointer">Delete</label>
        </div>
    </div>
</main>
<x-admin-delete-movie :id="$id" :title="$title"></x-admin-delete-movie>
