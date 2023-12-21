<div>
    <h2 class="text-black dark:text-white">
        Tasks
    </h2>

    <div class="my-4">
        <x-text-input wire:model="task" />
        <x-primary-button wire:click="addTask">
            {{ __('Add') }}
        </x-primary-button>
    </div>

    <ul class="text-black list-disc list-inside dark:text-white">
        @foreach ($tasks as $task)
        <li>
            {{ $task }}
        </li>
        @endforeach
    </ul>
</div>