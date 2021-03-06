@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center" class="row justify-content-center">
        <b-col cols="8">
            <b-card header="Iniciar Sesión"
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

                <b-form method="POST" action="{{ route('login') }}">
                    @csrf

                    <b-form-group
                        label="Correo electrónico"
                        label-for="email"
                    >
                        <b-form-input id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}" required  autofocus
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

                    <b-form-group>
                        <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                            Recordar sesión
                        </b-form-checkbox>
                    </b-form-group>

                    <b-button type="submit" variant="primary">
                        Iniciar sesión
                    </b-button>

                    <b-button href="{{ route('password.request') }}" variant="link">
                        ¿Olvidaste tu contraseña?
                    </b-button>

                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
