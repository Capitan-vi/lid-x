  <?php if (!is_front_page()): ?>
      <section class="portfolio-line">

        <div class="wrapper">
          <div class="portfolio-line__box">
            <p class="portfolio-line__text">
              Наши клиенты считают магией наши результаты в AdWords и Директе.
            </p>
            <p class="portfolio-line__text">
              Мы знаем каждый винтик в механизме контекстной рекламы и используем приемы, до которых конкуренты еще не добрались.
            </p>
          </div>
        </div>

      </section>
  <?php endif ?>


<div id="js-entertainment" class="entertainment" >

    <div class="entertainment__wrapper">

      <div class="entertainment__col--1">
      <div class="entertainment__header">Мы строим эффективные кампании, которые обеспечивают стабильный поток клиентов</div>
        <object
           type="image/svg+xml"
           data="<?php  echo esc_url( get_template_directory_uri() )  ?>/blocks/add-clients/img/add-clients-house.svg">
        </object>

<!--         <div class="entertainment__item-wrapper">
          <div>
            <div class="entertainment__text-box">
              <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/blocks/portfolio-line/img/arrow.png" alt="arrow-blue">
              <p class="entertainment__text">
                Закончились клиенты?<br>Решите эту проблему с нами
              </p>
            </div>
          </div>

          <div class="entertainment__basket">
            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/blocks/portfolio-line/img/basket.png" alt="basket-blue">
          </div>
        </div>
 -->
<!--         <div class="entertainment__count-wrapper">

          <p class="entertainment__text--white">
            Перетаскивайте воронку, чтобы ловить клиентов!<br>Уворачивайтесь от скликеров!
          </p>

          <div class="entertainment__numbers">
            <div class="entertainment__numbers-item">
              <div class="entertainment__numbers-figure">0</div>
              <div class="entertainment__numbers-figcaption">продаж</div>
            </div>
            <div class="entertainment__numbers-item">
              <div class="entertainment__numbers-figure">40</div>
              <div class="entertainment__numbers-figcaption">бюджет</div>
            </div>
          </div>

        </div> -->

      </div>

      <div class="entertainment__col--2">
       <!--  <div class="half form"> -->
          <div class="form__wrapper">
            <h4 class="form__title">Я хочу больше клиентов из интернета. Не&nbsp;откажусь от бесплатной консультации </h4>
            <!--p class="form__example">Посмотрите пример стратегии</p-->

            <div id="main-form">
              <?php  echo do_shortcode('[contact-form-7 id="42" title="Form"]'); ?>

            </div>
          </div>
       <!--  </div> -->
      </div>

    </div>

    <div class="entertainment__lighter"></div>
    <div class="entertainment__darker"></div>

</div>