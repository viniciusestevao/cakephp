<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LivrosGenerosFixture
 *
 */
class LivrosGenerosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'livro_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'genero_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => '0000-00-00 00:00:00', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_genero_id' => ['type' => 'index', 'columns' => ['genero_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['livro_id', 'genero_id'], 'length' => []],
            'FK_genero_id' => ['type' => 'foreign', 'columns' => ['genero_id'], 'references' => ['generos', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'FK_livro_id' => ['type' => 'foreign', 'columns' => ['livro_id'], 'references' => ['livros', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'livro_id' => 1,
                'genero_id' => 1,
                'created' => 1524595853,
                'modified' => 1524595853
            ],
        ];
        parent::init();
    }
}
