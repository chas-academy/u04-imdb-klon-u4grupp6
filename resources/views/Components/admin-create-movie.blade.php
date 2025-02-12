<form action="/movies/store" class="flex flex-col flex-end p-4" method="POST">
    @csrf
                        <div class="p-2">
                            <label for="movie name">Movie name:</label>
                            <input type="text" id="name" class="w-full" name="name" placeholder="Enter movie name" required>
                        </div>

                        <div class="p-2">
                            <label for="release date">Release date:</label>
                            <input type="text" id="release date" class="w-full" name="release date" placeholder="Enter release date" required>
                        </div>

                        <div class="p-2">
                            <label for="genre">Genre:</label>
                            <input type="text" id="genre" class="w-full" name="genre" placeholder="Enter genre" required>
                        </div>
                        <div class="p-2 flex flex-col">
                            <label for="description">Description:</label>
                            <textarea type="text" class="w-full h-32" id="description" name="description" placeholder="Enter description" required></textarea>
                        </div>

                        <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded cursor-pointer" type="submit">Submit</button>
                    </form>