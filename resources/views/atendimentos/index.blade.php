@extends('adminlte::page')

@section('title', 'Atendimentos')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Atendimentos</h1>
@stop

@section('content')
    <div class="box box-success">
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">ID da Guia</th>
                        <th class="text-center">CID</th>
                        <th class="text-center">Tipo de Atendimento</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($atendimentos as $atendimento)
                        <tr class="text-center">
                            <td>{{ $atendimento->id }}</td>
                            <td>{{ $atendimento->guia_id }}</td>
                            <td>{{ $atendimento->CID }}</td>
                            <td>{{ $atendimento->tipo_atendimento }}</td>
                            <td>
                                <a class="btn btn-xs" href="{{ route('atendimentos.show', $atendimento->id) }}">
                                    <i class="fa fa-eye" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs" href="{{ route('atendimentos.edit', $atendimento->id) }}">
                                    <i class="fa fa-edit" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs atendimento-destroy" data-id="{{ $atendimento->id }}">
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
        $('.atendimento-destroy').on('click', function () {
            var atendimentoId = $(this).data('id');

            swal("Confirma a exclusão do atendimento?", {
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
                            url: '{{ route('atendimentos.destroy', '_user') }}'.replace('_user', atendimentoId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Atendimento deletado", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                console.log(xhr);
                                swal("Falha!", "Atendimento não pôde ser excluído", "error");
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
