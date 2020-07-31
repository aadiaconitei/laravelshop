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

    // public function testCreateProduct()
    // {
    //     putenv('DB_CONNECTION=shoplaravel');
    //    $data = [
    //                     'name' => "New Product",
    //                     'description' => "This is a product",
    //                     'price' => 10,
    //                     'photo' => UploadedFile::fake()->image('avatar.jpg')
    //                 ];
            
    //         $response = $this->json('POST','api/apiproducts',$data);
    //         $response->assertStatus(200);
    //         $response->assertJson(['success' => true]);
    //         $response->assertJson(['message' => "Product created successfully."]);
    //         //$response->assertJson(['data' => $data]);
    //   }



    //   public function testUpdateProduct()
    // {
    //         $id=45;

            
    //         $update = $this->json('PATCH', '/api/apiproducts/'.$id,
    //         ['name' => "Changed for test",'description'=>'Changed for description', 'price'=>24]);
    //         $update->assertStatus(200);
    //         $update->assertJson(['message' => "Product Updated!"]);
    //     } 

        // public function testDeleteProduct()
        // {
                
        //         $id = 45;
    
        //         $user = factory(\App\User::class)->create();
        //         $delete = $this->actingAs($user, 'api')->json('DELETE', '/api/products/'.$id);
        //         $delete->assertStatus(200);
        //         $delete->assertJson(['message' => "Product Deleted!"]);
        // }


        public function test_add()
    {
        $num1 = 1;
        $num2 = 1;
        $sum = \App\Http\Controllers\HomeController::add($num1, $num2);
        $this->assertEquals(2, $sum);
    }


            

}
