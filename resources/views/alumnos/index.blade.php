@extends('dashboard')

@section('content')
    <div>
        <div class="mb-6">
            <a class="bg-blue-400 p-2" href="{{route('alumnos.create')}}">Crear Alumno</a>
        </div>

        @if(session('alert'))
            <div>
                <p>{{session('alert')['message']}}</p>
            </div>
        @endif

        <table class="border-8">
            <thead>
            <tr class="border-2 bg-gray-200">
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumnos as $alumno)
                <tr class="border-2">
                    <td>{{$alumno->name}}</td>
                    <td>{{$alumno->surname}}</td>
                    <td>{{$alumno->age}}</td>
                    <td>
                        <div>
                            <div class="bg-blue-200">
                                <a href="{{route('alumnos.edit', $alumno->id)}}">Modificar</a>
                            </div>
                            <div class="bg-red-400">
                                <form action="{{route('alumnos.destroy', $alumno->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Borrar</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
