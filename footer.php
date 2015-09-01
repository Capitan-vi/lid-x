	<footer class="footer">
		<div class="wrapper">
			<div class="footer-line-1">
				<a href="tel:+78129306319" rel="nofollow" class="phone-number phone-number--footer">+7 812 930-63-19</a>
					<a href="/" class="page__logo">
						<img src="<?php  bloginfo("template_directory"); ?>/img/footer-logo.png" alt="">
					</a>
				<nav>
					<?php wp_nav_menu('primary'); ?>
				</nav>
			</div>

		</div>

	</footer>

	<div class="contact-form js-contact-form-popup" id="js-send-message-form" style="display: none;">
		<form action="thanks.html">
			<p class="contact-form-text-inputs-title">Отправить сообщение</p>
			<input type="text" class="contact-form-your-name" placeholder="Вас зовут">
			<textarea class="contact-form-your-message" placeholder="Ваше сообщение"></textarea>
			<input type="submit" class="btn btn-1" value="Отправить сообщение">
		</form>
	</div>

	<script src='<?php  bloginfo("template_directory"); ?>/js/scrollReveal.js'></script>
	<script src="<?php  bloginfo("template_directory"); ?>/js/vendor.js"></script>
    <script src="<?php  bloginfo("template_directory"); ?>/js/main.js"></script>


  	<script>

  		if ( window.innerWidth > 767 ) {

	  		//раздаем время появления клиентам
			var comp = document.getElementsByClassName('our-clients-company');
			if (comp) {
				for (var i = comp.length - 1; i >= 0; i--) {
					comp[i].setAttribute('data-scroll-reveal','after ' + (0.4 + i*0.1) +'s move 0');
				};
			}

	  		 // The starting defaults.
	    	var config = {
	            after: '0s',
	            enter: 'bottom',
	            move: '20px',
	            over: '0.5s',
	            easing: 'ease-in-out',
	            viewportFactor: 0.33,
	            reset: true,
	            init: true

	        };

			window.scrollReveal = new scrollReveal(config);

		}

	</script>


	<script>
		$(document).ready(function(){
			$(".hided-form input[type=submit]").addClass("btn");
		});
	</script>

	<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31207656 = new Ya.Metrika({
                    id:31207656,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31207656" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</body>
</html>