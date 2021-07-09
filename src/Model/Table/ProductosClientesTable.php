<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductosClientes Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 *
 * @method \App\Model\Entity\ProductosCliente newEmptyEntity()
 * @method \App\Model\Entity\ProductosCliente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductosCliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductosCliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductosCliente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductosCliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductosCliente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductosCliente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductosCliente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductosCliente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductosCliente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductosCliente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductosCliente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductosClientesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('productos_clientes');
        $this->setDisplayField('display');

        // [BEHAVIORS]
        $this->addBehavior('Timestamp');
        
        // [ORM]
        $this->belongsTo('Producto', [
            'propertyName' => 'Producto',
            'className' => 'Productos',
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Cliente', [
            'propertyName' => 'Cliente',
            'className' => 'Clientes',
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['producto_id'], 'Producto'), ['errorField' => 'producto_id']);
        $rules->add($rules->existsIn(['cliente_id'], 'Cliente'), ['errorField' => 'cliente_id']);
        $rules->add($rules->isUnique(['producto_id', 'cliente_id'], __('El producto ya existe.')));
        $rules->add($rules->isUnique(['cliente_id', 'nombre'], __('El nombre del producto ya existe.')));

        return $rules;
    }


    /******************************
     * CUSTOM FINDERS
     ******************************/
    
    /**
     * Custom Finder for Autocomplete
     * @param \Cake\ORM\Query $query
     * @param array $options
     * @return \Cake\ORM\Query
     */
    public function findAutocomplete(\Cake\ORM\Query $query, array $options)
    {
        $alias = $this->getAlias();
        $query
            ->select([
                $alias."__id" => "$alias.id",
                $alias."__label" => "CONCAT('[', Producto.mpn, '] ', $alias.nombre)",
                $alias."__value" => "CONCAT('[', Producto.mpn, '] ', $alias.nombre)",
                $alias."__producto_id" => "$alias.producto_id",
                $alias."__cliente_id" => "$alias.cliente_id",
                $alias."__mpn" => "Producto.mpn",
            ])
            ->innerJoinWith('Producto');
            
        // Término de Búsqueda
        if (!empty($options['search'])) {
            $conditions = [];
            $search_words = explode(' ', $options['search']);
            foreach($search_words as $word) {
                $conditions[]=["CONCAT('[', Producto.mpn, '] ', $alias.nombre) LIKE" => "%$word%"];
            }
            $query->where($conditions);
        }
        return $query;
    }

}
