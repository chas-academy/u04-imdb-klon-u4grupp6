<input type="checkbox" id="popup_toggle_update" class="hidden peer/update">

<div id="popup_update" class="fixed inset-0 bg-gray-800 bg-opacity-75 items-center justify-center peer-checked/update:flex hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg flex items-center justify-center flex-col">
        <h1 class="text-xl">Update {{$title}}</h1>
        <form action="/movies/update{id}" class="flex flex-col flex-end p-4" method="UPDATE">
            @csrf
            <div class="p-2">
                <label for="title">Movie title</label>
                <input type="text" id="title" class="w-full" name="title" placeholder="Enter movie title" required>
            </div>

            <div class="p-2">
                <label for="release_date">Release date:</label>
                <input type="date" id="release_date" class="w-full" name="release_date" placeholder="Enter release date" required>
            </div>

            <div class="p-2">
                <label for="genre">Genre:</label>
                <select id="genre" name="genre" class="w-full" required>
                    <option value="foo">Foo</option>
                    <option value="bar">Bar</option>
                    <option value="baz">Baz</option>
                </select>
            </div>
            <div class="p-2 flex flex-col">
                <label for="description">Description:</label>
                <textarea type="text" class="w-full h-32" id="description" name="description" placeholder="Enter description" required></textarea>
            </div>

            <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded cursor-pointer" type="submit">Submit</button>
        </form>
        <div class="flex flex-row">
        <label for="popup_toggle_update" class="mx-1 mt-2 bg-red-500 text-white px-4 py-2 rounded cursor-pointer">Close</label>
        <label for="popup_toggle_delete" class="mx-1 mt-2 bg-red-900 text-white px-4 py-2 rounded cursor-pointer">Delete</label>
        </div>
    </div>
</div>
</input>