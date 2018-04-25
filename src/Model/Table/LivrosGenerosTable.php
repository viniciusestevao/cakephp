<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LivrosGeneros Model
 *
 * @property \App\Model\Table\LivrosTable|\Cake\ORM\Association\BelongsTo $Livros
 * @property \App\Model\Table\GenerosTable|\Cake\ORM\Association\BelongsTo $Generos
 *
 * @method \App\Model\Entity\LivrosGenero get($primaryKey, $options = [])
 * @method \App\Model\Entity\LivrosGenero newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LivrosGenero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LivrosGenero|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LivrosGenero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LivrosGenero[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LivrosGenero findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LivrosGenerosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('livros_generos');
        $this->setDisplayField('livro_id');
        $this->setPrimaryKey(['livro_id', 'genero_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Livros', [
            'foreignKey' => 'livro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Generos', [
            'foreignKey' => 'genero_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['livro_id'], 'Livros'));
        $rules->add($rules->existsIn(['genero_id'], 'Generos'));

        return $rules;
    }
}
