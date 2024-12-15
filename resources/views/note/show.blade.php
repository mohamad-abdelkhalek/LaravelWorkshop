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
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://placehold.co/600x400" alt="First slide: Placeholder image">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://placehold.co/600x400/000000/FFFFFF/png"
                        alt="Second slide: Placeholder image with white text">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://placehold.co/600x400?text=Hello+World"
                        alt="Third slide: Placeholder with text Hello World">
                </div>
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

        <!-- Card Body -->
        <div class="card-body">
            <h5 class="card-title">Card Title</h5>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
        </div>
    </div>
</x-bootLayout>
