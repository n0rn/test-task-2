<?php


class Mail
{
    public static function getSendMail($text)
    {
        $to      = 'test495@gmail.com';
        $subject = 'New massage from test website';
        $message = $text;
        
        return mail($to, $subject, $message);
    }

}