{!! form_start($form) !!}
    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                    <div class="box box-success" style="border: 1px solid #d2d6de;">
                        <div class="box-header with-border">
                            <h3 class="box-title">Paciente vinculado</h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                {!! form_label($form->paciente_id) !!}
                                {!! form_widget($form->paciente_id) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações da Guia</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            {!! form_label($form->data_emissao) !!}
                            {!! form_widget($form->data_emissao) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->diagnostico) !!}
                            {!! form_widget($form->diagnostico) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->prioridade) !!}
                            {!! form_widget($form->prioridade) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="padding-bottom: 10px;">
                {!! form_widget($form->submit) !!}
            </div>
        </tbody>
    </table>
{!! form_end($form) !!}
