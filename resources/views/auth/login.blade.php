@extends("base")

@section('title', "se connecter")

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100">
<div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md ">

    @if ($errors->any())
     <div class="class bg-red-100 border border-red-400 text-red-700 px-4 py-3 round-relative" role="alert">

      <strong class="class font-bold">Ereur !</strong>
      <span class="block sm:inline">{{ $errors->first() }}</span>        
     </div>
    @endif


        <form action="{{ route('login.submit') }}" method="POST" class="mt-6">
            @csrf
            <div class="mb4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
<input type="email" class="mt-1 p-3 block w-full border-gray-300 outline-none rounded-md shadow-md" id="email" name="email" value="{{ old('email') }}">
                 
                @error('email')
<span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
<input type="password" class="mt-1 p-3 block w-full border-gray-300 outline-none rounded-md shadow-md" id="password" name="password" value="{{ old('password') }}">
                @error('password')
<span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>


          <button type="submit" class="w-full py-2 px-4 bg-purple-700 hover:bg-purple-500 text-white rounded-md">
          Se connecter
          </button>

<p class="my-2">
    Pas de compte ?
    <a href="{{ route('register') }}" class="text-red-500">S'inscrire des maintenant</a>
</p>
        </form>
</div>
</div>
@endsection