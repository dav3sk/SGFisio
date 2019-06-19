{!! form_start($form) !!}

<div class="row col-md-offset-1">

    <div class="col-md-5">
        <div class="box box-primary">

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

    <div class="col-md-5">
        <div class="box box-primary">

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

    <div class="col-md-10">
        {!! form_widget($form->submit) !!}
    </div>
</div>
{!! form_end($form) !!}
