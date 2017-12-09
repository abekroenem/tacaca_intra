<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="text-center">           
                    <div class="site-heading">
                        <h2><i class="fa fa-cutlery " aria-hidden="true"></i> Tacaca Inc</h2>
                        <span class="subheading">Empreendimentos culinários</span>
                    </div>
                </div>
            <?= $this->Form->create('User');?>
                <div class="form-group floating-label-form-group controls">
                <label>E-mail</label>
                <input type="email" class="form-control" placeholder="Seu e-mail" name="email">
                <p class="help-block text-danger"></p>
                </div>
            
                <div class="form-group floating-label-form-group controls">
                <label>Senha</label>
                <input type="password" class="form-control" placeholder="senha" name="senha" required>
                <p class="help-block text-danger"></p>
                </div>
                <input type="hidden" name="_csrfToken" value='<?= $this->request->param('_csrfToken') ?>'>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <a href='/' class="btn btn-secondary">Voltar</a>
                </div>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>