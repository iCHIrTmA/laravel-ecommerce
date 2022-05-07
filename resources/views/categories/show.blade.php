<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold">
            Converse Shoes
        </div>
    </x-slot>

    <livewire:product-browser :category="$category" />
</x-app-layout>