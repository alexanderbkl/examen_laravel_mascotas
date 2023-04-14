@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Panel principal') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>Binevenido/a mascota {{ Auth::user()->name }}</p>
                        <p>Subir foto de perfil</p>
                        <form action="{{ route('home') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image">
                            <input type="submit" value="Upload">
                        </form>

                        <!--iterate through users to show them in a table-->

                        @if (isset($users) && count($users) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Nick</th>
                                    <th>Edad</th>
                                    <th>Nombre humano</th>
                                    <th>Teléfono humano</th>
                                    <th>Fotos</th>
                                </tr>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->nick }}</td>
                                        <td>{{ $user->edad }}</td>
                                        <td>{{ $user->name_humano }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td><a href="{{ $user->picture_path }}">Ver fotos</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>No hay usuarios registrados</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
