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
                                <a class="btn btn-xs" href="{{ route('pacientes.show', $paciente->id) }}">
                                    <i class="fa fa-eye" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs" href="{{ route('pacientes.edit', $paciente->id) }}">
                                    <i class="fa fa-edit" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs paciente-destroy" data-id="{{ $paciente->id }}">
                                    <i class="fa fa-trash" style="font-size: 20px;"></i>
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
