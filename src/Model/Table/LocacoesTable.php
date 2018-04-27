<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locacoes Model
 *
 * @property \App\Model\Table\LivrosTable|\Cake\ORM\Association\BelongsTo $Livros
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Locaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Locaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Locaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Locaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Locaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Locaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Locaco findOrCreate($search, callable $callback = null, $options = [])
 */
class LocacoesTable extends Table
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

        $this->setTable('locacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Livros', [
            'foreignKey' => 'livro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('data_locacao')
            ->requirePresence('data_locacao', 'create')
            ->notEmpty('data_locacao');

        $validator
            ->dateTime('data_vencimento')
            ->requirePresence('data_vencimento', 'create')
            ->notEmpty('data_vencimento');

        $validator
            ->dateTime('data_devolucao')
            ->requirePresence('data_devolucao', 'create')
            ->notEmpty('data_devolucao');

        return $validator;
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
        $rules->add($rules->existsIn(['usuario_id'], 'Users'));

        return $rules;
    }
}
