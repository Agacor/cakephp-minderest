<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Database\Expression\QueryExpression;

/**
 * ATENCIÓN: clase abstracta. 
 * Define métodos y comportamientos pero no se puede instanciar.
 */
abstract class AppTable extends Table
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

        // [BEHAVIORS]
        $this->addBehavior('Timestamp');
    }


    /******************************
     * CUSTOM FINDERS
     ******************************/
    
    /**
     * Custom Finder for Search Words
     * @param \Cake\ORM\Query $query
     * @param array $options
     * @return \Cake\ORM\Query
     */
    public function findSearchWords(\Cake\ORM\Query $query, array $options)
    {
        $options+= ['search' => '', 'minLength' => 3, 'columns' => null];

        if (!empty($options['search']) && !empty($options['columns'])) {
            
            // Search Words
            $words = explode(' ', $options['search']);
            $searchWords = array_filter($words, function($var) use ($options) {
                return (strlen($var) >= $options['minLength']);
            });
            
            if (!empty($searchWords)) {
                // Search Columns
                $searchColumns = [];
                $alias = $this->getAlias();
                foreach((array) $options['columns'] as $column) {
                    $searchColumns[]= (stristr($column, '.')) ? $column : "$alias.$column";
                }
                // Search Fields
                $searchFields = (count($searchColumns)>1) ? "CONCAT(".implode(', ', $searchColumns).")" : $searchColumns[0];

                $query
                    ->where(function (QueryExpression $exp, Query $q) use ($searchFields, $searchWords) {
                        foreach($searchWords as $searchWord){
                            $exp->like($searchFields, "%$searchWord%");
                        }
                        return $exp;
                    });
            }

        }
       
        return $query;
    }

}
