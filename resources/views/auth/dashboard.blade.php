<x-bootLayout>
    <h1>
        Hello, Welcome to your dashboard
        @if (auth()->check())
            <span class="text-success">{{ auth()->user()->name }}</span>
        @else
            <span class="text-danger">Guest</span>
        @endif
    </h1>

    <a href="{{ route('dashboard.logout') }}" class="btn btn-primary" aria-label="Logout">Logout</a>
</x-bootLayout>
