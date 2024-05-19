<x-app-layout>
    @slot('title', 'Create a Store')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Store') }}
        </h2>
    </x-slot>

    <x-container>
        <x-card class="max-w-2xl">
            <x-card.header>
                <x-card.title>Create new store</x-card.title>
                <x-card.description>
                    You can create up to 5 stores.
                </x-card.description>
            </x-card.header>
            <x-card.content>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius impedit in minima non numquam quibusdam suscipit. Debitis deserunt ducimus earum fugit iste nihil praesentium repudiandae sit veritatis. A animi commodi dolor dolore doloremque earum eos esse et eum facilis harum impedit officia quam qui quos, sunt tenetur, veniam voluptas.
            </x-card.content>
        </x-card>
    </x-container>
</x-app-layout>
