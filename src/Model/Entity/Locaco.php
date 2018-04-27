<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Locaco Entity
 *
 * @property int $id
 * @property int $livro_id
 * @property int $usuario_id
 * @property \Cake\I18n\FrozenTime $data_locacao
 * @property \Cake\I18n\FrozenTime $data_vencimento
 * @property \Cake\I18n\FrozenTime $data_devolucao
 *
 * @property \App\Model\Entity\Livro $livro
 * @property \App\Model\Entity\User $user
 */
class Locaco extends Entity
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
        'livro_id' => true,
        'usuario_id' => true,
        'data_locacao' => true,
        'data_vencimento' => true,
        'data_devolucao' => true,
        'livro' => true,
        'user' => true
    ];
}
