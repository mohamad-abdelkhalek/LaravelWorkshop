<x-bootLayout>
    <div class="card">
        <!-- Carousel Section -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>

            <!-- Carousel Items -->
            <div class="carousel-inner">
                @php
                    $images = json_decode($note->images, true);
                @endphp
                @foreach ($images as $key => $image)
                    <div class="carousel-item active {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset('storage/uploads') . '/' . $image }}"
                            alt="First slide: Placeholder image">
                    </div>
                @endforeach


            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Card Body with Note Content -->
        <div class="card-body">
            <!-- Display Note Title -->
            <h5 class="card-title">{{ $note->title }}</h5>

            <!-- Display Note Content -->
            <p class="card-text">
                {{ $note->note }}
            </p>

            <div class="card-footer d-flex justify-content-end gap-2">
                <a href="{{ route('notes.index', $note) }}" class="btn btn-success btn-sm">Back</a>
                <a href="{{ route('notes.edit', $note) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </div>
    </div>
</x-bootLayout>
