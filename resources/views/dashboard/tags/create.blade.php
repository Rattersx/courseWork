<x-base-layout>
    <div class="space-x-4">
        <x-jet-nav-link href="/tags">
            Index
        </x-jet-nav-link>
    
        <x-jet-nav-link href="/tags/create">
            Create
        </x-jet-nav-link>
    </div>

    <div class="py-12">
        <div class="max-w-4x1 mx-auto sm:px-6 lg:px-6">
            <div class="overflow-hidden bg-dark-300 shadow-x1 sm:rounded-lg">

                <div class="p-4">
                    <form action="{{ route('tags.store') }}" method="POST">
                        @csrf

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