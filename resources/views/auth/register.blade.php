@extends('layouts.app')

@section('content')

<b-container>
    <b-row align-h="center" class="row justify-content-center">
        <b-col cols="8">
            <b-card header="Crear Cuenta"
                header-tag="header"
            >

                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @endif

                <b-form method="POST" action="{{ route('register') }}">
                    @csrf

                    <b-form-group
                        label="Nombre"
                        label-for="name"
                    >
                        <b-form-input id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}" required  autofocus
                            placeholder="Angel Robles"
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group
                        label="Correo electrónico"
                        label-for="email"
                    >
                        <b-form-input id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}" required 
                            placeholder="example@tianel.cl"
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group
                        label="Contraseña"
                        label-for="password"
                    >
                        <b-form-input id="password"
                            name="password"
                            type="password"
                            required
                        >
                        </b-form-input>
                    </b-form-group>

                    <b-form-group
                        label="Confirmar Contraseña"
                        label-for="password_confirmation"
                    >
                        <b-form-input id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                        >
                        </b-form-input>
                    </b-form-group>


                    <b-button type="submit" variant="primary">
                        Registrarse
                    </b-button>

                    <b-button href="{{ route('login') }}" variant="link">
                        ¿Estas registrado? Iniciar Sesión.
                    </b-button>

                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>

@endsection
