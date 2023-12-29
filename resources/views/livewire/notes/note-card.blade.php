<div class="col-span-4">
    @foreach ($notes as $note)
    <div class="bg-gray-300 mb-4 space-y-4 rounded p-4">
        <header class="flex items-center gap-2">
            <p class="text-lg font-medium">
                {{ $note->title }}
            </p>
            @if ($note->category)
            <span class="bg-indigo-700 text-white px-6 py-1 text-xs rounded">{{ $note->category }}</span>
            @endif
        </header>
        <p>{{ \Carbon\Carbon::parse($note->created_at)->format('F j Y g:ia') }}</p>
        <p>
            {!! $note->body !!}
        </p>
    </div>
    @endforeach
    <div class="mt-2">
        {{ $notes->links() }}
    </div>
</div>