<x-base-layout>
    
    <div class="space-x-4">
        <x-jet-nav-link href="/posts">
            Index
        </x-jet-nav-link>
    
        <x-jet-nav-link href="/posts/create">
            Create
        </x-jet-nav-link>
    </div>
        
    <div class="mx-auto max-w-7x1 sm:px-6 lg:px-8">
        <x-ui.alerts />
    </div>

    <div class="py-12">
        <div class="mx-auto max-w-7x1 sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-x1 sm:rounded-lg">
                
                <livewire:post.index>

            </div>
        </div>
    </div>

</x-base-layout>