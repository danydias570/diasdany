<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../assets/images/me.jpg" type="svg">
    <meta name="description" content="Dany Dias · Développeur web freelance à Metz. Design, développement et intégration de sites web sur mesure.">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="PojkLbAiaCs5K9r2_gWwJbhFj6BrnuJUQfGlbp2IOJ4"/>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../pages/home/styles.css">
    <title>dany dias · développeur web</title>
</head>
<body>
    <div class="window">
        <div class="logo corner">
            <h1>dany dias</h1>
        </div>
        <a class="folder paper about" href="/about">
            <img src="/assets/images/computer.png" alt="folder">
            <span class="info">à propos</span>
        </a>
        <a class="folder paper projects" href="/projects">
            <img src="/assets/images/folder.png" alt="folder">
            <span class="info">projets</span>
        </a>
        <!-- <a class="folder paper other-things" href="/poetry">
            <img src="/assets/images/folder.png" alt="folder">
            <span class="info">poésie</span>
        </a> -->
        <a class="folder paper contact" href="/contact">
            <img src="/assets/images/folder.png" alt="folder">
            <span class="info">contact</span>
        </a>
        <div class="me modal-trigger"></div>
    </div>
    <div class="modal-container">
        <div class="overlay modal-trigger"></div>
        <img class="modal" src="../assets/images/me.jpg" alt="me again">
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="../pages/home/app.js"></script>
</script>
</body>
</html>