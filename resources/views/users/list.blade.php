@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <div class="row no-gutters align-items-center justify-content-between">
                            <div class="col-auto me-auto">
                                {{ __('Users') }}
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-outline-success" href="{{ route('studies.create') }}">
                                    <i class="bi bi-plus"></i>
                                    Incluir
                                </a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hovered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th class="text-center">Cadastro</th>
                                <th class="text-center">Actions</Th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">{{ date_format($user->created_at, 'd/m/Y') }}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div class="col-4 text-center">
                                                <a href='{{ route('users.edit', ['user' => $user]) }}''>
                                                                                                                <i class="bi bi-pencil text-info"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <div class="col-4 text-center" role="button" id="deleteButton">
                                                                                                            <i class="bi bi-dash-circle text-danger" onclick="deleteUser({{ $user }});"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
    @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <form action="{{ route('users.delete') }}" method="post" id="delete-form">
                                                                @csrf
                                                                @method(' DELETE') <input type="hidden" name="user_id"
                                                    id="user_id" value="">
                                                    </form>

                                                    <script>
                                                        function deleteUser(user) {
                                                            if (confirm('Você tem certeza que deseja excluir o usuário ' + user.name + '?')) {
                                                                const input = document.getElementById('user_id');

                                                                input.value = user.id;

                                                                document.getElementById('delete-form').submit();
                                                            }
                                                        }
                                                    </script>
                                                @endsection
