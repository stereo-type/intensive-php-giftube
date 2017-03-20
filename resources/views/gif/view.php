<?php $this->layout('layout'); ?>
<?php
$gif = $gifModel->findById($id);
$author = $userModel->findByField('id', $gif['user_id']);
$comments = $commentModel->findAllByField('user_id', $gif['user_id']);
?>

<div class="content__main-col">
    <header class="content__header">
        <h2 class="content__header-text"><?=$gif['title'];?></h2>
    </header>

    <div class="gif gif--large">
        <div class="gif__picture">
            <button type="button">Проиграть</button>

            <img src="uploads/<?=$gif['path'];?>" alt="<?=$gif['title'];?>">
        </div>

        <div class="gif__desctiption">
            <div class="gif__description-data">
                <span class="gif__username">@<?=$author['name'];?></span>

                <span class="gif__views"><?=$gif['show_count'];?></span>
                <span class="gif__likes"><?=$gif['like_count'];?></span>
            </div>
        </div>

        <?php if ($user): ?>
        <div class="gif__controls">
            <button class="button gif__control" type="button">Мне нравится</button>
            <button class="button gif__control" type="button">В избранное</button>
        </div>
        <?php endif; ?>
    </div>

    <div class="comment-list">
        <h3 class="comment-list__title">Комментарии:</h3>

        <?php foreach ($comments as $comment) : ?>
        <article class="comment">
            <img class="comment__picture" src="uploads/<?=$comment['avatar_path'];?>" alt="" width="100" height="100">

            <div class="comment__data">
                <div class="comment__author">@<?=$comment['name']; ?></div>

                <p class="comment__text"><?=$comment['content']; ?></p>

                <div class="comment__controls"></div>
            </div>
        </article>
        <?php endforeach; ?>
    </div>

    <?php if ($user): ?>
    <form class="comment-form" action="" method="post">
        <label class="comment-form__label" for="comment">Добавить комментарий:</label>

        <textarea class="comment-form__text" name="comment[content]" id="comment" rows="8" cols="80" placeholder="Помните о правилах и этикете. Написал гадость — потом не удивляйся"><?= $form->content; ?></textarea>

        <input type="hidden" name="comment[gif_id]" value="<?=$id;?>">

        <?php if (!$form->isValid()): ?>
            <div class="form__errors">
                <p>Пожалуйста, исправьте следующие ошибки:</p>
                <ul>
                    <?php foreach ($form->getErrors() as $field => $error): ?>
                        <li><strong><?=$form->getLabelFor($field);?>:</strong> <?=$error;?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <input class="button comment-form__button" type="submit" name="" value="Отправить">
    </form>
    <?php endif; ?>
</div>

<aside class="content__additional-col">
    <h3 class="content__additional-title">Похожие гифки:</h3>

    <ul class="gif-list gif-list--vertical">
        <li class="gif gif--small gif-list__item">
            <div class="gif__picture">
                <button type="button">Проиграть</button>

                <img src="img/GIF-3.jpg" alt="" width="200" height="200">
            </div>
            <div class="gif__desctiption">
                <h3 class="gif__desctiption-title">
                    <a href="#">Купил Бентли в ипотеку</a>
                </h3>

                <div class="gif__description-data">
                    <span class="gif__username">@Егор-Автомэн</span>

                    <span class="gif__likes">666</span>
                </div>
            </div>
        </li>
    </ul>
</aside>