@props([
    'title' => 'Missing Title', 
    'release' => 'Missing Release Date', 
    'genre' => 'Missing Genre', 
    'description' => 'Missing Description'
])

<div class="bg-white p-2">
    <ul class="flex flex-row text-center">
        <li class="w-36">{{ $title }}</li>
        <li class="w-36">{{ $release }}</li>
        <li class="w-36">{{ $genre }}</li>
        <li class="w-36">{{ $description }}</li>
        <div class="w-36">
            <!-- Fixing SVG syntax -->
            <svg class="w-6 h-6 fill-current text-gray-500">
                <!-- Your SVG path goes here -->
            </svg>
        </div>
    </ul>
</div>
