<?php
/**
 * File Name: single-food.php
 * Date: 22-06-2016
 * Time: 22:26
 * Description: Single custom post type=food
 */
?>
<?php
get_header();?>

<div class="new-page">
<div class="container">
<div class="row">
		<div class="page-block clearfix">
			<?php get_template_part('includes/post-types/food/content'); // get file content food?>
			<div class="col-md-3">
			<!--	<div class="sidebar">
					<form action="">
						<input type="search" name="Search" id="search" placeholder="Search">
						<button class="">|||</button>
					</form>
					<div class="category-list">
						<ul id="nestedlist">
						    <li><a href="#">Gadgets and Gizmos</a>
						    <ul>
						        <li><a class="connect" href="#">Gadgets</a>
						        <ul>
						            <li><a href="#">Inspector Gadget </a></li>
						            <li><a href="#">Gadget Hackwrench</a></li>
						            <li><a href="#">Gadget Galaxy</a></li>
						            <li><a href="#">Daily Gadget </a></li>
						            <li><a href="#">Cheese Gadgets</a>
						            <ul>
						                <li><a href="#">Bleu</a></li>
						                <li><a href="#">Swiss</a></li>
						                <li><a href="#">Havardi</a></li>
						            </ul>
						            </li>
						        </ul>
						        </li>
						        <li><a href="#">Gizmos</a>
						        <ul>
						            <li><a href="#">Gizmo the Mogwai</a></li>
						            <li><a href="#">The Transform Gizmo</a></li>
						            <li><a href="#">Gizmondo</a></li>
						        </ul>
						        </li>
						    </ul>
						    </li>
						</ul>
					</div>
				</div> -->
				<?php if(is_active_sidebar('left-food-sidebar')): ?>
				<?php dynamic_sidebar('left-food-sidebar');?>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
</div>


<?php get_footer();?>
