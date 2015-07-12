<?php

    namespace IdnoPlugins\UserColors\Pages {
        use Idno\Common\Page;

        class Account extends Page
        {

            function getContent()
            {
                $this->createGatekeeper();
                $user = \Idno\Core\site()->session()->currentUser();
                if (!$user->colors) {
                    $user->colors = array();
                }

                $t = \Idno\Core\site()->template();
                $t->body = $t->__($vars)->draw('usercolors/account');
                $t->title = 'User Colors';
                $t->drawPage();
            }

            function postContent()
            {
                $this->createGatekeeper();
                $user = \Idno\Core\site()->session()->currentUser();

                $bg = trim($this->getInput('background_color'));
                $hilite = trim($this->getInput('highlight_color'));
                $link = trim($this->getInput('link_color'));

                if (preg_match('/^#[A-Fa-f0-9]{6}$/', $bg) === 0 ||
                    preg_match('/^#[A-Fa-f0-9]{6}$/', $hilite) === 0 ||
                    preg_match('/^#[A-Fa-f0-9]{6}$/', $link) === 0) {
                        \Idno\Core\site()->session()->addErrorMessage('Colors must be in the format "#a012bd" (that is, full six-digit hex with hash mark)');
                } else {
                    \Idno\Core\site()->session()->addMessage("Your colors have been updated.");
                    $user->colors = array('bg' => $bg, 'hilite' => $hilite, 'link' => $link);
                    $user->save();
                }
            }

        }

    }
