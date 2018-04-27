<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Livro Entity
 *
 * @property int $id
 * @property int $autor_id
 * @property string $titulo
 * @property string $descricao
 * @property int $quantidade
 * @property int $isbn
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Autore $autore
 * @property \App\Model\Entity\Genero[] $generos
 */
class Livro extends Entity
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
        'autor_id' => true,
        'titulo' => true,
        'descricao' => true,
        'quantidade' => true,
        'qtde_locados' => true,
        'isbn' => true,
        'created' => true,
        'modified' => true,
        'autore' => true,
        'generos' => true
    ];
}
