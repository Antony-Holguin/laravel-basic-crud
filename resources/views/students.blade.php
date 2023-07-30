@extends('layouts.template')


@section('content')
<div class="container">
    <div class="flex  justify-center">
        <table class="table border-collapse border border-slate-500 ...">
            <thead>
              <tr class="text-center bg-gray-700 text-white">
                <th class="border border-slate-600 ...">Identification Number</th>
                <th class="border border-slate-600 ...">Names</th>
                <th class="border border-slate-600 ...">Lastname</th>
                <th class="border border-slate-600 ...">Age</th>
                <th class="border border-slate-600 ...">Email</th>
              </tr>
            </thead>
            <tbody>
                
              @foreach ($students as $student)
                
                <tr class="text-center">
                    <td class="border border-slate-700 ...">{{$student->identification_number}}</td>
                    <td class="border border-slate-700 ...">{{$student->names}}</td>
                    <td class="border border-slate-700 ...">{{$student->lastname}}</td>
                    <td class="border border-slate-700 ...">{{$student->age}}</td>
                    <td class="border border-slate-700 ...">{{$student->email}}</td>
                    
                </tr>
             
              @endforeach
              
            </tbody>
          </table>
          <div class="flex justify-center">
            {{$students->links('pagination::bootstrap-5')}}
          </div>
    </div>

</div>
  
@endsection()