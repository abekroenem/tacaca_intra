<?php $this->assign('title', 'Início') ?>
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
            <i class="fa fa-cutlery fa-5x" aria-hidden="true"></i>
            <h1>Tacaca Inc</h1>
            <span class="subheading">Empreendimentos culinários</span>
        </div>
        </div>
    </div>
    </div>
</header>
<div class="container clearfix">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach ($post as $post): ?>
            <div class="post-preview">
                <a href="<?= $this->Url->build(['action' => 'view', $post->id]) ?>">
                    <h2 class="post-title">
                        <?= h($post->titulo) ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?= h(substr($post->descricao, 0, rand(80, 100))) ?> ...
                    </h3>
                </a>
                <p class="post-meta">Escrito por
                    <a href="#"> <?= $post->usuario->nome ?> [<?= $post->usuario->email ?>] </a>
                    em <?= h($post->created->format('d M y H:i')) ?></p>
                </div>
                <hr>
            <?php endforeach; ?>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="/?page=<?= $this->Paginator->current() + 1?>">Posts antigos &rarr;</a>
            </div>
        </div>
    </div>
</div>