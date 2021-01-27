@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if(session('status'))
            <div class="mb-6 rounded-lg bg-red-400 text-white text-center p-4">
                {{session('status')}}
            </div>
                @endif
            <form action="{{route('login')}}" method="post">

                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email"class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" placeholder="Seu email" value="{{old('email')}}">
                    
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Senha</label>
                    <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" placeholder="Sua senha" value="">
                    
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Entrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection