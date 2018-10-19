<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $email
 * @property string $authKey
 * @property string $accessToken
 *
 * @property Meal[] $meals
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    const ROLE_USER 		= 1;
    const ROLE_ADMIN 		= 2;

    const STATUS_ACTIVE = 1;
    const STATUS_NOT_ACTIVE = 2;
    const STATUS_DELETED = 3;



    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'name', 'email'], 'required'],
            [['username', 'password', 'name', 'email', 'authKey', 'accessToken'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'email' => 'Email',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeals()
    {
        return $this->hasMany(Meal::className(), ['user_id' => 'id']);
    }

    public static function findByUsername($username)
    {
        return static::findOne([
            'username' => $username
        ]);
    }

    public static function findByEmail($email)
    {
        return static::findOne([
            'email' => $email
        ]);
    }

    public static function findBySecretKey($key)
    {
        if (!static::isSecretKeyExpire($key))
        {
            return null;
        }
        return static::findOne([
            'secret_key' => $key,
        ]);
    }

    public function generateSecretKey()
    {
        $this->secret_key = Yii::$app->security->generateRandomString().'_'.time();
    }

    public function removeSecretKey()
    {
        $this->secret_key = null;
    }

    public static function isSecretKeyExpire($key)
    {
        if (empty($key))
        {
            return false;
        }
        $expire = Yii::$app->params['secretKeyExpire'];
        $parts = explode('_', $key);
        $timestamp = (int) end($parts);

        return $timestamp + $expire >= time();
    }

    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey(){
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public static function findIdentity($id)
    {
        return static::findOne([
            'id' => $id,
            'status' => self::STATUS_ACTIVE
        ]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Check if the logged in user is an admin
     *
     * @return bool
     */
    public static function isAdmin()
    {
        if (Yii::$app->user->identity && Yii::$app->user->identity->role == User::ROLE_ADMIN) {
            return true;
        }
        return false;    }
}
