<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;

class DemoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCreateProduct()
    {
        putenv('DB_CONNECTION=shoplaravel');
       $data = [
                        'name' => "New Product",
                        'description' => "This is a product",
                        'price' => 10,
                        'photo' => UploadedFile::fake()->image('avatar.jpg')
                    ];
            
            $response = $this->json('POST','api/apiproducts',$data);
            //$response->assertStatus(200);
            $response->assertJson(['success' => true]);
            $response->assertJson(['message' => "Product created successfully."]);
            //$response->assertJson(['data' => $data]);
      }

}
