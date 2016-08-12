<div class="new-food section" id="section2" data-anchor="new-food">
<div class="new-food-content">
            <div class="section-title">
                <h1>Наши</h1>
                <h2>Новые Блюды</h2>
            </div>
<!--     <div class="container">
        <div class="row">
            <div class="section-title food-title">
                <h1>Новые Блюда</h1>
            </div>
        </div>
        <div class="row">
            <div class=" owl-carousel">
                <?php $query = new WP_Query(array('post_type' => 'food', 'orderby' => 'rand')); ?>
                <?php if ($query->have_posts()):while ($query->have_posts()):$query->the_post(); ?>
                    <?php if (has_post_thumbnail()): // check has post thumbnails ?>
                        <div class="item">
                            <a href="#"><img src="<?php the_post_thumbnail_url('medium'); ?>"
                                             alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                             echo ' - ';
                                             bloginfo('name'); ?>" title="<?php the_title(); ?>"></a>
                            <h5><?php the_title() ?></h5>
                        </div>
                    <?php else: ?>
                        <div class="item">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img
                                    src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg'; ?>"
                                    alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                    echo ' - ';
                                    bloginfo('name'); ?>" title="<?php the_title(); ?>""></a>
                            <h5><?php the_title() ?></h5>
                        </div>
                    <?php endif; // end check?>

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
            <div class="row">
                <div class=" owl-carousel">
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/130/130/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/134/131/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/137/131/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/138/133/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/139/134/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/132/135/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" owl-carousel">
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/130/130/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/131/136/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/132/137/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/130/138/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/130/139/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                    <div class="item">
                        <a href="#"><img src="http://lorempixel.com/135/135/food" alt=""></a>
                        <h5>foodname</h5>
                    </div>
                </div>
            </div>
    </div> -->
<!--     <div class=" owl-carousel">
        <div class="item">
            <div class="item-image">
                <img src="http://www.france-surgery.com/wp-content/uploads/2015/07/restaurant-food-01.jpg" alt="">
            </div>
            <div id="backshape">
              <div class="wrapper">
                <div class="item-text">
                    Далеко-далеко за словесными горами в стране.
                </div>
              </div>
            </div>
        </div>
        <div class="item">
            <div class="item-image">
                <img src="http://topreviewtracking.com/wp-content/uploads/2015/04/Dollarphotoclub_61600915.jpg" alt="">
            </div>
            <div id="backshape">
              <div class="wrapper">
                <div class="item-text">
                    Далеко-далеко за словесными горами в стране.
                </div>
              </div>
            </div>
        </div>
    </div> -->
