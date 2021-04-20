<div class="container container-form-login ">
    <div class="row">
        <div class="col p-5 col-login-form shadow p-3 mb-5 bg-body rounded">

            <div class="text-center">
                <h2>Painel Administrativo</h2>
                <br />
            </div>

            <?php
                if(!empty($data['mensagem'])) {
                    foreach($data['mensagem'] as $m) {
                        echo '<div class="alert alert-danger" role="alert">' . $m . '</div>';
                    }
                }
            ?>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nós nunca iremos compartilhar seu email com ninguém.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="lembreme">
                    <label class="form-check-label" for="lembreme">Lembre-me</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" name="acessar" class="btn btn-primary">Acessar</button>
                </div>
            </form>
        </div>
    </div>
</div>