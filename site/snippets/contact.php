<?php if(isset($success) && $success): ?>
    <div class="alert success">
        <p><?= $success ?></p>
    </div>
<?php else: ?>
    <?php if (isset($alert['error'])): ?>
        <div><?= $alert['error'] ?></div>
    <?php endif ?>
    <form method="post" action="<?= $page->url() ?>">
        <div class="honeypot">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="website" id="website" name="website">
        </div>
        <div class="field form-group">
            <label for="name">
                Name <abbr title="required">*</abbr>
            </label>
            <input class="form-control" type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
            <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
        </div>
        <div class="field form-group">
            <label for="email">
                Email <abbr title="required">*</abbr>
            </label>
            <input class="form-control" type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
            <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
        </div>
        <div class="field form-group">
            <label for="text">
                Text <abbr title="required">*</abbr>
            </label>
            <textarea class="form-control" id="text" name="text" required>
                <?= $data['text']?? '' ?>
            </textarea>
            <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>
<?php endif ?>