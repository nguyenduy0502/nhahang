<div class="about-us section" id="section1" data-anchor="about-us">
    <div class="container">

        <div class="row">
            <?php
            $arr = array(
                'pagename' => 'о-нас' // get page by slug
            );
            $query = new WP_Query();
            $query->query($arr);
            ?>
            <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
            <div class="section-title about-us-title">
                <h1>О нас</h1>
               <a href="<?php the_permalink();?>" title="<?php the_title();?>"> <?php the_title('<h2>', '</h2>'); ?></a>
            </div>
            <div class="row-about-us clearfix">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="about-us-text">
                            <p> Вьет Хауз более традиционная и строгая в выборе ингредиентов и специй. Вьетнамская кухня
                                характерна использованием риса, рыбного соуса, соевого соуса,свежей зелени, экзотических
                                фруктов и овощей . Наиболее распространенными видами мяса во Вьетнаме являются свинина и
                                говядина, а из морепродуктов креветки и крабы. Вьетнамские рецепты включают широкий
                                выбор зелени, в том числе лимонное сорго, мята, вьетнамскую мята, листья кориандры и
                                базилики и как раз благодаря всем этими ингредиентами, блюда становятся очень
                                ароматными, полезными и вкусными.<br/>
                                Один преимущество нашего ресторана это наше местоположение. Мы расположены на :
                                <strong>ул.Покровка, 14/2, стр 1</strong> От метро Чистые пруды 700 метров , от метро Китай - Город 800
                                метров . Одном из самых центральных и красивых улиц Москвы, что сделает ваше посещение в
                                наш ресторан более удобным и приятным. Вьетнамская кухня в центре Москвы.
                               </p>
                        </div>
                    </div>
                <?php endwhile; // end loop get post
                endif; ?>
                <?php wp_reset_query();?>
                <div class="border-line col-xs-8 col-xs-offset-2">

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <?php if(is_active_sidebar('hours-sidebar')):?>
                    <?php dynamic_sidebar('hours-sidebar');?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>