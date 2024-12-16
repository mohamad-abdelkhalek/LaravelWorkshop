<x-bootLayout class="container mt-5">
    <h2 class="text-center">Login</h2>

    @if (session('error'))
        <div class="alert alert-danger">
            <h1>{{ session('error') }}</h1>
        </div>
    @endif
    <form action="{{ route('login.store') }}" method="POST">
        @csrf <!-- CSRF protection -->

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password"
                class="form-control @error('password') is-invalid @enderror" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>
</x-bootLayout>
