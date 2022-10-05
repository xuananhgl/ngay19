<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;
class ArticlesTable extends Table
{
    public function initialize(array $config)
    {


        $this->addBehavior('Translate', ['fields' => ['about', 'title', 'body'],
          'translationTable' => 'AticlesI18n',
        'allowEmptyTranslations' => false
         ]);


}
}
