<?php


class Message
{

    const SHOW_BY_DEFAULT = 5;

    public static function getMessageList($count = self::SHOW_BY_DEFAULT)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, name, email, date FROM user ORDER BY id DESC LIMIT :count';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $messageList = [];
        while ($row = $result->fetch()) {
            $messageList[$i]['id'] = $row['id'];
            $messageList[$i]['name'] = $row['name'];
            $messageList[$i]['email'] = $row['email'];
            $messageList[$i]['date'] = $row['date'];
            $i++;
        }
        return $messageList;

    }

    /* метод для пагинации
     * public static function getStaticList($page = 1)
    {
        $limit = User::SHOW_BY_DEFAULT;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, name, email, date FROM user ORDER BY id ASC LIMIT :limit OFFSET :offset';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $messagees = [];
        while ($row = $result->fetch()) {
            $messagees[$i]['id'] = $row['id'];
            $messagees[$i]['name'] = $row['name'];
            $messagees[$i]['email'] = $row['email'];
            $messagees[$i]['date'] = $row['date'];
            $i++;
        }
        return $messagees;
    }
    */

}