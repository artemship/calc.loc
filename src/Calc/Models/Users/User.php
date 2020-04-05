<?php

namespace Calc\Models\Users;

use Calc\Exceptions\InvalidArgumentException;
use Calc\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    /** @var string */
    protected $nickname;
    /** @var string */
    protected $passwordHash;
    /** @var string */
    protected $role;
    /** @var string */
    protected $authToken;

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
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
        if (empty($loginData['nickname'])) {
            throw new InvalidArgumentException('Не передан nickname');
        }

        if (empty($loginData['password'])) {
            throw new InvalidArgumentException('Не передан пароль');
        }

        $user = User::findOneByColumn('nickname', $loginData['nickname']);
        if ($user === null) {
            throw new InvalidArgumentException('Нет пользователя с таким логином');
        }

        if(!password_verify($loginData['password'], $user->getPasswordHash())) {
            throw new InvalidArgumentException('Неправильный пароль');
        }

        $user->refreshAuthToken();
        $user->save();

        return $user;
    }

    public static function signUp(array $userData): User
    {
        if (empty($userData['nickname'])) {
            throw new InvalidArgumentException('Не передан nickname');
        }

        if (!preg_match('/[a-zA-Z0-9]+/', $userData['nickname'])) {
            throw new InvalidArgumentException('Nickname может состоять только из символов латинского алфавита и цифр');
        }

//        if (empty($userData['email'])) {
//            throw new InvalidArgumentException('Не передан email');
//        }
//
//        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
//            throw new InvalidArgumentException('Email некорректен');
//        }

        if (empty($userData['password'])) {
            throw new InvalidArgumentException('Не передан password');
        }

        if (mb_strlen($userData['password']) < 8) {
            throw new InvalidArgumentException('Пароль должен быть не менее 8 символов');
        }

        if (static::findOneByColumn('nickname', $userData['nickname']) !== null) {
            throw new InvalidArgumentException('Пользователь с таким nickname уже существет');
        }

//        if (static::findOneByColumn('email', $userData['email']) !== null) {
//            throw new InvalidArgumentException('Пользователь с таким email уже существует');
//        }

        $user = new User();
        $user->nickname = $userData['nickname'];
//        $user->email = $userData['email'];
        $user->passwordHash = password_hash($userData['password'], PASSWORD_DEFAULT);
//        $user->isConfirmed = false;
        $user->role = 'user';
        $user->authToken = sha1(random_bytes(100)) . sha1(random_bytes(100));
        $user->save();

        return $user;
    }


}