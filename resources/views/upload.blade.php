<x-bootLayout>
    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="container my-4">
        <h2 class="mb-4">Upload a File</h2>
        <form action="{{ route('photo.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Choose a file to upload</label>
                <input type="file" class="form-control" name="image" id="formFile" required
                    aria-describedby="fileHelp">
                <div id="fileHelp" class="form-text">
                    Accepted formats: JPG, PNG, GIF. Max size: 2MB.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</x-bootLayout>
