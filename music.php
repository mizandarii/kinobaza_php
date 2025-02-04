
<?php
$title = "Музыка";
include 'header.php';
?>

    <div class="wrapper">

        <div class="container">

            <div class="row">

                <div class="col-lg-9 col-lg-push-3"> 
                    
                    <form role="search" class="visible-xs">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <h2>Музыка для любого настроения</h2>
                    
                    <div class="margin-8"></div>

                          

                   
                    <h3>The Cat Empire - The Lost Song</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/vgc6W9SOSrg?si=a7Sd2AJ15aa2CvPM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                    <h3>Nina Simone - Ain't Got No... I Got Life</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/nFGg3VYMZtw?si=W1uECCBHCYnx3-Zm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                    <hr>
                        </div>

                    
                        <h3>Enya - Only Time</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9yD0KEi554c?si=5RmXDn9KVwvP-uLi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                          </div>
                    <div class="margin-8"></div>



                    <div class="margin-8 clear"></div>
                </div>

                <div class="col-lg-3 col-lg-pull-9">  <!--меняем блоки местами col-lg=pull-9-->
                    <div class="panel panel-info hidden-xs">
                        <div class="panel-heading"><div class="sidebar-header">Поиск</div></div>
                        <div class="panel-body">
                            <form role="search">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading"><div class="sidbar-header">Вход</div></div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Логин">
                                </div>
                                <div class="form-group">
                                    <input type="password" class=" form-control input-lg" placeholder="Пароль">
                                </div>

                                <button type="submit" class="btn btn-warning pull-right">Вход</button>
                            </form>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading"><div class="sidebar-header">Новости</div></div>
                        <div class="panel-body">
                            <p>31.02.2017</p>
                            <p>Мы запустили новый сервис</p>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading"><div class="sidebar-header">Лучшие серии</div></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item list-group-warning">
                                    <a href="s01e01.html">1 сезон 1 серия</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <a href="s03e55.html">3 сезон 55 серия</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <a href="s0341e.html">3 сезон 41 серия</a>
                                </li>
                                <li class="list-group-item list-group-warning">
                                    <a href="s03e52e.html">3 cезон 52 серия</a>
                                </li>

                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
            
        <div class="clear"></div>

        </div>
        
    </div>
    <footer>
        <div class="conteriner">
            <p class="text-center"><a href="https://www.kinopoisk.ru/">Кухня - вкусная комедия</a></p>
        </div>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>