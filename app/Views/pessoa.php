<div class="container-fluid">

    <h1 class="mt-3"> <?= $title ?> </h1>

    <table class="table">
        <tr>
            <td>Nome:</td>
            <td>Profissão</td>
            <td>Idade</td>
        </tr>
        <?php

        foreach ($pessoas as $pessoa_item) {
        ?>
            <tr>
                <td><?= $pessoa_item['nome']  ?></td>
                <td><?= $pessoa_item['profissao']  ?></td>
                <td><?= $pessoa_item['idade']  ?></td>
            </tr>

        <?php
        }

        ?>

    </table>
</div>