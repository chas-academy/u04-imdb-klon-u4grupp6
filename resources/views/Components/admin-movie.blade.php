@props([
    'title' => 'Missing Title', 
    'release_date' => 'Missing release Date', 
    'genre' => 'Missing Genre', 
    'description' => 'Missing Description'
])

<div class="bg-white p-2">
    <ul class="flex flex-row text-center">
        <li class="w-36">{{ $title }}</li>
        <li class="w-36">{{ $release_date }}</li>
        <li class="w-36">{{ $genre }}</li>
        <li class="w-36">{{ $description }}</li>
        <div class="w-36">
            <svg class="w-6 h-6 fill-current text-gray-500">
            </svg>
        </div>
    </ul>
</div>
