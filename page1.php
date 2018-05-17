<html>
    <head>
        <meta charset="UTF-8">
        <!--Implantation Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!--Implantation CSS-->
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>

        <title></title>
    </head>

    <body>
        <div class="container">
            <header>

                <!--Haut de page--> 

                <div class='header'>
                    <div class="header-content">
                        <div class="logo-cesi">
                            <a class="cesi-site" href="https://www.cesi-alternance.fr/"><img id="logo-cesi" src="images/Sans titre.png" alt=""/></a>
                        </div>
                    </div>
                </div>

                <!--Creation MENU de NAGIVATION-->

                <ul class="nav-bar">

                    <li class="li-navbar"><a href='./index.php'>Accueil</a></li>
                    <li><a href='./page1.php'>Presentation</a></li>
                    <li>
                        <a href='./index.php'><img id="logicesi2" src="images/Logo Cesi 2.png" alt=""/></a> 
                    </li>
                    <li><a href='./page2.php'>Parcours</a></li>
                    <li><a href='./page3.php'>Contact</a></li>

                </ul>
                <div>
                    <div class="lebord">
                        <img src="images/bord.png" alt=""/>
                    </div>
                </div>

            </header>

            <div class="jumbotron">
                <h1 class="display-4">En quelques mots ...</h1>
                <p class="lead">Je m'appelle Sébastien HARIGNORDOQUY, j'ai 20 ans et je suis technicien informatique spécialisé dans les systèmes et réseaux. Passionné depuis petit par les nouvelles technologies et l'informatique, j'ai décidé d'allier ces deux passions pour les exercer professionnellement.
                    Je travaille actuellement chez EUSKAL INFORMATIKA, prestataire informatique situé à Saint Jean Pied de Port et à Mauléon en tant que Technicien Informatique.</p>
                <hr class="my-4">
                <h1 class="display-4">Mes competences</h1>
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Langues</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Gestion Système</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Programmation</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Base de données</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h5>Anglais :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                                </div>
                                <br>
                                <h5>Espagnol :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45%</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h5>Windows Client :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                                </div>
                                <br>
                                <h5>Windows Serveur :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                                </div>
                                <br>
                                <h5>Debian :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45%</div>
                                </div>
                                <br>
                                <h5>Linux Serveur :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45%</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <h5>HTML/CSS :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                                </div>
                                <br>
                                <h5>JAVA :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45%</div>
                                </div>
                                <br>
                                <h5>PHP :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                                </div>
                                <br>
                                <h5>Bootstrap :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <h5>MYSQL :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                                </div>
                                <br>
                                <h5>PHPMYADMIN :</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                                </div>
                                <br>                 
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">


            </div>

        </div>



        <!--Implémantation Bootstrap + javaScript-->
        <script src="monJS/monJS.js" type="text/javascript"></script>
        <!--<script src="monJS/bootstrap.js" type="text/javascript"></script>-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </div>
</body>
</html>