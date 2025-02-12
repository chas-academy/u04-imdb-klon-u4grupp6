@props([
'title' => 'Missing Title',
'release_date' => 'Missing release Date',
'genre' => 'Missing Genre',
'description' => 'Missing Description',
'id' => 'Missing ID'
])

<label for="popup_toggle_update" class="cursor-pointer">
    <div class="bg-white p-2 hover:bg-gray-100" data-movie-id="{{ $id }}">
    <ul class="flex flex-row items-center text-center h-12 ">
        <li class="w-36">{{ $title }}</li>
        <li class="w-36">{{ $release_date }}</li>
        <li class="w-36">{{ $genre }}</li>
        <li class="w-36">{{ $description }}</li>
        <li class="w-36 h-full flex flex-row">
       <svg class="w-12 h-full bg-green-500 cursor-pointer">
</svg>
            <a href="#"><svg class="w-12 h-full bg-blue-500 cursor-pointer">
            </svg></a>
        </li>
    </ul>
</div>
</label>