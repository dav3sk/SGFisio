@extends('adminlte::page')

@section('title', 'Guias')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Guias</h1>
@stop

@section('content')
    <div class="box box-success">
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Paciente</th>
                        <th class="text-center">Prioridade</th>
                        <th class="text-center">Data de Emissão</th>
                        <th class="text-center">Diagnostico</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guias as $guia)
                        <tr class="text-center">
                            <td>{{ $guia->id }}</td>
                            @if ($guia->paciente != NULL)
                                <td>{{ $guia->paciente()->get('nome') }}</td>
                            @else
                                <td>-</td>
                            @endif
                            <td>{{ $guia->prioridade }}</td>
                            <td>{{ $guia->data_emissao }}</td>
                            <td>{{ $guia->diagnostico }}</td>
                            <td>
                                <a class="btn btn-xs" href="{{ route('guias.show', $guia->id) }}">
                                    <i class="fa fa-eye" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs" href="{{ route('guias.edit', $guia->id) }}">
                                    <i class="fa fa-edit" style="font-size: 20px;"></i>
                                </a>
                                <a class="btn btn-xs guia-destroy" data-id="{{ $guia->id }}">
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
        $('.guia-destroy').on('click', function () {
            var guiaId = $(this).data('id');

            swal("Confirma a exclusão do guia?", {
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
                            url: '{{ route('guias.destroy', '_user') }}'.replace('_user', guiaId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Guia deletada", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                console.log(xhr);
                                swal("Falha!", "Guia não pôde ser excluída", "error");
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
