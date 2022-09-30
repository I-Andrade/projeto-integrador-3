<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
/*use PHPUnit\Framework\TestCase;*/ use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_database_create_users()
    {
        $qtde = 20;
        User::factory()->unverified()->count($qtde)->create();
        
        $users = User::all();
        $this->assertCount($qtde,$users);
        $this->assertNotEmpty($users->first->name);
    }
}
