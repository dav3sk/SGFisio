{!! form_start($form) !!}
    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações Pessoais</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="form-group">
                            {!! form_label($form->nome) !!}
                            {!! form_widget($form->nome) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->cpf) !!}
                            {!! form_widget($form->cpf) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->data_nascimento) !!}
                            {!! form_widget($form->data_nascimento) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->sexo) !!}
                            {!! form_widget($form->sexo) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->telefone) !!}
                            {!! form_widget($form->telefone) !!}
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">

                    <div class="box-header with-border">
                        <h3 class="box-title">Endereço</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            {!! form_label($form->cidade) !!}
                            {!! form_widget($form->cidade) !!}
                        </div>

                        <div class="form-group">
                            {!! form_label($form->estado) !!}
                            {!! form_widget($form->estado) !!}
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
