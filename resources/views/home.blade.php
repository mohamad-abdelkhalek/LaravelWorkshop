<x-bootLayout>

    @if (session()->get('msg'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>Success</strong> {{ session('msg') }}
        </div>
    @endif

    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Hello, {{ $user->name }}</h1>
        <p>Your Registered Email: {{ $user->email }}</p>
    </div>
</x-bootLayout>
