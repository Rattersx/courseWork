<div class="mx-auto max-w-7x1">
    <div class="overflow-hidden shadow-x1 sm:rounded-lg">
        {{-- Heading --}}
        <div class="flex w-full p-3 space-x-2">
            <div class="w-3/6">
                <span class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                      </svg>
                </span>
                <input wire:model.debounce.300ms='search' type="text" class="relative w-full py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50" placeholder="Search posts...">
            </div>

            <div class="relative w-1/6">
                <select wire:model='orderBy' id="" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50">
                    <option value="id">Id</option>
                    <option value="title">Title</option>
                    <option value="created_at">Created At</option>
                </select>
            </div>

            <div class="relative w-1/6">
                <select wire:model='orderAsc' id="" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50">
                    <option value="1">Asc</option>
                    <option value="0">Desc</option>
                </select>
            </div>

            <div class="relative w-1/6">
                <select wire:model='perPage' id="" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>

        <table class="w-full">
            <thead class="font-bold bg-dark-200">
                <tr>
                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase"></th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Id
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Title
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Category
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Featured
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Created Date
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Updated Date
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Actions
                    </th>
                </tr>
            </thead>

            <tbody class="text-xs bg-dark-300">
                @foreach ($posts as $post)
                <tr>
                    <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                        {{ $post->id }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                        {{ Str::limit($post->title, 40, '...') }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                        {{ $post->category->name }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                        Featured
                    </td>
                    
                    <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                        {{ $post->created_at->format('m/d/y')}}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                        {{ $post->updated_at->format('m/d/y') }}
                    </td>

                    <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">

                        <div class="flex justify-start space-x-1">
                            <a href=" {{route('posts.edit', $post)}} " class="p-1 border-2 border-white-500 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                        

                            <form action="{{route('posts.destroy', '$post')}}" method="POST">
                                @csrf
                                @method("Delete")
                                <button type="submit" class="p-1 border-2 border-primary rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"     stroke="currentColor" class="w-4 h-4 text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19    7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5  4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="p-2 bg-indigo-300">
            {{ $posts->links() }}
        </div>
    </div>
</div>