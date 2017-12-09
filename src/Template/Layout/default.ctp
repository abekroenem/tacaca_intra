<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Tacaca | <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('/vendor/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/vendor/font-awesome/css/font-awesome.min.css') ?>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


    <?= $this->Html->css('clean-blog.min.css') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
  <?php if($this->request->action != 'login'): ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="/"><i class="fa fa-home"></i> Início </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php if($user): ?>
                <li class="nav-item">
                  <a href="<?= $this->Url->build(['controller'=>'Post', 'action'=>'add']) ?>" class="nav-link">Escrever um post <i class="fa fa-book"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><?= $user['nome'] ?></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Usuario', 'action'=>'logout']) ?>">Logout <i class="fa fa-sign-in"></i></a>
                </li>
                <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Usuario', 'action'=>'login']) ?>">Login <i class="fa fa-sign-in"></i></a>
                  </li>
                <?php endif; ?>
            </ul>
          </div>
      </div>
    </nav>
    <?php endif; ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <hr>
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/abekroenem/tacaca_intra">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; www.tacaca.intra 2017</p>
          </div>
        </div>
      </div>
    </footer>
</body>
    <?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>
    <?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>

    <?= $this->Html->script('clean-blog.min.js') ?>

    <?= $this->fetch('script') ?>
</html>
