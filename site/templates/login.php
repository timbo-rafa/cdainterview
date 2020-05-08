<?php snippet('header') ?>

<h1><?= $page->title()->html() ?></h1>

<?php if($error): ?>
<div class="alert"><?= $page->alert()->html() ?></div>
<?php endif ?>

<form method="post" action="<?= $page->url() ?>">
  <div class="field">
    <label for="email"><?= $page->username()->html() ?></label>
    <input class="form-control" type="email" id="email" name="email" value="<?= esc(get('email')) ?>">
  </div>
  <div class="field">
    <label for="password"><?= $page->password()->html() ?></label>
    <input class="form-control" type="password" id="password" name="password" value="<?= esc(get('password')) ?>">
  </div>
  <div>
    <input class="btn btn-primary" type="submit" name="login" value="<?= $page->button()->html() ?>">
  </div>
</form>

<?php snippet('footer') ?>