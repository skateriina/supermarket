<?php 
include "header.php"; 
?>
    <main>
        <div class="conteiner">
            <div class="kontakt">
                <div class="kontakt_cart">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae3bd36e2a71fd627a7a4a6eeed947edb4089c3b66763faab5fa7fd64b69ab129&amp;width=827&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="kontakt_inf">
                    <h1>Контакты</h1>
                    <div class="kontakt_inf_new">
                        <img src="img/phone.png" alt="">
                        <p>Контакты:   8-(985)-255-43-34 </p>
                    </div>
                    <div class="kontakt_inf_new">
                        <img src="img/placeholder.png" alt="">
                        <p>Адрес:   г. Москва, ул. Арбат, д.21 </p>
                        <img id="open-modal-btn" src="img/mod&.png" alt="">
                    </div>
                    <div class="kontakt_inf_new">
                        <img src="img/email.png" alt="">
                        <p>E-mail:  @sv.com </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div >
            <hr class="line">
        </div>
        <div class="conteiner">
            <div class="foot">
                <div class="foot_top">
                    <div class="foot_logo">
                        <img src="img/logo1.png" alt="">
                    </div>
                    <div class="foot_kt">
                        <p> <a href="catalog.html">Каталог</a></p>
                        <p> <a href="catalog.html">Личный кабинет</a></p>
                    </div>
                    <div class="foot_inf">
                        <p>Контакты: 8-(985)-255-43-34</p>
                        <p>Адрес:  г. Москва, ул. Арбат, д.21 </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="conteiner">
        <div class="modal" id="my-modal">
            <div class="modal-box">
                <button class="close-modal" id="close-my-modal-btn">
                    <img src="img/close.png" alt="">
                </button>
                <h2>Как добраться до нас на метро:</h2>
                <p>Ближайшая станция метро — «Воробьёвы горы».На Лужнецкую набережную — северный вестибюль станции «Воробьёвы горы».</p>
            </div>
        </div>
    </div>
    <script defer src="js/index.js"></script>
</body>
</html>