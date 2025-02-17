@props([
'title' => 'Missing Title',
'release_date' => 'Missing release Date',
'genre' => 'Missing Genre',
'description' => 'Missing Description',
'id' => 'Missing ID'
])

<div class="bg-white p-2 hover:bg-gray-100" data-movie-id="{{ $id }}">
    <ul class="flex flex-row text-center h-12 items-center   [&_li]:truncate">
        <li class="w-36">{{ $title }}</li>
        <li class="w-36">{{ $release_date }}</li>
        <li class="w-36">{{ $genre }}</li>
        <li class="w-36">{{ $description }}</li>
        <li class="w-36 h-12 flex flex-row">
            <a href="#"><x-img-eye></x-img-eye></a>
            <a href="{{ route('movies.edit', ['id' => $id])  }}"><x-img-pencil></x-img-pencil></a>
        </li>
    </ul>
</div>