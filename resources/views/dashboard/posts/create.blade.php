<x-base-layout>
    <div class="space-x-4">
        <x-jet-nav-link href="/posts">
            Posts
        </x-jet-nav-link>
    
        <x-jet-nav-link href="/posts/create">
            Create
        </x-jet-nav-link>
    </div>

    <div class="py-12">
        <div class="max-w-4x1 mx-auto sm:px-6 lg:px-6">
            <div class="overflow-hidden bg-dark-300 shadow-x1 sm:rounded-lg">

                <div class="p-4">
                    <form action="{{route('posts.store')}}" method="POST">
                        @csrf

                        <div>
                            <small class="mb-4 text-white-500">Note: Select Parent only for subcategory</small>
                            <select name="parent_id" id="" class="w-full mb-6 border-none bg-dark-300">
                                <option value="">Create new parent category</option>
                                @foreach ($posts as $post)
                                    <option value="{{$post->id}}">{{ $post->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-jet-label for="name" class="text-white-600" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full text-dark bg-dark-200 border-white-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <span class="text-xs text-white-300">Maximum 80 character</span>
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>

                        <x-jet-button class="ml-4 mt-12">
                            {{ __('Create') }}
                        </x-jet-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>