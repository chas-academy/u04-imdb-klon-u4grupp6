<input type="checkbox" id="popup_toggle" class="hidden peer">

<div id="popup" class="fixed inset-0 bg-gray-800 bg-opacity-75 items-center justify-center peer-checked:flex hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg flex items-center justify-center flex-col">
        <form action="/movies/store" class="flex flex-col flex-end p-4" method="POST">
            @csrf
            <div class="p-2">
                <label for="title">Movie title:</label>
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
        <label for="popup_toggle" class="mt-4 bg-red-500 text-white px-4 py-2 rounded cursor-pointer p-4">Close</label>
    </div>
</div>