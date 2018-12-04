<div class="content__main-col">
	<header class="content__header">
		<h2 class="content__header-text">Енотик</h2>
	</header>

	<div class="gif gif--large">
		<div class="gif__picture">
			<input type="checkbox" name="" id="gifControl" value="1" class="hide">
			<img src="uploads/preview_gif58d28ce80e3a9.gif" alt="" class="gif_img preview">
		</div>

		<div class="gif__desctiption">
			<div class="gif__description-data">
				<span class="gif__username">@frexin</span>
			</div>
			<div class="gif__description">
				<p>Енотик</p>
			</div>
		</div>
	</div>

	<div class="comment-list">
		<h3 class="comment-list__title">Комментарии:</h3>
        <?php foreach ($comments as $comment) : ?>
            <article class="comment">
				<div class="comment__data">
					<div class="comment__author">аноним</div>
                    <p class="comment__text"><?=htmlspecialchars($comment);?></p>
                </div>
			</article>
        <?php endforeach; ?>
    </div>

    <form class="comment-form form" action="" method="post">
        <label class="comment-form__label" for="comment">Добавить комментарий:</label>
        <textarea class="comment-form__text" name="message" rows="8" cols="80"><?=$msg; ?></textarea>
        /* BEGIN STATE 01 */
        <div class="form__row">
            /* BEGIN STATE 02 */
            <?php $classname = isset($errors['captcha']) ? "form__input--error" : ""; ?>
            /* END STATE 02 */

            /* BEGIN STATE 03 */
            <label class="form__label" for="captcha">Капча:</label>
            /* BEGIN STATE 04 */
            <img src="showcaptcha.php?rand=<?=md5(microtime());?>" width="100" />
            /* BEGIN STATE 04 */
            <input class="form__input <?=$classname;?>" type="text" name="captcha" id="captcha"><br>
            /* BEGIN STATE 03 */
        </div>
        /* END STATE 01 */

        <input class="button comment-form__button" type="submit" name="" value="Отправить">
    </form>
</div>
