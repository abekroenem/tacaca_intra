<?php $this->assign('title', $post->titulo) ?>
<header class="masthead" style="background-image: url('<?= $post->imagem ?>')">
    <div class="overlay"></div>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h4><?= $post->titulo ?></h4>
                <span class="meta">Escrito por <?= $post->usuario->nome ?> [<?= $post->usuario->email ?>] em <?= h($post->created->format('d M y H:i')) ?></span>
            </div>
        </div>
    </div>
    </div>
</header>
<article>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <p><?= $post->descricao ?></p>
    </div>
  </div>
</div>
</article>
