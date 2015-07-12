<?php if ($vars['user'] && $vars['user']->colors) { ?>
    <style type="text/css">
    <!--
    body {
        background-color: <?= $vars['user']->colors['bg'] ?>;
    }
    .highlightedText {
        color: <?= $vars['user']->colors['hilite'] ?>;
    }
    .idno-entry a {
        color: <?= $vars['user']->colors['link'] ?>;
    }
    -->
    </style>
<?php } ?>
