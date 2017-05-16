<?php

include_once ROOT . '/models/User.php';
include_once ROOT . '/models/ReCaptcha.php';
include_once ROOT . '/components/Mail.php';

class SiteController
{

    public function actionIndex()
    {
        $name = false;
        $email = false;
        $homepage = false;
        $text = false;
        $result = false;
        $date = date('Y-m-d H: i: s');

        if (isset($_POST['submit'])) {
                $name = strip_tags($_POST['name']);
                $email = strip_tags($_POST['email']);
                $homepage = strip_tags($_POST['homepage']);
                $text = strip_tags($_POST['text']);
                $ip = $_SERVER['REMOTE_ADDR'];
                $brows = $_SERVER['HTTP_USER_AGENT'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            // загрузка картинки
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/" .$_FILES["image"]["name"]);
                $img = $_FILES["image"]["name"];
            }

            if ($errors == false) {
                $result = User::register($name, $email,  $homepage, $text, $ip, $brows, $date, $img);
                Mail::getSendMail($text);
            }

        }

        $siteKey = "6LcALCEUAAAAAIJxQum2OKE8LorP5lSh1l7aQG_d";
        $secret = "6LcALCEUAAAAAMGsWhtDpt04f_kkgo9VLxNe5OXo";
        $lang = "en";


        $resp = null;
        $error = null;

        $reCaptcha = new ReCaptcha($secret);


        if (isset($_POST["g-recaptcha-response"])) {
            $resp = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $_POST["g-recaptcha-response"]
            );
        }

        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }





}
