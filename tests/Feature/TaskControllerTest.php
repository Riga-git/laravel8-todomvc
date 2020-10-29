<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Task;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);
        $response->assertViewHas('tasks');
    }

    public function testShow()
    {
        $task = Task::factory()->make();

        $response = $this->get('/tasks/' . $task->id);

        $response->assertStatus(200);
    }

    public function testShowUnexistingTask()
    {
        $response = $this->get('/tasks/12345');

        $response->assertStatus(404);
    }

    public function testCreateNewTask()
    {
        $response = $this->post('/tasks', ['name' => 'New task']);

        $response->assertStatus(200);
        $response->assertViewHas('task');
    }

    public function testCreateNewTaskNotValid()
    {
        $response = $this->post('/tasks', ['name' => '']);

        $response->assertStatus(302);
    }
}
