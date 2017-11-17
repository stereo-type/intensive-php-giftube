<div class="content__main-col">
  <header class="content__header content__header--left-pad">
    <h2 class="content__header-text">Добавить гифку</h2>

    <a class="button button--transparent content__header-button" href="/">Назад</a>
  </header>

  <form class="form" action="" method="post" enctype="multipart/form-data">
    <div class="form__columns">
      <div class="form__column form__column--short">
        <div class="form__row">
          <label class="form__label" for="preview">GIF файл:</label>

          <div class="upload">
            <div class="preview">
              <button class="preview__remove" type="button">Удалить</button>
              <img class="preview__img" src="img/no-pic.png" alt="" width="192" height="192">
            </div>

            <div class="form__input-file">
              <input class="visually-hidden" type="file" name="gif_img" id="preview" value="">

              <label for="preview" class="">
                <span>Выбрать файл</span>
              </label>
            </div>
          </div>
        </div>
      </div>

      <div class="form__column">
        <div class="form__row">
          <?php $classname = isset($errors['Название']) ? "form__input--error" : "";
          $value = isset($gif['title']) ? $gif['title'] : ""; ?>

          <label class="form__label" for="name">Название:</label>
          <input class="form__input <?=$classname;?>" type="text" name="title"
                 id="name" value="<?=$value;?>">
        </div>

        <div class="form__row">
          <?php $classname = isset($errors['Описание']) ? "form__input--error" : "";
          $value = isset($gif['description']) ? $gif['description'] : ""; ?>

          <label class="form__label " for="description">Описание:</label>
          <textarea class="form__input <?=$classname;?>" name="description"
                    id="description"><?=$value;?></textarea>
        </div>
      </div>
    </div>

    <?php if (isset($errors)): ?>
      <div class="form__errors">
        <p>Пожалуйста, исправьте следующие ошибки:</p>
        <ul>
          <?php foreach($errors as $err => $val): ?>
          <li><strong><?=$err;?>:</strong> <?=$val;?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <div class="form__controls">
      <input class="button form__control" type="submit" name="" value="Добавить">
    </div>
  </form>
</div>