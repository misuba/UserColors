<?php

    namespace IdnoPlugins\UserColors {

        class Main extends \Idno\Common\Plugin
        {
            function registerPages()
            {
                \Idno\Core\site()->template()->extendTemplate('account/menu/items', 'usercolors/menu');

                \Idno\Core\site()->addPageHandler('account/usercolors/?','IdnoPlugins\UserColors\Pages\Account');
            }
        }

    }
