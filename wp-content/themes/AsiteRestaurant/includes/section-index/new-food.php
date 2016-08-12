<div class="new-food section" id="section2" data-anchor="new-food">
<div class="new-food-content">
            <div class="section-title">
                <h1>Наши</h1>
                <h2>Новые Блюды</h2>
            </div>
    <?php if(is_active_sidebar('new-food-index')):?>
    <?php dynamic_sidebar('new-food-index');?>
    <?php endif; ?>
</div>
</div>