@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Usuário') }}</div>

                    <div class="card-body">
                        <x-user-form-fields :user="$user" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
