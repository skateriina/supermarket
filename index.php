<?php 
include "header.php"; 
?>
    <main>
        <div class="conteiner">
            <div class="slider">
                <div class="item">
                    <div class="slider_left">
                        <div class="slider_left_cnopka">
                            <a class="previous" onclick="previousSlide()">&#10094;</a>
                        </div>
                        <div >
                            <h1>Время любимых, сладких ягод</h1>
                            <p>Начни лето по-свежему</p>
                            <img src="img/logowh.png" alt="">
                        </div>
                    </div>
                    <div class="slider_right">
                        <img src="img/gl_ph.png" alt="">
                        <a class="next" onclick="nextSlide()">&#10095;</a>
                    </div>
                </div>
                <div class="item">
                    <div class="slider_left">
                        <div  class="slider_left_cnopka">
                            <a class="previous" onclick="previousSlide()">&#10094;</a>
                        </div>
                       <div>
                            <h1>День рожднния магазина</h1>
                            <p>Приглашаем 5 июля</p> 
                       <img src="img/logowh.png" alt="">
                       </div>
                    </div>
                    <div class="slider_right">
                        <img src="img/happy.png" alt="">
                        <a class="next" onclick="nextSlide()">&#10095;</a>
                    </div>
                </div>
                <div class="item">
                    <div class="slider_left">
                        <div class="slider_left_cnopka">
                            <a class="previous" onclick="previousSlide()">&#10094;</a>
                        </div>
                        <div>
                            <h1>Объединяем пользу и вкус</h1>
                            <p>Начни лето по-свежему</p> 
                            <img src="img/logowh.png" alt="">
                        </div>
                    </div>
                    <div class="slider_right">         
                        <img src="img/frukt.png" alt="">
                        <a class="next" onclick="nextSlide()">&#10095;</a>
                    </div>
                </div>
                <div class="arrow_mobile">
                    <a class="previous_mobile" onclick="previousSlide()">&#10094;</a>
                    <a class="next_mobile" onclick="nextSlide()">&#10095;</a>
                </div>
                
            </div>
            <script>
                let slideIndex = 1;
        /* Вызываем функцию, которая реализована ниже: */
                showSlides(slideIndex);
        
        /* Увеличиваем индекс на 1 — показываем следующий слайд: */
                function nextSlide() {
                   showSlides(slideIndex += 1);
                }
        
        /* Уменьшаем индекс на 1 — показываем предыдущий слайд: */
                function previousSlide() {
                   showSlides(slideIndex -= 1);  
                }
        
        /* Устанавливаем текущий слайд: */
                function currentSlide(n) {
                   showSlides(slideIndex = n);
                }
        
        /* Функция перелистывания: */
                function showSlides(n) {
            /* Обращаемся к элементам с названием класса "item", то есть к картинкам: */
                   let slides = document.getElementsByClassName("item");
            
            /* Проверяем количество слайдов: */
                    if (n > slides.length) {
                       slideIndex = 1
                    }
                    if (n < 1) {
                       slideIndex = slides.length
                    }
          
            /* Проходим по каждому слайду в цикле for: */
                    for (let slide of slides) {
                       slide.style.display = "none";
                    }
            /* Делаем элемент блочным: */
                    slides[slideIndex - 1].style.display = "flex";    
                }
            </script>
        </div>
        <div class="conteiner">
            <div class="info">
                <div class="text">
                    <div class="text_h1">
                        <h1>
                            ОТКРЫТИЕ
                        </h1>
                        <h1>
                            5 ИЮЛЯ
                        </h1>
                    </div>
                    <div class="text_logo">
                        <p>Мы ждем именно тебя!</p>
                        <img src="img/logowh.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="conteiner">
            <div class="cards">
                <div class="cards_card">
                    <div class="cards_card__top">
                        <img src="img/grech.png" alt="">
                        <hr class="card_line">
                    </div>
                    <div class="cards_card_bottom__top">
                        <p>1 шт</p>
                        <p>Гречневая крупа</p>
                        <p>100 р</p>
                        
                    </div>
                </div>
                <div class="cards_card">
                    <div class="card_top">
                        <img src="img/selderey.jpg" alt="">
                        <hr class="card_line">
                    </div>
                    <div class="cards_card_bottom__top">
                        <p>1 шт</p>
                        <p>Сельдерей</p>
                        <p>150 р</p>
                        
                    </div>
                </div>
                <div class="cards_card">
                    <div class="card_top">
                        <img src="img/prsik.jpg" alt="">
                        <hr class="card_line">
                    </div>
                    <div class="cards_card_bottom__top">
                        <p>1 кг</p>
                        <p>Персики</p>
                        <p>350 р</p>
                       
                    </div>
                </div>
                <div class="cards_card">
                    <div class="card_top">
                        <img src="img/svinina.jpg" alt="">
                        <hr class="card_line">
                    </div>
                    <div class="cards_card_bottom__top">
                        <p>1 кг</p>
                        <p>Свинина</p>
                        <p>450 р</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="conteiner">
            <div class="gs_cart">
                <img src="img/cart.png" alt="">
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
                        <p>Каталог</p>
                        <p>Личный кабинет</p>
                    </div>
                    <div class="foot_inf">
                        <p>Контакты: 8-(985)-255-43-34</p>
                        <p>Адрес:  г. Москва, ул. Арбат, д.21 </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>