<?php

    namespace IdnoPlugins\UserColors\Pages {
        use Idno\Common\Page;

        class Account extends Page
        {

            function getContent()
            {
                $this->createGatekeeper();



                $t = \Idno\Core\site()->template();
                $t->body = $t->__($vars)->draw('usercolors/account');
                $t->title = 'User Colors';
                $t->drawPage();
            }

            function postContent()
            {

            }

        }

    }
