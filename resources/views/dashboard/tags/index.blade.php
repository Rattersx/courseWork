<x-base-layout>
    
    <div class="space-x-4">
        <x-jet-nav-link href="/tags">
            Index
        </x-jet-nav-link>
    
        <x-jet-nav-link href="/tags/create">
            Create
        </x-jet-nav-link>
    </div>
        
    <div class="mx-auto max-w-7x1 sm:px-6 lg:px-8">
        <x-ui.alerts />
    </div>

    <div class="py-12">
        <div class="mx-auto max-w-7x1 sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-x1 sm:rounded-lg">
                <table class="w-full">
                    <thead class="font-bold bg-dark-200">
                        <tr>
                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase"></th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Id
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Name
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
                        @foreach ($tags as $tag)
                        <tr>
                            <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                                {{ $tag->id }}
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                                {{ $tag->name }}
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                                {{ $tag->created_at->format('m/d/y')}}
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap text-white-600" style="color: black; font-weight: 500;">
                                {{ $tag->updated_at->format('m/d/y') }}
                            </td>

                            <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">
{{-- EDIT --}}
                                <div class="flex justify-start space-x-1">
                                    <a href=" {{route('tags.edit', $tag)}} " class="p-1 border-2 border-white-500 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                
{{-- DELETE --}}
                                    <form action="{{route('tags.destroy', $tag)}}" method="POST">
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
            </div>
        </div>
    </div>

</x-base-layout>