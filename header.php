<?php
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav role="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1><a href="index.php">Кухня</a></h1>
                                <p>Вкусная комедия</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
                    <ul class="nav nav-pills">
                        <li class="<?php echo $title == 'Главная' ? 'active' : ''; ?>">
                            <a href="index.php">Главная</a>
                        </li>
                        <li class="<?php echo $title == 'Персонажи' ? 'active' : ''; ?>">
                            <a href="characters.php">Персонажи</a>
                        </li>
                        <li class="<?php echo $title == 'Серии' ? 'active' : ''; ?>">
                            <a href="episodes.php">Серии</a>
                        </li>
                        <li class="<?php echo $title == 'Музыка' ? 'active' : ''; ?>">
                            <a href="music.php">Музыка</a>
                        </li>
                        <li class="<?php echo $title == 'Ролики' ? 'active' : ''; ?>">
                            <a href="videos.php">Ролики</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
