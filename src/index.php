<?php
session_start();
// Include php files
include 'includes/config.php';
include 'includes/handler.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Simon LUCAS — Développeur front-end créatif & entrepreneur</title>
    <meta name="description" content="Passionné par le web, l'image et ce qui les entoure. Je me forme dans le développement web et le design à HETIC. Découvrez mes projets et compétences." />
    <link rel="icon" type="image/png" href="img/logo.png" sizes="64x64">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Simon LUCAS">
    <meta name="twitter:description" content="Développeur front-end créatif & entrepreneur.">
    <meta name="twitter:creator" content="@Reelwens">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="https://www.simonlucas.fr/i/screen.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Simon LUCAS" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.simonlucas.fr/" />
    <meta property="og:image" content="https://www.simonlucas.fr/i/screen.png" />
    <meta property="og:description" content="Développeur front-end créatif & entrepreneur." />
    <meta property="og:site_name" content="Simon LUCAS" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500, 600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    //Analytics
    include_once("includes/analyticstracking.php")
    ?>

    <!-- Landing section -->
    <section id="landing">
        <div class="container">

            <header id="header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">

                            <div class="col-sm-2 col-xs-12 logo"> <!-- Left header -->
                                <div class="groupLogo">
                                    <img id="logo" src="img/logo_l.svg" alt="Logo Simon Lucas" width="56">
                                <div class="square"></div>
                                </div>
                            </div> <!-- End left header -->

                            <div class="col-sm-10 col-xs-12 text-right rightHeader"> <!-- Right header -->
                                <nav>
                                    <div class="menu text-center">
                                        <a href="#projects" title="Liste des projets">Mes projets</a>
                                        <div class="underline"></div>
                                    </div>
                                    <div class="menu text-center">
                                        <a href="#skills" title="Liste des compétences">Compétences</a>
                                        <div class="underline"></div>
                                    </div>
                                    <div class="menu text-center hidden-xs">
                                        <a href="#contact" title="Possibilités de contact">Me contacter</a>
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
                <!--<a href="http://hetic.net/" target="_blank">--><h2 id="catchPhrase">Développeur <span>front-end</span> créatif & <span>entrepreneur</span>.</h2><!--</a>-->
            </div> <!-- End center landing -->

            <a class="scroll" href="#projects">
                <p>Scroll</p>
                <div class="scrollAnimation"></div>
            </a>

        </div>
    </section>

    <!-- Projects section -->
    <section id="projects">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="title text-center">
                        <h2>Mes projets</h2>
                        <p>Cliquez sur les images pour les agrandir.</p>
                    </div>
                </div>
            </div>

            <!--<div class="row">
                <div class="col-sm-12">
                    <div class="sortBlock text-center">
                        <form action="#projects" method="post">
                                <input type="hidden" name="type" value="orderProjects">

                                <span class="sortText">Trier par :</span>

                                <select name="orderProjects" class="order">
                                    <option value="name"       <?php if($_SESSION['orderProjects'] == 'name' )       echo 'selected="selected"' ?>>Nom</option>
                                    <option value="preference" <?php if($_SESSION['orderProjects'] == 'preference' ) echo 'selected="selected"' ?>>Préférences</option>
                                    <option value="date"       <?php if($_SESSION['orderProjects'] == 'date' )       echo 'selected="selected"' ?>>Date (récent)</option>
                                </select>
                                <input type="submit" name="valid" value="✓" class="valid">
                        </form>
                    </div>
                </div>
            </div>-->

            <div class="projectList">
                <div class="row">

                    <!-- Display each project -->
                    <?php foreach($projects as $_project): ?>
                    <div class="col-md-12">
                        <div class="projectBlock">
                            <div class="row">
                                <div class="col-lg-6 fix">
                                    <img src="img/projects/<?=$_project->picture ?>" alt="<?=$_project->name ?>" class="projectImg" data-action="zoom" data-original="img/projects/hd/<?=$_project->picture ?>">
                                </div>
                                <div class="col-lg-6">
                                    <div class="mainInfo text-center">
                                        <h3><?=$_project->name ?></h3>
                                        <div class="separator"></div>
                                        <p><?=$_project->description ?></p>
                                    </div>
                                    <div class="more">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="dataInfo">
                                                    <p>Temps passé : <?=$_project->time ?></p>
                                                    <p>Date : <?=$_project->creation_date ?></p>
                                                    <p>Compétences : <?=$_project->skills ?></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="links text-right">
                                                    <?php if(($_project->github) != '#') { ?><a href="<?=$_project->github ?>" target="_blank" title="Lien GitHub"><img src="img/github-logo.svg" alt="GitHub"></a><?php } ?>
                                                    <?php if(($_project->link) != '#') { ?><a href="<?=$_project->link ?>" target="_blank" title="Lien externe"><img src="img/external-link-symbol.svg" alt="External link"></a><?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>

        </div>
    </section>

    <!-- Skills section -->
    <section id="skills">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="title text-center">
                        <h2>Compétences</h2>
                    </div>
                </div>
            </div>

            <!--<div class="row">
                <div class="col-sm-12">
                    <div class="sortBlock text-center">
                        <form action="#skills" method="post">
                                <input type="hidden" name="type" value="orderSkills">

                                <span class="sortText">Trier par :</span>

                                <select name="orderSkills" class="order">
                                    <option value="theme" <?php if($_SESSION['orderSkills'] == 'theme' ) echo 'selected="selected"' ?>>Catégories</option>
                                    <option value="name"       <?php if($_SESSION['orderSkills'] == 'name' )       echo 'selected="selected"' ?>>Nom</option>
                                    <option value="preference" <?php if($_SESSION['orderSkills'] == 'preference' ) echo 'selected="selected"' ?>>Préférences</option>
                                </select>
                                <input type="submit" name="valid" value="✓" class="valid">
                        </form>
                    </div>
                </div>
            </div>-->

            <div class="skillList">
                <div class="row">

                    <!-- Display each skill -->
                    <?php foreach($skills as $_skill): ?>
                    <div class="col-lg-3 col-md-4">
                        <div class="skillBlock text-center">
                            <img src="img/skills/<?=$_skill->picture ?>" alt="<?=$_skill->name ?>">
                            <h3><?=$_skill->name ?></h3>
                            <div class="separator"></div>
                            <p><?=$_skill->rating ?></p>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section id="contact">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="title text-center">
                        <h2>Me contacter</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="contactBlock text-center">
                        <p>Mail : <span>contact@simonlucas.fr</span></p>
                        <div class="icon">
                            <a href="http://bit.ly/2pDvPUp" target="_blank" title="Accéder à mon GitHub"><img src="img/github-logo.svg" alt="GitHub"></a>
                            <a href="http://bit.ly/2pgZh2G" target="_blank" title="Accéder à mon LinkedIn"><img src="img/linkedin-logo.svg" alt="LinkedIn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <a href="javascript:" id="return-to-top" class="hidden-md hidden-sm hidden-xs" title="Revenir en haut de la page"><i class="icon-chevron-up"></i></a>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="cgu.php" title="Accéder aux conditions générales d'utilisation">Conditions Générales d'Utilisation</a></p>
                </div>
            </div>
        </div>
    </footer>

<!-- Optional CSS -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script src="js/script.js" charset="utf-8"></script>

</body>
</html>
