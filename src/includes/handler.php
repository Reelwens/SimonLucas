<?php
// Instructions when post request
if(!empty($_POST)) {
    
    // If the user use the 'orderProjects' post form
    if($_POST['type'] == 'orderProjects') {
        $_SESSION['orderProjects'] = $_POST['orderProjects']; // Keep the choice in the session
    }
    
    // If the user use the 'orderSkills' post form
    if($_POST['type'] == 'orderSkills') {
        $_SESSION['orderSkills'] = $_POST['orderSkills']; // Keep the choice in the session
    }
}


// Define default session orders if empty
$_SESSION['orderProjects'] = (isset($_SESSION['orderProjects'])) ? $_SESSION['orderProjects'] : 'preference';
$_SESSION['orderSkills'] = (isset($_SESSION['orderSkills'])) ? $_SESSION['orderSkills'] : 'theme';


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