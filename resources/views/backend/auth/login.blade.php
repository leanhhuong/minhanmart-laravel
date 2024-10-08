<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <title>INSPINIA | Login 2</title>

</head>

<body class="gray-bg">
  <main class="relative flex flex-1 flex-col overflow-hidden px-4 py-8 sm:px-6 lg:px-8 min-h-dvh">
    <img src="https://tailwindui.com/plus/img/beams-cover@95.jpg" alt="" class="absolute left-1/2 top-0 -ml-[47.5rem] w-[122.5rem] max-w-none">
    <div class="absolute inset-0 text-slate-900/[0.07] [mask-image:linear-gradient(to_bottom_left,white,transparent,transparent)]"><svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <pattern id="grid-bg" width="32" height="32" patternUnits="userSpaceOnUse" x="100%" patternTransform="translate(0 -1)">
            <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid-bg)"></rect>
      </svg></div>
    <div class="relative flex flex-1 flex-col items-center justify-center pb-16 pt-12">
      <div class="flex flex-row mb-16">
        <img class="w-12" src="https://laravel.com/img/logomark.min.svg" alt="Laravel" width="50" height="52">
        <img class="ml-5 sm:block" src="https://laravel.com/img/logotype.min.svg" alt="Laravel" width="114" height="29">
      </div>
      <form method="POST" action="{{ route('auth.admin') }}" class="w-full max-w-sm" role="form">
        @csrf
        <div class="mb-6">
          <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email address</label>
          <input type="email" id="email" name="email" class="mt-2 appearance-none text-slate-900 bg-white rounded-md block w-full px-3 h-10 shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-sky-500 ring-1 ring-slate-200" value="">
          @if($errors->has('email'))
          <span class="text-red-400 text-sm italic">{{ $errors->first('email') }}*</span>
          @endif
        </div>
        <div class="mb-6">
          <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">Password</label>
          <input type="password" id="password" name="password" class="mt-2 appearance-none text-slate-900 bg-white rounded-md block w-full px-3 h-10 shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-sky-500 ring-1 ring-slate-200" value="">
          @if($errors->has('password'))
          <span class="text-red-400 text-sm italic">{{ $errors->first('password') }}*</span>
          @endif
        </div>
        <button type="submit" class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 w-full">
          <span>Login</span>
        </button>
        <p class="mt-8 text-center"><a class="text-sm hover:underline" href="/password/reset">Forgot password?</a></p>
      </form>
    </div>
    <footer class="relative shrink-0">
      <div class="space-y-4 text-sm text-gray-900 sm:flex sm:items-center sm:justify-center sm:space-x-4 sm:space-y-0">
        <p class="text-center sm:text-left">Don't have an account?</p><a class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 text-slate-900 ring-1 ring-slate-900/10 hover:ring-slate-900/20" href="/all-access"><span>Get access <span aria-hidden="true">→</span></span></a>
      </div>
    </footer>
  </main>

</body>

</html>