<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index()
  {
    $students = Student::paginate(10);

    return view('students', compact('students'));
  }

  public function store(Request $request)
  {
    Student::create([
      'identification_number' => $request->identification_number,
      'names' => $request->name,
      'lastname' => $request->lastname,
      'age' => $request->age,
      'email' => $request->email,

    ]);

    //Otra forma de insertar datos
    // $request->user()->post([
    //     'titulo' => $request->titulo,
    //     'descripcion' => $request->descripcion,
    //     'imagen' => $request->imagen,
    //     'user_id' => auth()->user()->id,
    // ]);

    return redirect()->route('students.index');
  }

  public function create()
  {
    return view('register.registerStudent');
  }

  public function edit($id)
  {
    return $id;
  }

  public function update(Request $request, $id)
  {
    return "Data up to date";
  }

  public function destroy($id)
  {
    return 'Register deleted:' . $id;
  }
}
