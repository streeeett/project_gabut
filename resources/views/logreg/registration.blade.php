<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

        <!-- Pesan sukses -->
        @if (session('success'))
            <div class="bg-green-200 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tampilkan error jika ada -->
        @if ($errors->any())
            <div class="bg-red-200 text-red-700 p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Register -->
        <form action="{{ route('postRegister') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 text-gray-600">Nama</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1 text-gray-600">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1 text-gray-600">Password</label>
                <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded" required autocomplete="off">
            </div>
            <div class="mb-4">
                <label class="block mb-1 text-gray-600">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full p-2 border border-gray-300 rounded" required autocomplete="off">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">Register</button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
        </p>
    </div>
</body>
</html>
