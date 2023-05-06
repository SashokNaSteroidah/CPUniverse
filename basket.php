<?php require_once "header.php"; ?>

<main>
    <section class="bas_page1">
        <article>
            <h1>Корзина</h1>
        </article>
            <article class="input_bas">
                <div data-id="1" class="item">
                    <img src="img/image_prev_ui%201.png" alt="">
                    <h2>Intel i9-9909k</h2>
                    <h3>40000р</h3>
                    <label>
                        <input data-id="add1" id="count_items_minus minus" type="button" class="but_num" value="-">
                        <p data-id="add1" style="margin: 0 20px" id="count_items_add1">1</p>
                        <input data-id="add1" id="count_items_plus plus" type="button" class="but_num" value="+">
                    </label>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L15 15" stroke="white"/>
                        <path d="M1 15L15 1" stroke="white"/>
                    </svg>
                </div>
                <div id="item1" data-id="2" class="item">
                    <img src="img/image_prev_ui%201.png" alt="">
                    <h2>asdasdasdasdasdasdasdasdqweqweqeqwe</h2>
                    <h3 id="add2_price" data-id="add2">12122р</h3>
                    <label>
                        <input data-id="add2" id="count_items_minus" class="but_num minus" type="button" value="-">
                        <p  style="margin: 0 20px" id="count_items_add2">1</p>
                        <input data-id="add2" id="count_items_plus" type="button" class="but_num plus" value="+">
                    </label>
                    <svg class="cross1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L15 15" stroke="white"/>
                        <path d="M1 15L15 1" stroke="white"/>
                    </svg>
                </div>
                <label for="">
                    <input value="Оплатить" type="button">
                </label>
            </article>
    </section>

</main>

<script src="js/basket.js"></script>


<?php require_once "footer.php"; ?>
