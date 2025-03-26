<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Verifikasi Email</h2>

        @if (session('error'))
            <div class="bg-red-200 text-red-700 p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('postVerify') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ session('email') }}">
            <div class="mb-4">
                <label class="block mb-1 text-gray-600">Masukkan Kode Verifikasi</label>
                <input type="text" name="verification_code" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">Verifikasi</button>
        </form>
    </div>
</body>
</html>
