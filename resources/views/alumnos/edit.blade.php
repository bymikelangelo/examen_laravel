@extends('dashboard')

@section('content')
    <div>
        <fieldset>
            <legend>Creación de nuevo alumno</legend>
            <form class="mt-6" method="POST" action="{{ route('alumnos.update', $alumno->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>
                    <label for="title">Nombre</label>
                    <div>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') ?? $alumno->name }}"
                            required
                            autocomplete="name"
                            autofocus
                            placeholder="Nombre"
                        >

                        @error('name')
                        <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="surname">Apellido</label>
                    <div>
                        <input
                            type="text"
                            name="surname"
                            value="{{ old('surname') ?? $alumno->surname}}"
                            required
                            autocomplete="surname"
                            autofocus
                            placeholder="Apellido"
                        >

                        @error('surname')
                        <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="surname">Edad</label>
                    <div>
                        <input
                            type="text"
                            name="age"
                            value="{{ old('age') ?? $alumno->age }}"
                            required
                            autocomplete="age"
                            autofocus
                            placeholder="Edad"
                        >

                        @error('age')
                        <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <div>
                        <button class="bg-blue-400 p-2" type="submit">
                            Actualizar
                        </button>
                    </div>
                </div>

            </form>
        </fieldset>

    </div>
@endsection
