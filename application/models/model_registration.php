<?php

class Model_Registration extends Model
{
    function newuser($login, $password, $email)
    {
        $pdo = (new Connection())->create();
        $checkLogin = "Логин занят";
        $checkLogininput = "Поле login пустое";
        $checkPasswordinput = "Поле password пустое";
        $checkEmailnmput = "Поле email пустое";
        $checkInput = "Некоторые поля пустые";
        $checkUser = "Регистрация прошла успешно";

        if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])) {
            if (empty($_POST['login']) && empty($_POST['password']) && empty($_POST['email'])) {
                return $checkInput;
            }
            if (empty($_POST['login'])) {
                return $checkLogininput;
            } elseif (empty($_POST['password'])) {
                return $checkPasswordinput;
            } elseif (empty($_POST['email'])) {
                return $checkEmailnmput;
            }
            $sql_check = 'SELECT EXISTS(SELECT login FROM users WHERE login = :login)';
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check->execute([':login' => $login]);
            if ($stmt_check->fetchColumn()) {
                return $checkLogin;
            }
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = 'INSERT INTO users(login,password,email) VALUES(:login,:password,:email)';
            $params = ['login' => $login, ':password' => $password, 'email' => $email];
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            return $checkUser;
        } else {
            return false;
        }
    }
}
