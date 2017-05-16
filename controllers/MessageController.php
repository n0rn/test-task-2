<?php

include_once ROOT . '/models/Message.php';
include_once ROOT . '/components/Pagination.php';

class MessageController
{


    public function actionIndex()
    {
        $messages = [];
        $messages = Message::getMessageList(5);

        require_once(ROOT . '/views/message/index.php');

        return true;

    }

   /* c пагинацией
    public function actionIndex($page = 1)
    {
        $messages = [];
        $messages = Message::getStaticList($page);
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/message/index.php');

        return true;

    }
   */
}