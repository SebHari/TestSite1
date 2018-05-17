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
                        
                        <li class="li-navbar"><a href='/index.php'>Accueil</a></li>
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
        
        <section id="page">
            
            <div class="container" id="accueil">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./images/monsite.png" alt="DEVIS">
                    </div>
                    <div class="carousel-item">
                        <a href="./images/CV.pdf" download><img class="d-block w-100" src="./images/cv.jpg" alt="Second slide"></a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            </div>  

           
        
           
            
            
            
        </section>
        </div>
        <!--Implémantation Bootstrap + javaScript-->
            <script src="monJS/monJS.js" type="text/javascript"></script>
            <!--<script src="monJS/bootstrap.js" type="text/javascript"></script>-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    </body>
</html>
