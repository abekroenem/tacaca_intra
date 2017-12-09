<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $imagem
 * @property \Cake\I18n\FrozenTime $created
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'descricao' => true,
        'imagem' => true,
        'created' => true,
        'usuario_id' => true,
        'usuario' => true
    ];
}
