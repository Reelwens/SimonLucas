<?php
session_start();
// Include php files
include 'includes/config.php';
include 'includes/handler.php';

// Define default session orders if empty
$_SESSION['orderProjects'] = (isset($_SESSION['orderProjects'])) ? $_SESSION['orderProjects'] : 'preference';
$_SESSION['orderSkills'] = (isset($_SESSION['orderSkills'])) ? $_SESSION['orderSkills'] : 'preference';


// Fetch all projects
if (($_SESSION['orderProjects']) == ('date')) {
    $query = $pdo->query('SELECT * FROM `projects` ORDER BY `projects`.`'.$_SESSION['orderProjects'].'` DESC');
}
else {
    $query = $pdo->query('SELECT * FROM `projects` ORDER BY `projects`.`'.$_SESSION['orderProjects'].'` ASC');
}
$projects = $query->fetchAll();

// Fetch all skills
if (($_SESSION['orderSkills']) == ('date')) {
    $query = $pdo->query('SELECT * FROM `skills` ORDER BY `skills`.`'.$_SESSION['orderSkills'].'` DESC');
}
else {
    $query = $pdo->query('SELECT * FROM `skills` ORDER BY `skills`.`'.$_SESSION['orderSkills'].'` ASC');
}
$skills = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
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
                                    <div class="menu text-center">
                                        <a href="#contact">Me contacter</a>
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
                                <input type="hidden" name="type" value="orderProjects"> <!-- PHP post information -->

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
            </div>
            
            <div class="projectList">
                <div class="row">

                    <?php foreach($projects as $_project): ?> <!-- For each item, display an element -->
                    <div class="col-md-12">
                        <div class="projectBlock">
                            <div class="row">
                                <div class="col-lg-6 fix">
                                    <img src="img/<?=$_project->picture ?>" alt="<?=$_project->name ?>" data-action="zoom">
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
                                                    <?php if(($_project->github) != '#') { ?><a href="<?=$_project->github ?>"><img src="img/github-logo.svg" alt="GitHub"></a><?php } ?>
                                                    <?php if(($_project->github) != '#') { ?><a href="<?=$_project->link ?>"><img src="img/external-link-symbol.svg" alt="External link"></a><?php } ?>
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
                                    <option value="name"       <?php if($_SESSION['orderSkills'] == 'name' )       echo 'selected="selected"' ?>>Nom</option>
                                    <option value="preference" <?php if($_SESSION['orderSkills'] == 'preference' ) echo 'selected="selected"' ?>>Préférences</option>
                                    <option value="date"       <?php if($_SESSION['orderSkills'] == 'date' )       echo 'selected="selected"' ?>>Date (récent)</option>
                                </select>
                                <input type="submit" name="valid" value="✓" class="valid">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="skillList">
                <div class="row">

                    <?php foreach($skills as $_skill): ?>
                    <div class="col-md-3">
                        <div class="skillBlock text-center">
                            <img src="img/<?=$_skill->picture ?>" alt="<?=$_skill->name ?>">
                            <h3><?=$_skill->name ?></h3>
                            <div class="separator"></div>
                            <p><?=$_skill->description ?></p>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </section>
    
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
                            <a href="https://www.linkedin.com/in/simonlucas1/" target="_BLANK"><img src="img/linkedin-logo.svg" alt="LinkedIn"></a>
                            <a href="https://github.com/Reelwens/" target="_BLANK"><img src="img/github-logo.svg" alt="GitHub"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="#">Conditions Générales d'Utilisation</a></p>
                </div>
            </div>
        </div>
    </footer>


<!-- Information div -->
<div class="informationDiv">J'étudie à HETIC, proposant une formation sur 5 années</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/script.js" charset="utf-8"></script>

</body>
</html>