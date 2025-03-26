<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
 

</style>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
        <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl max-md:max-w-md w-full">
          <div>
            <h2 class="lg:text-5xl text-3xl font-bold lg:leading-[57px] text-slate-900">
              Login untuk melanjutkan
            </h2>
            <p class="text-sm mt-6 text-slate-500 leading-relaxed">Immerse yourself in a hassle-free login journey with our intuitively designed login form. Effortlessly access your account.</p>
            <p class="text-sm mt-12 text-slate-500">Don't have an account <a href="/registration" class="text-blue-600 font-medium hover:underline ml-1">Register here</a></p>
          </div>
  
          <form class="mt-6 space-y-4" action="{{ url('/login') }}" method="POST">
            @csrf
            @method("POST")

            @if(session("error"))
                <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm text-center">
                    {{ session("error") }}
                </div>
            @endif

            <div>
                <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email" placeholder="••••••••" required 
                    class="w-full p-2.5 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" required 
                    class="w-full p-2.5 mt-1 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="text-sm">
                <a href="jajvascript:void(0);" class="text-blue-600 hover:text-blue-500 font-medium">
                  Forgot your password?
                </a>
              </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-medium rounded-lg text-sm px-5 py-2.5 hover:bg-blue-700">
                Masuk
            </button>

            {{-- <p class="text-sm text-gray-500 text-center">
                Belum punya akun? <a href="/registration" class="font-medium text-blue-600 hover:underline">Daftar</a>
            </p> --}}
        </form>
        </div>
      </div>
</body>
</html>