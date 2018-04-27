<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocacoesTable Test Case
 */
class LocacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocacoesTable
     */
    public $Locacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.locacoes',
        'app.livros',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Locacoes') ? [] : ['className' => LocacoesTable::class];
        $this->Locacoes = TableRegistry::get('Locacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Locacoes);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
