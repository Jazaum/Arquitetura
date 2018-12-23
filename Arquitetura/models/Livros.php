<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "livros".
 *
 * @property int $id
 * @property int $usuario_id
 * @property string $nome
 * @property int $ano_livro
 * @property string $autor
 * @property string $estado_fisic
 * @property int $ativo_inativo
 * @property string $genero
 *
 * @property Usuario $usuario
 */
class Livros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'livros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id', 'ano_livro', 'ativo_inativo'], 'integer'],
            [['nome', 'autor', 'estado_fisic', 'genero'], 'string', 'max' => 50],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usuario_id' => 'Usuario ID',
            'nome' => 'Nome',
            'ano_livro' => 'Ano Livro',
            'autor' => 'Autor',
            'estado_fisic' => 'Estado Fisic',
            'ativo_inativo' => 'Ativo Inativo',
            'genero' => 'Genero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
    
}
