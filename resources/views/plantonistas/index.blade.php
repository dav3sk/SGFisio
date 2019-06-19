@extends('adminlte::page')

@section('title', 'Plantonistas')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Plantonistas</h1>
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
                        <th class="text-center">Crefito </th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plantonistas as $plantonista)
                        <tr class="text-center">
                            <td>{{ $plantonista->id }}</td>
                            <td>{{ $plantonista->nome }}</td>
                            <td>{{ $plantonista->cpf }}</td>
                            <td>{{ $plantonista->crefito }} </td>
                            <td>
                                <a class="btn btn-xs" href="{{ route('plantonistas.show', $plantonista->id) }}">
                                    <i class="fa fa-eye" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs" href="{{ route('plantonistas.edit', $plantonista->id) }}">
                                    <i class="fa fa-edit" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs plantonista-destroy" data-id="{{ $plantonista->id }}">
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

            swal("Confirma a exclusão do plantonista?", {
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
                            url: '{{ route('plantonistas.destroy', '_user') }}'.replace('_user', plantonistaId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Plantonista deletado", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                console.log(xhr);
                                swal("Falha!", "Plantonista não pôde ser excluído", "error");
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
