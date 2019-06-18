@extends('adminlte::page')

@section('title', 'Pacientes')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Pacientes</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <div class="pull-right">
                <a class="btn btn-xs btn-primary" href="{{ route('pacientes.create') }}">Cadastrar paciente</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">CPF</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                        <tr class="text-center">
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nome }}</td>
                            <td>{{ $paciente->cpf }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('pacientes.show', $paciente->id) }}">
                                    Visualizar
                                </a>
                                <a class="btn btn-xs btn-warning" href="{{ route('pacientes.edit', $paciente->id) }}">
                                    Editar
                                </a>
                                <a class="btn btn-xs btn-danger paciente-destroy" data-id="{{ $paciente->id }}">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.paciente-destroy').on('click', function () {
            var pacienteId = $(this).data('id');

            swal("Confirma a exclusão do paciente?", {
                buttons: {
                    cancel: "Cancelar",
                    catch: {
                        text: "Confirmar",
                        value: "confirm",
                    },
                },
            })
            .then((value) => {
                switch (value) {
                    case "confirm":
                        $.ajax({
                            url: '{{ route('pacientes.destroy', '_user') }}'.replace('_user', pacienteId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Paciente deletado", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                swal("Falha!", "Paciente não pôde ser excluído", "error");
                            }
                        });
                        break;
                    default:
                        swal("Operação cancelada!");
                }
            });
        })
    </script>
@endsection
