<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Create new task</h2>
        <form wire:submit="store">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <x-input-label for="task_name" :value="__('Task name')" />
                    <x-text-input id="task_name" wire:model='form.task_name' class="w-full mt-2 "
                        placeholder='Task name' />
                    <x-input-error :messages="$errors->get('form.task_name')" class="mt-2" />
                </div>
                <div class="w-full">
                    <x-input-label for="slug" :value="__('Slug')" />
                    <x-text-input id="slug" wire:model='form.slug' class="w-full mt-2 " placeholder='Task slug' />
                    <x-input-error :messages="$errors->get('form.slug')" class="mt-2" />
                </div>
                <div class="w-full">
                    <x-input-label for="deadline" :value="__('Deadline')" />
                    <x-text-input type="date" wire:model='form.deadline' id="deadline" class="w-full mt-2 "
                        placeholder='Task name' />
                    <x-input-error :messages="$errors->get('form.deadline')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="status" :value="__('Status')" />
                    <select id="status" wire:model="form.status"
                        class="border-gray-300 mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        <option disabled selected="">Select status</option>
                        @foreach (\App\Enums\StatusType::cases() as $status)
                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('form.status')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="priority" :value="__('Priority')" />
                    <select id="priority" wire:model="form.priority"
                        class="border-gray-300 mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        <option disabled selected="">Select priority</option>
                        @foreach (\App\Enums\PriorityType::cases() as $priority)
                        <option value="{{ $priority->value }}">{{ $priority->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('form.priority')" class="mt-2" />
                </div>
                <div class="sm:col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" wire:model="form.description" rows="8"
                        class="border-gray-300 mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        placeholder="Your description here"></textarea>
                    <x-input-error :messages="$errors->get('form.description')" class="mt-2" />
                </div>
            </div>
            <x-secondary-button type='submit' class="w-full mt-4 flex justify-center items-center">
                Add Task
            </x-secondary-button>
        </form>
    </div>
</section>