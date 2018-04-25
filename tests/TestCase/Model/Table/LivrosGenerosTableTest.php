<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LivrosGenerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LivrosGenerosTable Test Case
 */
class LivrosGenerosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LivrosGenerosTable
     */
    public $LivrosGeneros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.livros_generos',
        'app.livros',
        'app.generos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LivrosGeneros') ? [] : ['className' => LivrosGenerosTable::class];
        $this->LivrosGeneros = TableRegistry::get('LivrosGeneros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LivrosGeneros);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
