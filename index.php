<!DOCTYPE html>
<html>
	<head>
        <meta  charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="script/script.js<?php echo '?' . hash_file('adler32', 'script/script.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css<?php echo '?' . hash_file('adler32', 'style.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab" rel="stylesheet"> 
    </head>
    <body>
        <header class="container-fluid">
            <div class="container">
                <div class="logo picture"></div>
            </div>
        </header>
        <main  class="container-fluid">
            <div class="container flex">
                <div class="home mini-container flex">
                    <div class="border2 box">
                        <div class="logo-container one">
                            <div class="logo picture"></div>
                            <div class="bg"></div>
                        </div>
                            <div class="text-container">
                                <p>
                                   Хочешь густого дыма? <br>
                                   <b>Закажи кальян!</b><br>
                                   Доставим в <b>любую</b> точку города<br>
                                   Что входит? <br>
                                   Кальян MATTPEAR, чаша, колодка + 8 углей и табак в подарок! <br>
                                   <b>Стоимость аренды на сутки: 1500₽</b> <br>

                                   <b>Заказать:</b><br>
                                   <a href="tel:  8 (912) 806-79-66">8 (912) 806-79-66</a> / <a href="tel: 8 (999) 587-62-85">8 (999) 587-62-85</a> 
                                </p>
                                <a href="https://www.instagram.com/loft_139/?hl=ru" target="_blank"><div class="insta picture"></div></a>
                            </div>
                    </div>
                    <p>Выезд на дом</p>
                </div>
                <div class="outsourcing mini-container flex">
                    <div class="border2 box">
                        <div class="logo-container two">
                            <div class="logo picture"></div>
                            <div class="bg"></div>
                        </div>
                        <div class="text-container">
                            <p>
                                <b>Мы разбавим ваше мероприятие дымными забивками!</b><br>
                                Наши ребята порадуют вас отличным сервисом и вкусными кальянами<br>
                                <b>Стоимость выезда от 3’000₽</b><br>
                                <b>Заказать:</b><br>
                                <a href="tel: 8 (912) 806-79-66">8 (912) 806-79-66</a> / <a href="tel: 8 (999) 587-62-85">8 (999) 587-62-85</a>
                            </p>
                            <a href="https://www.instagram.com/loft_139/?hl=ru" target="_blank"><div class="insta picture"></div></a>
                        </div>
                    </div>
                    <p>Выезд на мероприятия</p>
                </div>
            </div>
        </main>
        <footer  class="container-fluid">
            <div class="container flex">
                <div class="column-1">
                    <span>© <?php echo $_SERVER['SERVER_NAME']; echo " "; echo date('Y');?></span>
                </div>
                <div class="column-2">
                    <span>developer:<br><a href="tg://resolve?domain=uhomuho" traget="_blank">@uhomuho</a></span>
                </div>
                <div class="column-3">
                    <a href="https://www.instagram.com/loft_139/?hl=ru" target="_blank"><div class="insta picture"></div></a>
                </div>
            </div>
        </footer>
        <div class="popup-container flex" data-popup="popup-1" id="popup">
            <div class="popup-content flex">
                <h2>Тебе уже исполнилось 18 лет?</h2>
                <div class="answers">
                    <div class="yes" data-popup-close="popup-1">
                        <span>Да</span>
                    </div>
                    <div class="no">
                        <a href="javascript:history.back()">Нет</a>
                    </div>
                </div>
            </div>
        </div>
     </body>
</html>