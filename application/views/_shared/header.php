<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="/assets/libraries/jquey-ui/jquery-ui.min.css" /> 
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css" /> 
        <link rel="stylesheet" href="/assets/css/main.css" />
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="logo-wrapper col-md-2">

                        <img src="/assets/img/logo.svg" alt="logo" />
                    </div>
                    <div class="mm-wrapper col-md-8">
                        <ul>
                        <?php
                            foreach ($links->result() as $row)
                            {
                                if($_SERVER['PATH_INFO'] == $row->href) {
                                    echo "<li class='col-md-3 active'><a href='/index.php".$row->href."'>".$row->name."</a></li>";
                                }else{
                                    echo "<li class='col-md-3'><a href='/index.php".$row->href."'>".$row->name."</a></li>";
                                }
                                    
                            }
                        ?>
                        </ul>
                    </div>
                    <div class="s-lang-wrapper col-md-2">
                        <form>
                            <select>
                                <option val="ru">RU</option>
                                <option val="en">EN</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="banner-wrapper">
            <div class="banner-inner container">
                <div class="banner-contacts">
                    <p><i class="fa fa-phone"></i>8-903-400-11-55</p>
                    <div>
                        <i class="fa fa-vk"></i>
                        <i class="fa fa-whatsapp"></i>
                        <i class="fa fa-instagram"></i>
                    </div>
                </div>
                <div class="banner-content">
                    <h1>Лучший кальян<br /> из нержавеющей стали</h1>
                    <h3>В полной комплектации по супер-цене: <b>8500 Р</b>!</h3>
                    <a href="#" class="btn btn-default">Заказать</a>
                </div>
            </div>
        </div>