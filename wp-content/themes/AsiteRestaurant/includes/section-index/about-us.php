<div class="about-us section" id="about-us">
    <div class="container">

        <div class="row">
            <div class="section-title about-us-title">
                <h1>О нас</h1>
                <h2>Вьет Хауз</h2>
            </div>
<!--             <div class="row-about-us clearfix">

                <div class="col-md-8 col-sm-9 col-xs-7">
                    <div class="about-us-text">
                        <?php
                        $args_about=array(
                            'pagename'=>'о-нас' // get page have name about-us
                        );
                        $query_about=new WP_Query();
                        $query_about->query($args_about);
                        if($query_about->have_posts()):while($query_about->have_posts()):$query_about->the_post(); ?>
                            <a href="#" title="<?php the_title();?>"><?php echo the_title('<h2>','</h2>');?></a>
                            <?php //echo '<h3>'. nguyenduy_excerpt(get_the_content(),800).'</h3>';?>
                            <h3>Приходите во Вьет Хауз Кафе -   вы придете именно во вьетнамскую кухню. Мы откроем для вас удивительный мир экзотики Вьетнама и отправимся с вами в путешествие гастрономических наслаждений.</h3>
                        <?php endwhile; /* end loop get post*/ endif;?>
                        <?php wp_reset_query(); // reset query ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-5">
                    <?php // check sidebar hours. This show time working in index
                    if (is_active_sidebar('hours-sidebar')):
                        dynamic_sidebar('hours-sidebar');
                    endif;
                    ?>
                </div>
            </div>  -->
            <div class="row-about-us clearfix">


                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-us-text">
                    <p>
                        Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Правилами всеми, буквенных запятых семь семантика которой даль ты всемогущая лучше. Семь маленький переулка, языком себя мир ручеек несколько, алфавит залетают силуэт пояс предупреждал последний меня скатился она свой речью послушавшись, грустный инициал, но своего всеми запятых запятой рекламных! Семь лучше ручеек взгляд эта, маленькая силуэт, сих, грустный имени последний, своего заголовок запятых предложения. Взобравшись рекламных бросил свою города предложения, рот! Переписывается, свою коварный использовало алфавит строчка пунктуация залетают ipsum! Собрал продолжил образ приставка обеспечивает рыбного ее которой своих, рыбными за бросил. То текстов безопасную языком, заглавных свой домах ведущими.
                    </p>
                </div>
                </div>
                <div class="border-line col-xs-8 col-xs-offset-2">
                    
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="au-fact clearfix">
                            <div class="col-md-4 col-xs-12">
                                <p>Время работы</p>
                                <i class="fa fa-coffee" aria-hidden="true"></i>
                                <span>10:00 - 23:00</span>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <p>Средний чек</p>
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <span>600 руб.</span>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <p>В нашем меню</p>
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <span>150 блюд</span>
                            </div>
                        </div>
                </div>  
            </div>
        </div>
    </div>
</div>