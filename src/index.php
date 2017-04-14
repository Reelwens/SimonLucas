<?php
// Include php files
//include 'includes/config.php';
//include 'includes/handler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Simon LUCAS</title>
    <meta name="description" content="Etudiant passionné par le web, l'image et ce qui les entoure." />
    <link rel="icon" type="image/png" href="img/logo.png" sizes="64x64">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <section id="landing">
        <div class="container">

            <header id="header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">

                            <div class="col-sm-2 hidden-xs"> <!-- Left header -->
                                <a href="#"><img src="img/logo.svg" alt="Logo Simon Lucas" width="40"></a>
                            </div> <!-- End left header -->

                            <div class="col-sm-10 col-xs-12 text-right"> <!-- Right header -->
                                <nav>
                                    <div class="menu text-center">
                                        <a href="#projects">Mes projets</a>
                                        <div class="underline"></div>
                                    </div>
                                    <div class="menu text-center">
                                        <a href="#skills">Compétences</a>
                                        <div class="underline"></div>
                                    </div>
                                </nav>
                            </div> <!-- End right header -->

                        </div>
                    </div>
                </div>
            </header>

            <div class="centerElement text-center"> <!-- Center landing -->
                <h1>Simon <span>LUCAS</span></h1>
                <!--<a href="http://hetic.net/" target="_BLANK">--><h2 id="catchPhrase">Passionné par <span>le web</span>, <span>l'image</span> et ce qui les entoure.</h2><!--</a>-->
            </div> <!-- End center landing -->
            
            <div class="arrow">
                <a href="#projects"><img src="img/down-arrow.svg" alt="Flèche" width="64"></a>
            </div>

        </div> <!-- End container -->
    </section>
    
    <section id="projects">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="title text-center">
                        <h2>Mes projets</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="sortBlock text-center">
                        <form action="#" method="post">
                                <input type="hidden" name="type" value="orderSkills"> <!-- PHP post information -->

                                <span class="sortText">Trier par :</span>

                                <select name="orderSkills" class="order">
                                    <option value="name" selected>Nom</option>
                                    <option value="favorite">Préférences</option>
                                    <option value="date">Date (récent)</option>
                                </select>
                                <input type="submit" name="valid" value="✓" class="valid">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="projectList">
                <div class="row">

                    <div class="col-md-12">
                        <div class="projectBlock">
                            <div class="row">
                                <div class="col-lg-6 fix">
                                    <img src="img/project1.png" alt="Un projet">
                                </div>
                                <div class="col-lg-6">
                                    <div class="mainInfo text-center">
                                        <h3>Nom du projet</h3>
                                        <div class="separator"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus, voluptatum quia suscipit. Beatae quibusdam consequuntur, veritatis expedita, necessitatibus provident perspiciatis eligendi odit quia eius tenetur, quis voluptatum, sunt iste.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam dolor recusandae cumque cum rerum quisquam id quas suscipit!</p>
                                    </div>
                                    <div class="more">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="dataInfo">
                                                    <p>Temps passé : 1 semaine</p>
                                                    <p>Date : 10 janvier 2017</p>
                                                    <p>Compétences : PHP, CSS, After Effect, Photoshop</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="links">
                                                    <a href="#"><img src="img/github-logo.svg" alt="GitHub"></a>
                                                    <a href="#"><img src="img/external-link-symbol.svg" alt="External link"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>
    
    <section id="skills">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="title text-center">
                        <h2>Compétences</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="sortBlock text-center">
                        <form action="#" method="post">
                                <input type="hidden" name="type" value="orderSkills"> <!-- PHP post information -->

                                <span class="sortText">Trier par :</span>

                                <select name="orderSkills" class="order">
                                    <option value="name" selected>Nom</option>
                                    <option value="favorite">Préférences</option>
                                    <option value="date">Date (récent)</option>
                                </select>
                                <input type="submit" name="valid" value="✓" class="valid">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="skillList">
                <div class="row">

                    <div class="col-md-3">
                        <div class="skillBlock text-center">
                            <img src="img/php.png" alt="PHP">
                            <h3>PHP</h3>
                            <div class="separator"></div>
                            <p>J’ai réalisé le PHP de différents sites internet, allant de la gestion de base de donnée à la manipulation d’APIs</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


<!-- Information div -->
<div class="informationDiv">J'étudie à HETIC, proposant une formation sur 5 années</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/script.js" charset="utf-8"></script>

</body>
</html>