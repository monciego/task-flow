<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Create new task</h2>
        <form wire:submit="store">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <x-input-label for="task_name" :value="__('Task name')" />
                    <x-text-input id="task_name" wire:model.live='form.task_name' class="w-full mt-2 "
                        placeholder='Task name' />
                    <x-input-error :messages="$errors->get('form.task_name')" class="mt-2" />
                </div>
                <div class="w-full">
                    <x-input-label for="slug" :value="__('Slug')" />
                    <x-text-input id="slug" wire:model.live='form.slug' class="w-full mt-2 " placeholder='Task slug' />
                    <x-input-error :messages="$errors->get('form.slug')" class="mt-2" />
                </div>
                <div class="w-full">
                    <x-input-label for="deadline" :value="__('Deadline')" />
                    <x-text-input type="date" wire:model.live='form.deadline' id="deadline" class="w-full mt-2 "
                        placeholder='Task name' />
                    <x-input-error :messages="$errors->get('form.deadline')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="status" :value="__('Status')" />
                    <select id="status" wire:model.live="form.status"
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
                    <select id="priority" wire:model.live="form.priority"
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
                    <textarea id="description" wire:model.live="form.description" rows="8"
                        class="border-gray-300 mt-2 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        placeholder="Your description here"></textarea>
                    <x-input-error :messages="$errors->get('form.description')" class="mt-2" />
                </div>
            </div>
            <x-secondary-button type='submit' class=" w-full mt-4 flex justify-center items-center">
                Add Task
                <div wire:loading role="status">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>

            </x-secondary-button>
        </form>
    </div>
</section>