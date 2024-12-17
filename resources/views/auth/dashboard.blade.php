<x-bootLayout>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="{{ route('dashboard.logout') }}" class="btn btn-outline-danger" aria-label="Logout">
                        Logout
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white text-center">
                <h1 class="mb-0">Welcome to Your Dashboard</h1>
            </div>
            <div class="card-body text-center">
                <h2>
                    Hello,
                    @if (auth()->check())
                        <span class="text-success">{{ auth()->user()->name }}</span>
                    @else
                        <span class="text-danger">Guest</span>
                    @endif
                </h2>
                <p class="mt-3">Manage your tasks, track progress, and much more!</p>
            </div>
        </div>
    </div>
</x-bootLayout>
