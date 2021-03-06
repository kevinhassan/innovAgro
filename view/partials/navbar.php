<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">Naïade</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="/">Accueil</a>
                </li>
                <li class="page-scroll">
                    <a href="#cartographie">Cartographie</a>
                </li>
                <li class="page-scroll">
                    <a href="#partenaire">Ils nous soutiennent !</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Nous contacter</a>
                </li>
                <?php
                  if(is_null($_COOKIE["token"])){
                    echo '<li class="page-scroll">
                            <a href="/view/login.php">Se connecter</a>
                          </li>';
                  }else{
                    echo '<li class="page-scroll">
                            <a href="/controller/login.controller.php">Se Déconnecter</a>
                          </li>';
                  }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
