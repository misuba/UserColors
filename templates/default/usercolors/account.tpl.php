<?php
    $user = \Idno\Core\site()->session()->currentUser();
?>
<div class="row">

    <div class="col-md-10 col-md-offset-1">

        <?= $this->draw('account/menu') ?>
        <h1>User Colors</h1>

    </div>

    <div class="col-md-10 col-md-offset-1">
        <form method="post" class="navbar-form admin">
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label" for="background_color">Background</label>
                </div>
                <div class="col-md-4">
                    <input type="color" name="background_color"
                        value="<?= $user->colors['bg'] || '#ffffff' ?>" />
                </div>
                <div class="col-md-2">
                </div>
            </div>


            <p>Highlights (text on background, mainly)<input type="color" name="highlight_color"
                value="<?= $user->colors['hilite'] || '#000000' ?>" /></p>

            <p>Links: <input type="color" name="link_color"
                value="<?= $user->colors['link'] || '' ?>" /></p>

            <div class="controls-save">
                <button type="submit" class="btn btn-primary">Save updates</button>
            </div>

            <?= \Idno\Core\site()->actions()->signForm('/account/usercolors') ?>
        </form>
    </div>

</div>
