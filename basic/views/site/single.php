<!--main content start-->
<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <div><img src="<?= $article->getImage();?>" alt=""></div>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]) ?>"><?= $article->title ?></a></h1>

                            <h6><a class="text-center" href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id]) ?>"><?= $article->category->title ?></a></h6>
                        </header>

                        <div class="entry-content">
                            <?= $article->content?>
                        </div>

                        <div class="decoration">
                            <?php foreach ($tags as $tag):?>
                                <a href="<?= Url::toRoute(['site/tag', 'id'=>$tag->id]);?>" class="btn btn-default"><?=$tag->title?></a>
                            <?php endforeach; ?>
                        </div>

                        <div>
                            <span class="pull-left text-capitalize">By <?= $article->author['name'] ?></span>
                            <span class="pull-right text-capitalize"> <?= $article->getDate() ?></span>
                        </div>
                    </div>
                </article>

             <?= $this->render('/partials/comment', [
                'article'=>$article,
                'comments'=>$comments,
                'commentForm'=>$commentForm
             ]) ?>
            </div>
             <?= $this->render('/partials/sidebar', [
                'popular' => $popular,
                'recent' => $recent,
                'categories'=>$categories,
                'tags'=>$tags
            ]);?>
        </div>
    </div>
</div>
<!-- end main content-->