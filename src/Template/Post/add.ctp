<?php $this->assign('title', 'Escrever Post') ?>
<header class="masthead" style="background-image: url('/img/post-add.jpg')">
    <div class="overlay"></div>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
            <h3>Escreva um post para a intranet da Tacaca</h3>
        </div>
        </div>
    </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form action='<?= $this->Url->build(['action'=>'add']) ?>' method='POST'>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                <label>Título</label>
                <input type="text" class="form-control" placeholder="Título" name="titulo" required data-validation-required-message="Seu post precisa de um título">
                <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                <label>Conteúdo</label>
                <textarea rows="5" class="form-control" placeholder="Conteúdo" name='descricao' required data-validation-required-message="Seu post precisa de um conteúdo"></textarea>
                <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                <label>Link para imagem</label>
                <input type="text" class="form-control" placeholder="image:link" name="imagem" required data-validation-required-message="Seu post precisa de um link para uma imagem">
                <p class="help-block text-danger"></p>
                </div>
            </div>
            <input type="hidden" name="usuario_id" value='<?= $user['id'] ?>'>
            <input type="hidden" name="_csrfToken" value='<?= $this->request->param('_csrfToken') ?>'>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Postar</button>
            </div>
            </form>
        </div>
    </div>
</div>
