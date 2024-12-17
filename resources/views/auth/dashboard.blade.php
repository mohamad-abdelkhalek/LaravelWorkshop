<x-bootLayout>
    <h1>Hello Welcome to your dashboard <span class="text-success">{{ auth()->user()->name }}</span></h1>

    <a href="{{ route('dashboard.logout') }}" class="btn btn-primary">Logout</a>

</x-bootLayout>
