<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Cadastro de Motos</h2>
        </div>
    </div>

    <form method="POST" action="gravar">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="mt-1">Modelo: </label>
                    <input type="text" class="form-control" name="nome"
                    value="<?= isset($pessoa['nome']) ? $pessoa['nome'] : "" ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Marca: </label>
                    <input type="text" class="form-control" name="profissao"
                    value="<?= isset($pessoa['profissao']) ? $pessoa['profissao'] : "" ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Cor: </label>
                    <input type="text" class="form-control" name="idade"
                    value="<?= isset($pessoa['idade']) ? $pessoa['idade'] : "" ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Placa: </label>
                    <input type="text" class="form-control" name="idade"
                    value="<?= isset($pessoa['idade']) ? $pessoa['idade'] : "" ?>">
                </div>
            </div>
        </div>
    </div>
        <input type="hidden" name="id"
        value="<?= isset($pessoa['id']) ? $pessoa['id'] : "" ?>">
        <div class="row">
            <div class="col-6 offset-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </div>
        </div>
    </form>
</div>