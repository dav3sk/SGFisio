<style>
    .button-voltar {
        border-radius: 4px;
        background-color: hidden;
        border: none;
        text-align: center;
        font-size: 20px;
        transition: all 0.5s;
        cursor: pointer;
    }

    .button-voltar span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button-voltar span:after {
        content: 'Voltar';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button-voltar:hover span {
        padding-right: 65px;
    }

    .button-voltar:hover span:after {
        opacity: 1;
        right: 0;
    }
</style>

<div class="box box-success">
    <div class="box-body">
        <a class="btn btn-xs btn-voltar" href="{{ route($rota) }}">
            <button class='button-voltar'>
                <span>
                    <i class="fa fa-arrow-left" style="font-size: 20px; color: grey;"></i>
                </span>
            </button>
        </a>
</div>
