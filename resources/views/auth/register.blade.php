@extends("base")

@section('title', "Inscription")

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
<div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md">

    @if(session('success'))
     <div class="class bg-red-100 border border-green-400 text-green-700 px-4 py-3 rounded-relative" role="alert">

      <strong class="class font-bold">Success !</strong>
      <span class="block sm:inline">{{ session('success')}}</span>        
     </div>
    @endif


        <form action="{{ route('registration.register') }}" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">nom</label>
<input type="text" class="mt-1 p-3 block w-full border-gray-300 outline-none rounded-md shadow-md" id="name" name="name" value="{{ old('name') }}">
                 
                @error('name')
<span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
<input type="email" class="mt-1 p-3 block w-full border-gray-300 outline-none rounded-md shadow-md" id="email" name="email" value="{{ old('email') }}">
                 
                @error('email')
<span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
<input type="password" class="mt-1 p-3 block w-full border-gray-300 outline-none rounded-md shadow-md" id="password" name="password"> 
                @error('password')
<span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">confirmer votre mot de passe</label>
<input type="password" class="mt-1 p-3 block w-full border-gray-300 outline-none rounded-md shadow-md" id="password_confirmation" name="password_confirmation">
             
            </div>


          <button type="submit" class="w-full py-2 px-4 bg-purple-700 hover:bg-purple-500 text-white rounded-md">
            S'inscrire
          </button>

<p class="my-2">
   Deja un compte ?
    <a href="{{ route('login') }}" class="text-red-500">Se connecter</a>
</p>
        </form>
</div>
</div>

@endsection