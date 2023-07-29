@extends('layouts.app')

@section('title')
    Registrarse
@endsection()

@section('content')
<!--El app ya tiene un container-->
<div class="md:flex md:justify-center md:gap-10 md:items-center p-5">
    <div class="md:w-4/12 p-6 rounded-lg bg-white shadow-xl">
        <form action="{{route('register.index')}}" method="POST" novalidate>
            @csrf
            <div class="my-5">
                <label for="" class="block mx-2">Nombre</label>
                <input name="name" type="text" class="p-2 border w-full @error('name') border-red-500 @enderror" value="{{old('name')}}">

                @error('name')
                    <p class="bg-red-500 rounded-lg text-white font-bold">{{$message}}</p>
                @enderror
            </div>

            <div class="my-5">
                <label for="" class="block mx-2">Apellido</label>
                <input name="lastname" type="text" class="p-2 border w-full @error('lastname') border-red-500 @enderror" value="{{old('lastname')}}">
                
                @error('lastname')
                    <p class="bg-red-500 rounded-lg text-white font-bold">{{$message}}</p>
                @enderror
            </div>

            <div class="my-5">
                <label for="" class="block mx-2">Email</label>
                <input name="email" type="text" class="p-2 border w-full @error('email') border-red-500 @enderror" value="{{old('email')}}">
                
                @error('email')
                    <p class="bg-red-500 rounded-lg text-white font-bold">{{$message}}</p>
                @enderror
            </div>

            <div class="my-5">
                
                <label for="" class="block mx-2">Username</label>
                <input name="username" type="text" class="p-2 border w-full @error('username') border-red-500 @enderror" value="{{old('username')}}">

                @error('username')
                    <p class="bg-red-500 rounded-lg text-white font-bold">{{$message}}</p>
                @enderror
            </div>

            <div class="my-5">
                
                <label for="" class="block mx-2">Password</label>
                <input name="password" type="password" class="p-2 border w-full @error('password')  border-red-500 @enderror">
                @error('password')
                    <p class="bg-red-500 rounded-lg text-white font-bold">{{$message}}</p>
                @enderror
            </div>

            <div class="my-5">
                
                <label for="" class="block mx-2">Repetir password</label>
                <input name="password_confirmation" type="password" class="p-2 border w-full">

                @error('password_confirmation')
                    <p class="bg-red-500 rounded-lg text-white font-bold">{{$message}}</p>
                @enderror
            </div>

            <div class="mt-5">
                
                <input class="bg-sky-400 w-full text-white font-bold p-2 cursor-pointer" type="submit" value="Registrarse">
            </div>

        </form>
    </div>
</div>
   
        
    
@endsection()