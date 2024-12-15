<x-bootLayout>
    <div class="container my-4">
        @foreach ($notes as $note)
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title m-0">{{ $note->title }}</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $note->note }}</p>
                </div>
                <div class="card-footer d-flex justify-content-end gap-2">
                    <a href="#" class="btn btn-success btn-sm">View</a>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
</x-bootLayout>
