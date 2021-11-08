<link rel='stylesheet' href='../assets/styles/not_started_yet_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/not-started-yet-projects.js'></script>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Not Started Yet
    </p>
    <p class='main-title'>
        <i class='fas fa-pause-circle'></i> Not Started Yet
    </p>
</div>
<div class='not-started-yet-projects'>
    <div class='section-1'>
        <a
            id='l-1'
            class='iframe-link clicked-link'
            href='./projects/not-started-yet/details.php'
            target='iframe'
            onclick=ClickLink('l-1')
        >Project details</a>
        <a
            id='l-2'
            class='iframe-link'
            href='./projects/not-started-yet/create-project.php'
            target='iframe'
            onclick=ClickLink('l-2')
        >Create project</a>
    </div>
    <iframe
        name='iframe'
        class='section-2'
        src='./projects/not-started-yet/details.php'
    ></iframe>
</div>

<?php include('../components/footer.php'); ?>