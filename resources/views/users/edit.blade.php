@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Usuário') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('users.update', ['user' => $user]) }}">
                            @csrf
                            @method('PUT')

                            <x-user-form-fields :user="$user" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
