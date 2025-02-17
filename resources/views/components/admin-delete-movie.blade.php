@props(['id' => 'Missing ID', 'title' => 'Missing Title'])

<input type="checkbox" id="popup_toggle_delete" class="hidden peer/delete">

<div id="popup_delete" class="fixed inset-0 bg-gray-800 bg-opacity-75 items-center justify-center peer-checked/delete:flex hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg flex items-center justify-center flex-col">
        <h1 class="text-xl">delete {{$title}}?</h1>
        
        <form action="{{ route('movies.destroy', ['id' => $id]) }}" method="POST" class="flex flex-row p-4">
            @csrf
            @method('DELETE')
            <button class="m-1 px-4 py-2 bg-green-500 text-white rounded cursor-pointer" type="submit">confirm</button>
            <label for="popup_toggle_delete" class="m-1 px-4 py-2 bg-red-500 text-white rounded cursor-pointer">cancel</label>
        </form>
    </div>
</div>
