<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testSave()
    {
        $user = new User();
        $user->data = [
            'username' => 'Deepak',
        ];

        $this->assertTrue($user->save());

        $user2 = new User();
        $this->assertFalse($user2->save());
    }

    public function testFindById()
    {

    }

    public function testFindAll()
    {

    }
}