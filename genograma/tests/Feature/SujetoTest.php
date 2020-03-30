<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Sujeto;

class SujetoTest extends TestCase
{

    use RefreshDatabase;
    /** @test */
    public function testRegistrarSujeto(){

        $this->withoutExceptionHandling();// desactivamos las excepciones
        $response= $this->post('/sujeto',[
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'archivoJson'=>'mi archivo'

        ]);
        $this->assertCount(1,Sujeto::all());//confirma si por lo menos hay un post en la tabla post
            
        $post =Sujeto::first();
        
        /**Verificamos que los datos ingresados esten registrados en la base de datos */
        $this->assertEquals($post->id,1);
        $this->assertEquals($post->nombre,'test nombre');
        $this->assertEquals($post->apellido,'test apellido');
    }

    /** 
     * @test 
     * Notemos que para listar un sujeto la comprobacion seria 
     * igual a la del test testObtenerUnSujeto, ahora para este solo tenemos 
     * que verificar a mas de un sujeto, para lograr esto verificaremos dos 
     * que hay registrados dos sujetos.
     * */
    public function testListarSujetos(){

        $this->withoutExceptionHandling();// desactivamos las excepciones

         $post=factory(Sujeto::class)->create();//tengo datos par mis pruebas

        $response= $this->get('/sujeto/'.$post->id);//llamo a la ruta
        $post= Sujeto::first();
        $response->assertOk();
        
        $this->assertDatabaseHas('sujetos', [
            'nombre' => $post->nombre,
            'apellido' => $post->apellido,
            'archivoJson' => $post->archivoJson
        ]);
    }

    /**no lo e probado aun */
    public function testObtenerUnSujeto(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

         $post=factory(Sujeto::class)->create();//tengo datos par mis pruebas

        $response= $this->get('/sujeto/'.$post->id);//llamo a la ruta
        $post= Sujeto::first();
        $response->assertOk();
        
        $this->assertDatabaseHas('sujetos', [
            'nombre' => $post->nombre,
            'apellido' => $post->apellido,
            'archivoJson' => $post->archivoJson
        ]);
    }

    /** @test */
    public function testActualizarTablaSujeto(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

        $post=factory(Sujeto::class)->create();//tengo datos par mis pruebas

        $response= $this->put('/sujeto/'.$post->id,[
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'archivoJson'=>'archivo json'
        ]);

        $response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(1,Sujeto::all());//confirma si por lo menos hay un post en la tabla post

        $post =$post->fresh();
        $this->assertEquals($post->nombre,'test nombre');
        $this->assertEquals($post->apellido,'test apellido');
        $this->assertEquals($post->archivoJson,'archivo json');

    }

    /** @test */
    public function testEliminarSujeto(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

        $post=factory(Sujeto::class)->create();//tengo datos par mis pruebas

        $response= $this->delete('/sujeto/'.$post->id);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(0,Sujeto::all());//confirma si por lo menos hay un post en la tabla post
    }

    
}
