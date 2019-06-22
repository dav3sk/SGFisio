{!! form_start($form) !!}
    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações da Sessão</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="form-group">
                            {!! form_label($form->data_hora) !!}
                            {!! form_widget($form->data_hora) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->evolucao) !!}
                            {!! form_widget($form->evolucao) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->atendimento_id) !!}
                            {!! form_widget($form->atendimento_id) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->plantonista_id) !!}
                            {!! form_widget($form->plantonista_id) !!}
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
