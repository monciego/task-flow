<div>
    <h2 class="text-black dark:text-white">
        Tasks
    </h2>

    <form wire:submit='addTask' class="my-4">
        <x-text-input wire:model="task" />
        <x-primary-button>
            {{ __('Add') }}
        </x-primary-button>
    </form>

    <ul class="text-black list-disc list-inside dark:text-white">
        @foreach ($tasks as $task)
        <li>
            {{ $task }}
        </li>
        @endforeach
    </ul>
</div>