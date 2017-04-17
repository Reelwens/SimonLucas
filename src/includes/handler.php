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