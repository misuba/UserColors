<?php if ($vars['user'] && $vars['user']->colors) { ?>
    <style type="text/css">
    <!--
    body {
        background-color: <?= $vars['user']->colors['bg'] ?>;
    }
    .highlightedText {
        color: <?= $vars['user']->colors['hilite'] ?>;
    }
    .profile a, .idno-entry a, .idno-object .permalink a, .pager li > a {
        color: <?= $vars['user']->colors['link'] ?>;
    }
    -->
    </style>
<?php } ?>
