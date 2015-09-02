<section class="portfolio-cases">

    <div class="wrapper">
    	<h2 class="portfolio-cases__title">Лучше всего наши результаты покажут цифры</h2>
    
    	<!-- portfolio-cases__korpus-->
    	<div class="portfolio-cases__korpus">
    	
    		<input type="radio" name="odin" checked="checked" id="vkl1"/>
    		<label class="portfolio-cases__korpus-tab" for="vkl1">Кратко</label>
    
    		<input type="radio" name="odin" id="vkl2"/>
    		<label class="portfolio-cases__korpus-tab" for="vkl2">Подробно</label>
    
    		<input type="radio" name="odin" id="vkl3"/>
    		<label class="portfolio-cases__korpus-tab" for="vkl3">Презентация</label>
    
    		<span class="portfolio-cases__helper">
    			<span>Переключайтесь между режимами, чтобы увидеть больше подробностей</span>
    		</span>
    
    		<!-- portfolio-cases__short-->
    		<div class="portfolio-cases__short">
    
    		  	<?php query_posts('post_type=case'); ?>
    		  		<?php while ( have_posts() ) : the_post(); ?>
    
    		  		<div class="case__wrap">
    		  			<div class="case__main">
    		  				<div class="case__img-wrap"><img src="<?php the_field("case_logo"); ?>" alt=""></div>
    			  			<div class="case__info mb-hidden"><?php the_field("case_name"); ?></div>
    		  			</div>
    
    		  			<div class="case__descr">
    		  				<?php if(get_field('case_numbers')): 
    				  		while(has_sub_field('case_numbers')): ?>
    
    				  		<div class="case__number-info">
    				  		<div class="case__number <?php
                                  $arrow =  get_sub_field('arrow');
                                  if ($arrow == "arrow--up"):
                                  echo "case__number--up";
                                  elseif ($arrow == "arrow--down"):
                                  echo "case__number--down";
                                  endif 
                                ?>"><?php the_sub_field("case_number"); ?></div>
    				  			<div >
    				  				<?php the_sub_field("description"); ?>
    				  			</div>
    				  		</div>
    				  		
    				  		<?php endwhile; endif; ?> <!--end case_numbers repeater-->
    		  				
    		  			</div>
    			  		
    			  	</div>
    		  	
    		  		<?php endwhile; ?>
    		  	<?php wp_reset_query(); ?>
    
    		</div>
    		<!-- END  portfolio-cases__short-->
    
    
    		<!-- portfolio-cases__full -->
    		<div class="portfolio-cases__full">
    			<?php query_posts('post_type=case'); ?>
    				<?php while ( have_posts() ) : the_post(); ?>
    
    				<div class="case__wrap">
    					<div class="case__head">
    						<div class="case__img-wrap"><img src="<?php the_field("case_logo"); ?>" alt=""></div>
    			  		<div class="case__info"><?php the_field("case_name"); ?></div>
    
    			  		<?php if(get_field('case_numbers')): 
    			  		while(has_sub_field('case_numbers')): ?>
    
    			  		<div class="case__number-info">
    			  			<div class="case__number"><?php the_sub_field('case_number'); ?></div>
    			  			<p>
    			  				<?php the_sub_field("description"); ?>
    			  			</p>
    			  		</div>
    			  		
    			  		<?php endwhile; endif; ?> <!--end case_numbers repeater-->
    			  		
    					</div>
    					<div class="case__additional-info">
    						<div class="case__part--left">
    							<div class="case__history">
    								<h4>История работы</h4>
    								<?php the_field("case_history"); ?>
    							</div>
    							<div class="case__used">
    								<h4>Мы использовали</h4>
    
    								<?php if(get_field('case_used')): 
    								while(has_sub_field('case_used')): ?>
    
    								<div class="case__used-img">
    									<img src="<?php the_sub_field('img'); ?>" alt="">
    								</div>
    								
    								<?php endwhile; endif; ?> <!--end case_used repeater-->
    								
    							</div>
    						</div>
    						<div class="case__part--right">
    							<div class="case__respond">
    								<h4>Отзыв</h4>
    								<blockquote>
    									<?php the_field("case_review"); ?>
    								</blockquote>
    								<p class="case__respond-company"><?php the_field("review_person"); ?></p>
    								<? if (get_field('recomendation')): ?>
    								<a href="<?php the_field("recomendation"); ?>" class="btn btn-6"><img src="<?php the_field("recomendation"); ?>" class="case__respond-img" alt="">Показать письмо</a>
    							<? else: ?><? endif; ?>
    								
    							</div>
    						</div>
    					</div>
    					
    				</div>
    
    				<?php endwhile; ?>
    			<?php wp_reset_query(); ?>			
    
    		</div>
    		<!-- END  portfolio-cases__full -->
    
    
    		<!-- portfolio-cases__presentation -->
    		<div class="portfolio-cases__presentation">
    
    			<div class="portfolio-cases__presentation-wrap">
    				<p>Скачайте нашу презентацию со всеми работами из портфолио,</br>чтобы изучить ее не торопясь и даже без доступа к Интернету</p>
    				<a href="http://lid-x.ru/files/lid-x-best.pdf" class="btn btn-3" target="_blank">Скачать презентацию</a>
    			</div>
    
    		</div>
    		<!-- END portfolio-cases__presentation -->
    
    
    	</div>
    	<!-- END portfolio-cases__korpus-->
    	
    	
    	<div class="portfolio-cases__portfolio-link-container">
    	    <a href="./portfolio" class="portfolio-cases__portfolio-link">Смотреть портфолио</a>
    	</div>
    
    </div>

</section>
