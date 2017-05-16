<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskControllerTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    public function testIndex()
    {
        $response = $this -> get(route('tasks.index'));
        $response ->assertStatus(200);
        $response ->assertViewHas('tasks');
    }

    public function testStoreWithData()
    {
        $response = $this -> post(route('tasks.store'), ['name' => 'qwertz']);
        
        $response ->assertStatus(302);
        $response ->assertRedirect(route('tasks.index'));  // 2 assert imbriqués
    }

    public function testStoreWithBadData()
    {
        $response = $this -> post(route('tasks.store'), ['name' => 'blb'], ['HTTP_REFERER' => route('tasks.create')]);
        
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['name']); // 2 assert imbriqués
        $response->assertRedirect(route('tasks.create')); // 2 assert imbriqués
    }
    
    public function testShow()
    {
        $task = factory(\App\Task::class)->make();
        echo "task=".$task->name;
        
        $response = $this -> get(route('tasks.show', $task->id));
        $response->assertStatus(200);

    }
    
    public function testShowWithBadId()
    {
        //$task = factory(\App\Task::class)->make();
        //echo "task=".$task->name;
        
        $response = $this -> get(route('tasks.show', 1250));
        $response->assertStatus(500);

    }
}
