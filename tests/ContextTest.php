<?php

use Kenuocn\Context;
use Tests\TestCase;
class ContextTest extends TestCase
{
    public function setUp()
    {
        $this->context = Context::create();
    }

    public function test_all_passed()
    {
        Context::macro('get_foo', function () {
            return 'foo';
        });

        $this->context::set('name', 'context');
        $this->assertEquals($this->context::get('name'), 'context');

        $this->context::set('age', 20);
        $this->assertTrue($this->context::has('age'));

        $this->assertEquals($this->context::all(), [
            'name' => 'context',
            'age' => 20,
        ]);

        $this->assertEquals('foo', $this->context::get_foo());
    }
}
