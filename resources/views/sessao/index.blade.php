@extends('adminlte::page')

@section('title', 'Sessões')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Sessões</h1>
@stop

@section('content')
    <div class="box box-success">
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Data</th>
                        <th class="text-center">Horário</th>
                        <th class="text-center">Atendimento Id</th>
                        <th class="text-center">Plantonista Id</th>
                        <th class="text-center">Evolução</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sessao as $sessao)
                        <tr class="text-center">
                            <td>{{ $sessao->id }}</td>
                            <td>{{ $sessao->data }}</td>
                            <td>{{ $sessao->horario }}</td>
                            <td>{{ $sessao->atendimento_id }}</td>
                            <td>{{ $sessao->plantonista_id }}</td>
                            <td>{{ $sessao->evolucao }}</td>
                            <td>
                                <a class="btn btn-xs" href="{{ route('sessoes.show', $sessao->id) }}">
                                    <i class="fa fa-eye" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs" href="{{ route('sessoes.edit', $sessao->id) }}">
                                    <i class="fa fa-edit" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs sessoes-destroy" data-id="{{ $sessao->id }}">
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
        $('.sessoes-destroy').on('click', function () {
            var sessaoId = $(this).data('id');

            swal("Confirma a exclusão da sessão?", {
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
                            url: '{{ route('sessoes.destroy', '_user') }}'.replace('_user', sessaoId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Sessão deletada", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                console.log(xhr);
                                swal("Falha!", "Sessão não pôde ser excluída", "error");
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
