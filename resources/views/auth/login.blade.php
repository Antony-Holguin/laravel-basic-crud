@extends('layouts.app')

@section('title')
    Login
@endsection()

@section('content')
<!--El app ya tiene un container-->
   <div class="md:flex md:justify-center md:gap-10 md:items-center p-5">
        <div class="md:w-4/12 p-6 rounded-lg bg-white shadow-xl">
            <form action="{{route('login.store')}}" class="bg-white rounded-lg" novalidate method="POST">
                @csrf

                <div class="mb-4 py-5 mx-10">
                    <label class="block mx-2" for=""> Email:</label>
                    <input name="email" placeholder="Email:" class="border w-full rounded-md p-3 @error('email') border-red-600 @enderror" type="email" value="{{old('email')}}">
                    @error('email')
                        <p class="rounded-lg text-white bg-red-600 w-full p-2 mb-2">{{$message}}</p>
                    @enderror
                </div>       

                <div class="mx-10">
                    <label class="block mx-2" for=""> Password:</label>
                    <input name="password" placeholder="Password:" class="border w-full rounded-md p-3 @error('password') border-red-600 @enderror" type="password">

                    @error('password')
                        <p class="border-red-600 rounded-lg text-white bg-red-600 w-full p-2 mb-2  ">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex mx-10 mt-4">
                    <input type="checkbox" name="remember">
                    <label class="mx-2" for="">Mantener sesion iniciada</label>
                    
                </div>

                <div class="flex mx-10 mt-4 p-2 justify-center">
                        <div>
                            <label class="text-sm" for="">¿Todavia sin cuenta?</label>
                        </div>
                        
                       <div>
                        <button class="">
                            <a class="ml-10 text-gray-400 text-sm" href="{{route('register.index')}}">Registrate</a>
                        </button>
                       </div>
                        
                </div>


                <div class="bg-sky-500 rounded-lg cursor-pointer p-2 mt-5 text-center">
                    <input class="uppercase text-white font-bold cursor-pointer" type="submit" value="Iniciar sesion">
                </div>
            </form>
        </div>
   </div>
@endsection()