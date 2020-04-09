<?php

namespace Calc\Models\Users;

use Calc\Exceptions\InvalidArgumentException;
use Calc\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    /** @var string */
    protected $login;
    /** @var string */
    protected $passwordHash;
    /** @var string */
    protected $role;
    /** @var string */
    protected $authToken;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getAuthToken(): string
    {
        return $this->authToken;
    }

    protected static function getTableName(): string
    {
        return 'users';
    }

    public function refreshAuthToken(): void
    {
        $this->authToken = sha1(random_bytes(100)) . sha1(random_bytes(100));
    }

    public static function login(array $loginData): User
    {
        if (empty($loginData['login'])) {
            throw new InvalidArgumentException('Пожалуйста, введите Ваш логин');
        }

        if (empty($loginData['password'])) {
            throw new InvalidArgumentException('Пожалуйста, введите пароль');
        }

        $user = User::findOneByColumn('login', $loginData['login']);
        if ($user === null) {
            throw new InvalidArgumentException('Вход не выполнен. Пожалуйста, проверьте правильность ввода логина и пароля.');
        }

        if (!password_verify($loginData['password'], $user->getPasswordHash())) {
            throw new InvalidArgumentException('Вход не выполнен. Пожалуйста, проверьте правильность ввода логина и пароля.');
        }

        $user->refreshAuthToken();
        $user->save();

        return $user;
    }

    public static function signUp(array $userData): User
    {
        if (empty($userData['login'])) {
            throw new InvalidArgumentException('Не передан логин');
        }

        if (!preg_match('/[a-zA-Z0-9]+/', $userData['login'])) {
            throw new InvalidArgumentException('Логин может состоять только из символов латинского алфавита и цифр');
        }

//        if (empty($userData['email'])) {
//            throw new InvalidArgumentException('Не передан email');
//        }
//
//        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
//            throw new InvalidArgumentException('Email некорректен');
//        }

        if (empty($userData['password'])) {
            throw new InvalidArgumentException('Не передан пароль');
        }

        if (mb_strlen($userData['password']) < 8) {
            throw new InvalidArgumentException('Пароль должен быть не менее 8 символов');
        }

        if (static::findOneByColumn('login', $userData['login']) !== null) {
            throw new InvalidArgumentException('Пользователь с таким логином уже существет');
        }

//        if (static::findOneByColumn('email', $userData['email']) !== null) {
//            throw new InvalidArgumentException('Пользователь с таким email уже существует');
//        }

        $user = new User();
        $user->login = $userData['login'];
//        $user->email = $userData['email'];
        $user->passwordHash = password_hash($userData['password'], PASSWORD_DEFAULT);
//        $user->isConfirmed = false;
        $user->role = 'user';
        $user->authToken = sha1(random_bytes(100)) . sha1(random_bytes(100));
        $user->save();

        return $user;
    }

    public static function changePassword(User $user, string $newPassword): User
    {
        if (empty($newPassword)) {
            throw new InvalidArgumentException('Не передан пароль');
        }

        if (mb_strlen($newPassword) < 8) {
            throw new InvalidArgumentException('Пароль должен быть не менее 8 символов');
        }

        $user->passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
        $user->save();

        return $user;
    }


}