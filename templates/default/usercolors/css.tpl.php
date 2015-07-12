<?php if ($vars['user'] && $vars['user']->colors) { ?>
    <style type="text/css">
    <!--
    body {
        background-color: <?= $vars['user']->colors['bg'] ?>;
    }
    .highlightedText {
        color: <?= $vars['user']->colors['hilite'] ?>;
    }
    .profile a, .idno-entry a, .idno-object .permalink a {
        color: <?= $vars['user']->colors['link'] ?>;
    }

    .pager li > a {
        background-color: <?= $vars['user']->colors['hilite'] ?>;
        border-color: <?= $vars['user']->colors['hilite'] ?>;
        color: <?= $vars['user']->colors['link'] ?>;
    }
    .pager li > a:hover, .pager li > a:focus {
        background-color: <?= $vars['user']->colors['hilite'] ?>;
        border-color: <?= $vars['user']->colors['bg'] ?>;
        color: <?= $vars['user']->colors['link'] ?>;
    }
    -->
    </style>
<?php } ?>
