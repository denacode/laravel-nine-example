@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info text-white">{{ __('Estudos') }}</div>
                    <table class="table table-hovered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Data</th>
                                <th class="text-center">Ações</Th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studies as $study)
                                <tr>
                                    <td>{{ $study->id }}</td>
                                    <td>{{ $study->name }}</td>
                                    <td>{{ date_format($study->date, 'd/m/Y h24:mi') }}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div class="col-4 text-center">
                                                <a href='{{ route('studies.edit', ['study' => $study]) }}''>
                                                                            <i class="bi bi-pencil text-info"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-4 text-center" role="button" id="deleteButton">
                                                                        <i class="bi bi-dash-circle text-danger" onclick="deleteStudy({{ $study }});"></i>
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

                        <form action="{{ route('studies.delete') }}" method="post" id="delete-form">
                            @csrf
                            @method(' DELETE') <input type="hidden" name="study_id" id="study_id" value="">
                                                    </form>

                                                    <script>
                                                        function deleteStudy(study) {
                                                            if (confirm('Você tem certeza que deseja excluir o estudo ' + study.name + '?')) {
                                                                const input = document.getElementById('study_id');

                                                                input.value = study.id;

                                                                document.getElementById('delete-form').submit();
                                                            }
                                                        }
                                                    </script>
                                                @endsection
