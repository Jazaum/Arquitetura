<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $nome
 * @property string $username
 * @property string $password
 * @property int $idade
 * @property int $telefone
 * @property string $bairro
 * @property string $logradouro
 * @property string $cidade
 * @property string $cep
 * @property string $authKey
 *
 * @property Livros[] $livros
 */
class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idade', 'telefone'], 'integer'],
            [['nome', 'username', 'password', 'bairro', 'logradouro', 'cidade', 'authKey'], 'string', 'max' => 50],
            [['cep'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'username' => 'Username',
            'password' => 'Password',
            'idade' => 'Idade',
            'telefone' => 'Telefone',
            'bairro' => 'Bairro',
            'logradouro' => 'Logradouro',
            'cidade' => 'Cidade',
            'cep' => 'Cep',
            'authKey' => 'Auth Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
     public function getLivros()
    {
        return $this->hasMany(Livros::className(), ['usuario_id' => 'id']);
    }

     public static function findIdentity($id) {       
        return static::findOne(['id' => $id]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null) {        
       return ;//static::findOne(['accessToken' => $token]);

    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username) {     
        return static::findOne(['username' => $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId() {
        return $this->id;
    }
    

    /**
     * {@inheritdoc}
     */
    public function getAuthKey() {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey) {
        return ;//$this->authKey === $authKey;
    }
public function validatePassword($password) {
    return $this->password ===$password;
}
public function getCep() {
        return $this->cep;
    }
}
