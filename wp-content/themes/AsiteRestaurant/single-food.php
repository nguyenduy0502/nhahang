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
			<div class="col-md-9">
				<div class="page-content clearfix">
					<div class="single-food">
						<div class="sf-images">
							<a href="#"><img src="http://placehold.it/500x500" alt=""></a>
						</div>
						<div class="sf-info">
							<h2>Нэм Чуа</h2>
							<p class="price">190 руб.</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias sunt quo deserunt nisi suscipit quidem alias assumenda sequi eum ab possimus quia, distinctio voluptatem quae fugit quod, architecto modi cum.</p>
						</div>
						<div class="sf-description">
							<ul id="tabs">
								<li><a href="#" name="tab1">Описание</a></li>
								<li><a href="#" name="tab2">Комментарий</a></li>
							</ul>
							<div id="content">
								<div id="tab1">
									<h2>Описание блюды</h2>
									<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Ему меня домах, переулка ее запятых вопроса даже повстречался рукописи встретил коварных речью! Необходимыми, путь, подпоясал. Рукопись, напоивший семантика заглавных!</p>
								</div>
								<div id="tab2"></div>
							</div>
						</div>
						<div class="sf-otherfood">
							<h2>Другие Блюды</h2>
							<div class="otherfood-list">
								<div class="of-item">
									<div class="of-img">
										<img src="http://placehold.it/300x300" alt="">
									</div>
									<div class="of-text">
										<h3>Фо Бо Га</h3>
										<p class="of-price">120 руб.</p>
									</div>
								</div>
								<div class="of-item">
									<div class="of-img">
										<img src="http://placehold.it/300x300" alt="">
									</div>
									<div class="of-text">
										<h3>Фо Бо Га</h3>
										<p class="of-price">120 руб.</p>
									</div>
								</div>
								<div class="of-item">
									<div class="of-img">
										<img src="http://placehold.it/300x300" alt="">
									</div>
									<div class="of-text">
										<h3>Фо Бо Га</h3>
										<p class="of-price">120 руб.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sidebar">
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
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<?php get_footer();?>
