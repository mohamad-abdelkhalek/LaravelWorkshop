<x-bootLayout>
    <div class="card">
        <!-- Carousel Section -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            @php
                $images = json_decode($note->images, true) ?? [];
            @endphp

            @if (count($images) > 0)
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach ($images as $key => $image)
                        <li data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}"
                            class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    @foreach ($images as $key => $image)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{ asset('storage/uploads/' . $image) }}"
                                alt="Slide {{ $key + 1 }}">
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            @else
                <p class="text-center">No images available for this note.</p>
            @endif
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
                <a href="{{ route('notes.index') }}" class="btn btn-success btn-sm">Back</a>
                <a href="{{ route('notes.edit', $note) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-bootLayout>