<!--      <div class=" owl-carousel">
            <div class="item">
               <strong class="new">new</strong> 
                  <a href="https://www.freshdesignweb.com/">
                    <h3>2 for $20</h3>
                    <p> 1 Appetizer + 2 Entrees = Just $20</p>
                    <img src="images/1.jpg" alt="2 for 20" height="164" width="283">
                 </a>
            </div>
            <div class="item">
               <strong class="new">new</strong>
               <a href="https://www.freshdesignweb.com/">
                    <h3>Appetizers</h3>
                    <p> Start a meal off right with your favorite from our menu of signature appetizers. Can't choose just one? You don't have</p>
                    <img src="images/2.jpg" alt="" height="164" width="283">
                </a>
            </div>
            <div class="item">
                <strong class="new">new</strong>
               <a href="https://www.freshdesignweb.com/">
                    <h3>Pick 'N Pair Lunches</h3>
                    <p> Make your own lunch combo with soups, salads, sandwiches &amp; more.</p>
                    <img src="images/3.jpg" alt="Alternate" height="164" width="283">
               </a>
            </div>
            <div class="item">
               <a href="https://www.freshdesignweb.com/">
                    <h3> Entrees &amp; Main Dishes</h3>
                    <p>Our menu opens up a world of choices, loaded with flavor. From juicy steaks and succulent seafood, to saucy ribs and  burgers.</p>
                    <img src="images/4.jpg" alt="" height="164" width="283">
               </a>
            </div>
            <div class="item">
              <a href="https://www.freshdesignweb.com/">
                    <h3>Sizzdivng Entrees</h3>
                    <p> Fresh flavor never sounded so good.</p>
                    <img src="images/5.jpg" alt="" height="164" width="283">
              </a>
            </div>
            <div class="item">
               <a href="https://www.freshdesignweb.com/">
                    <h3> Freshburgers &amp; Sandwiches</h3>
                    <p> From mouthwatering Freshburgers to big and tasty Sandwiches, we've got the flavors to satisfy your cravings.</p>
                    <img src="images/6.jpg" alt="Alternate" height="164" width="283">
               </a>
            </div>
            <div class="item">
              <a href="https://www.freshdesignweb.com/">
                    <h3>Salads</h3>
                    <p>Fresh &amp; Dedivcious</p>
                    <img src="images/7.jpg" alt="Alternate" height="164" width="283">
              </a>
            </div>
            <div class="item">
               <a href="https://www.freshdesignweb.com/">
                    <h3> Weight Watchers</h3>
                    <p>Dedivcious Entrées endorsed by Weight Watchers. Eating Right Never Tasted So Good.</p>
                    <img src="images/8.jpg" alt="Alternate" height="164" width="283">
                </a>
            </div>
            <div class="item">
               <a href="https://www.freshdesignweb.com/">
                    <h3>Under 550 Calories</h3>
                    <p> Big Flavor. Big Portions. Big Value. All Under 550 Calories.</p>
                    <img src="images/9.jpg" alt="Alternate" height="164" width="283">
               </a>
            </div>
    </div> -->
    <div class=" owl-carousel">
        <div class="item">
            <div class="item-info arrow-right ">
                <div class="item-info-mid">
                    <p class="it-name">Фо Бо Га.</p>
                    <p class="it-price">150 p.</p>
                    <p class="it-desc">Бо, Га, говядина, Лапша, Лук и др.</p>
                </div>
            </div>
            <div class="item-image">
                <img src="http://lifeinresort.com/stalislife/wp-content/uploads/sites/7/2014/06/st07.jpg" alt="">
            </div>
        </div>
        <div class="item">
            <div class="item-info">
                <div class="item-info-mid">
                    <p class="it-name">Фо Бо Га.</p>
                    <p class="it-price">150 p.</p>
                    <p class="it-desc">Бо, Га, говядина, Лапша, Лук и др.</p>
                </div>
            </div>
            <div class="item-image">
                <img src="http://lifeinresort.com/stalislife/wp-content/uploads/sites/7/2014/06/st07.jpg" alt="">
            </div>
        </div>
        <div class="item">
            <div class="item-info">
                <div class="item-info-mid">
                    <p class="it-name">Фо Бо Га.</p>
                    <p class="it-price">150 p.</p>
                    <p class="it-desc">Бо, Га, говядина, Лапша, Лук и др.</p>
                </div>
            </div>
            <div class="item-image">
                <img src="http://lifeinresort.com/stalislife/wp-content/uploads/sites/7/2014/06/st07.jpg" alt="">
            </div>
        </div>
    </div>
    <div class=" owl-carousel">
        <div class="item">
            <div class="item-info">
                <div class="item-info-mid">
                    <p class="it-name">Фо Бо Га.</p>
                    <p class="it-price">150 p.</p>
                    <p class="it-desc">Бо, Га, говядина, Лапша, Лук и др.</p>
                </div>
            </div>
            <div class="item-image">
                <img src="http://lifeinresort.com/stalislife/wp-content/uploads/sites/7/2014/06/st07.jpg" alt="">
            </div>
        </div>
        <div class="item">
            <div class="item-info">
                <div class="item-info-mid">
                    <p class="it-name">Фо Бо Га.</p>
                    <p class="it-price">150 p.</p>
                    <p class="it-desc">Бо, Га, говядина, Лапша, Лук и др.</p>
                </div>
            </div>
            <div class="item-image">
                <img src="http://lifeinresort.com/stalislife/wp-content/uploads/sites/7/2014/06/st07.jpg" alt="">
            </div>
        </div>
        <div class="item">
            <div class="item-info">
                <div class="item-info-mid">
                    <p class="it-name">Фо Бо Га.</p>
                    <p class="it-price">150 p.</p>
                    <p class="it-desc">Бо, Га, говядина, Лапша, Лук и др.</p>
                </div>
            </div>
            <div class="item-image">
                <img src="http://lifeinresort.com/stalislife/wp-content/uploads/sites/7/2014/06/st07.jpg" alt="">
            </div>
        </div>
    </div>
</div>
</div>