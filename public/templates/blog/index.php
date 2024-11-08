<html>
<head>
	<title>Мой блог</title>
	<link rel="stylesheet" href="../../static/css/blog.css"  media="all">
    <script defer src="../../static/js/topfix.js"></script> 
    
</head>
<body>
    <div class="top">
       <div class="wrap">
            <header class="header">
                <div class="logo">
                    <a href="/public/templates/blog"><img class="logoof" src="../../media/image/2023/download.png"></a>
                </div>
                <nav class="main-nav">
                    <ul id="menu-menu" class="menu">
                        <li><a class="links" style="color: #7bda00;">Главная</a></li>
                        <li onmouseover="season()" onmouseleave="seasonHide()">
                            <a class="links" >Выбрать сезон <img src="../../static/icons/down.svg"></a>
                            <ul class="sub-menu" >
                                <li><a class="sub-links"> 1 сезон</a></li>
                                <li><a class="sub-links"> 2 сезон</a></li>
                            </ul>
                        </li>
                        <li><a class="links">Новости</a></li>
                    </ul>
                </nav> 
            </header> 
        </div> 
    </div>
    <div itemscope itemtype="https://schema.org/TVSeries" style="height: 120%;">
        <div class="home_top_bg">
            <div class="bg-1" style="background: #070606 no-repeat center / cover;opacity: 0.35;"></div>
            <div class="wrap">
                <div class="home_top">
                    <h1 class="home_top_t">Локи  <span class="watch">смотреть онлайн</span></h1>
                    <div itemprop="description" class="home_top_e">
                        <p>
                            <strong>«Локи»</strong> — захватывающий сериал Marvel, вращающийся вокруг озорного асгардского бога Локи, которого играет Том Хиддлстон.
                            История берет свое начало из событий «Мстителей: Финал», где версия Локи 2012 года сбегает с Тессерактом во время ограбления.
                        </p>
                    </div>
                </div>
                <div class="videos">
                    <h2 itemprop="name"><span>1 серия</span> 1 сезона</h2>
                    <div class="tabs">
                        <ul class="ui-tabs" role="tablist" >
                            <li class="change-audio" role="tab" tabindex="0">
                                <a id="active">LostFilm</a>
                            </li>
                            <li class="change-audio" role="tab" tabindex="1">
                                <a>Субтитры</a>
                            </li>
                            <li class="change-audio" role="tab" tabindex="2">
                                <a>Дубляж(Укр)</a>
                            </li>
                            <li class="change-audio" role="tab" tabindex="3">
                                <a>Плеер 2</a>
                            </li>
                        </ul>
                        <div class="video">
                            <?php
                            require '../../../config/db.php';
                    
                            $sql = "SELECT wayto FROM vids WHERE season = 1 and serie = 1"; // Укажите нужный ID видео
                            $result = $conn->query($sql);
                    
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $video_url = $row['wayto'];
                                echo '<video width="1200px" height="420px" controls="controls" src="' . $video_url . '" type="video/mp4"></video>';
                            } else {
                                echo "Видео не найдено.";
                            }
                    
                            $conn->close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://gencit.info/player/public/bundle.min.js?v=399" type="text/javascript"></script>
</body>
</html>
