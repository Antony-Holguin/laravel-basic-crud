@extends('layouts.template')

@section('content')
<div class="container my-5 mx-5">
    <div class="flex md:h-1/2">
        <form action="{{route('students.store')}}" class="form" method="POST">
            @csrf
            <div class="bg-gray-800 mb-5">
                <h3 class="text-center text-white">Register user</h3>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="text-xl">Identification number</label>
                <input name="identification_number" placeholder="Type your id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
    
            <div class="mb-3">
              <label for="exampleInputEmail1" class="text-xl">Name</label>
              <input name="name" placeholder="Type your name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
    
            <div class="mb-3">
                <label for="exampleInputEmail1" class="text-xl">Lastname</label>
                <input  name="lastname" placeholder="Type your lastname" type="text" class="form-control mb-4" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
    
            <div class="mb-3">
                <label for="exampleInputEmail1" class="text-xl">Age</label>
                <input name="age" placeholder="Type your age" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
    
            <div class="mb-3">
                <label for="exampleInputEmail1" class="text-xl">Email</label>
                <input  name="email" placeholder="Type your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
    </div>
</div>

@endsection()