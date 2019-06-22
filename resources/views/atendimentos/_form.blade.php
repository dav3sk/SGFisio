{!! form_start($form) !!}
    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                            <h3 class="box-title">Guia referente</h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                {!! form_label($form->guia_id) !!}
                                {!! form_widget($form->guia_id) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações do atendimento</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            {!! form_label($form->CID) !!}
                            {!! form_widget($form->CID) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->tipo_atendimento) !!}
                            {!! form_widget($form->tipo_atendimento) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->quantidade_sessoes) !!}
                            {!! form_widget($form->quantidade_sessoes) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->inicio) !!}
                            {!! form_widget($form->inicio) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->fim) !!}
                            {!! form_widget($form->fim) !!}
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
