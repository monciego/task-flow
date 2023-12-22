<div>
    <h2 class="text-black dark:text-white">
        Tasks
    </h2>


    <a href="{{ route('tasks.create') }}" wire:navigate>Add Task</a>

    <ul class="text-black list-disc list-inside dark:text-white">
        @foreach ($tasks as $task)
        <li>
            {{ $task }}
        </li>
        @endforeach
    </ul>
</div>