<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Cadastro de Pessoas</h2>
        </div>
    </div>

    <form method="POST" action="gravar">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="mt-1">Nome: </label>
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Profissão: </label>
                    <input type="text" class="form-control" name="profissao">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Idade: </label>
                    <input type="text" class="form-control" name="idade">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </div>
        </div>
    </form>
</div>