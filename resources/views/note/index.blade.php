<x-bootLayout>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($notes as $note)
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title m-0">{{ $note->title }}</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ Str::limit($note->note, 86) }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-end gap-2">
                            <a href="{{ route('notes.show', $note) }}" class="btn btn-success btn-sm">View</a>
                            <a href="{{ route('notes.edit', $note) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-bootLayout>
