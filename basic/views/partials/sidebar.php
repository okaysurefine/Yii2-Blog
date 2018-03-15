<?php
use yii\helpers\Url;
?>

<div class="col-md-4" data-sticky_column>
	<div class="primary-sidebar">

		<aside class="widget">
			<h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

			<?php foreach ($popular as $article):?> 
				<div class="popular-post">

					<a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">

						<div class="p-overlay"></div>
					</a>

					<div class="p-content">
						<a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="text-uppercase"><?= $article->title ?></a>
						<span class="p-date"><?= $article->getDate(); ?></span>
					</div>
				</div>
			<?php endforeach; ?>
		</aside>

		<aside class="widget pos-padding">
			<h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

			<?php foreach ($recent as $article): ?>
				<div class="thumb-latest-posts">
					<div class="media">
						<div class="media-left">
							<a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="popular-img"><img src="<?= $article->getImage(); ?>" alt="">
								<div class="p-overlay"></div>
							</a>
						</div>
						<div class="p-content">
							<a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="text-uppercase"><?= $article->title; ?></a>
							<span class="p-date"><?= $article->getDate(); ?></span>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
</aside>

<aside class="col-md-12 widget border pos-padding">
	<div class="row col-md-12">
		<div class="col-md-6">
			<h3 class="widget-title text-uppercase text-center">Categories</h3>
			<ul>
				<?php foreach ($categories as $category): ?>
					<li>        
						<a href="<?= Url::toRoute(['site/category', 'id'=>$category->id]);?>"><?= $category->title ?></a>
						<span class="post-count pull-right"> (<?= $category->getArticles()->count(); ?>)</span>
					</li>
				<?php endforeach; ?>    
			</ul>
		</div>

		<div class="col-md-6">
			<h3 class="widget-title text-uppercase text-center">Tags</h3>
			<ul>
				<?php foreach ($tags as $tag): ?>
					<li>        
						<a href="<?= Url::toRoute(['site/tag', 'id'=>$tag->id]);?>"><?= $tag->title ?></a>
						<span class="post-count pull-right"> (<?= $tag->getArticles()->count(); ?>)</span>
					</li>
				<?php endforeach; ?>    
			</ul>
		</div>	
	</div>	
</aside>
</div>
</div>



