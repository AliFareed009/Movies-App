
    <div class="relative">
        <input wire:model="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus-shadow-outline" placeholder="Search">
    </div>
    <div class="absolute bg-gray-800 text-sm rounded w-64 mt-20"> 
        <ul>
            @foreach ($searchresults as $result)
            <li class="border-b border-gray-700">
                <a href="{{ route('movies.show', $result['id'] )}}" class="block hover:bg-gray-700 px-3 py-3">{{ $result['title'] }}</a>
            </li>
            @endforeach
        </ul>
    </div>
