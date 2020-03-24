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

        $response= $this->post('/rutaSujeto',[
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'genero'=>'test genero',
            'edad'=>'test edad'
        ]);


        $this->assertCount(1,Sujeto::all());//confirma si por lo menos hay un post en la tabla post

        $post = Sujeto::first();

        $this->assertEquals($post->nombre,'test nombre');
        $this->assertEquals($post->apellido,'test apellido');
        $this->assertEquals($post->genero,'test genero');
        $this->assertEquals($post->edad,'test edad');

        $response->assertRedirect('/rutaSujeto/'.$post->id);
    }

    /** @test */
    public function testListarSujetos(){

        $this->withoutExceptionHandling();// desactivamos las excepciones

         factory(Sujeto::class, 3)->create();//tengo datos par mis pruebas

        $response= $this->get('/rutaSujeto');//llamo a la ruta
        $posts= Sujeto::all();
        $response->assertOk();

        $response->assertViewIs('rutaSujeto.index');
        $response->assertViewHas('posts',$posts);
    }


    public function testObtenerUnSujeto(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

         $post=factory(Sujeto::class)->create();//tengo datos par mis pruebas

        $response= $this->get('/rutaSujeto/'.$post->id);//llamo a la ruta
        $post= Sujeto::first();
        $response->assertOk();

        $response->assertViewIs('rutaSujeto.show');
        $response->assertViewHas('post',$post);
    }

    /** @test */
    public function testActualizarTablaSujeto(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

        $post=factory(Sujeto::class)->create();//tengo datos par mis pruebas

        $response= $this->put('/rutaSujeto/'.$post->id,[
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'genero'=>'test genero',
            'edad'=>'test edad',
            'informacion'=>'(JSON_ARRAY())22'
        ]);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(1,Sujeto::all());//confirma si por lo menos hay un post en la tabla post

        $post = $post->fresh();

        $this->assertEquals($post->nombre,'test nombre');
        $this->assertEquals($post->apellido,'test apellido');
        $this->assertEquals($post->genero,'test genero');
        $this->assertEquals($post->edad,'test edad');

        $response->assertRedirect('/rutaSujeto/'.$post->id);
    }

    /** @test */
    public function testEliminarSujeto(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

        $post=factory(Sujeto::class)->create();//tengo datos par mis pruebas

        $response= $this->delete('/rutaSujeto/'.$post->id);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(0,Sujeto::all());//confirma si por lo menos hay un post en la tabla post


        $response->assertRedirect('/rutaSujeto');
    }

     /** @test */
     public function testActualizarJson(){
        $this->withoutExceptionHandling();// desactivamos las excepciones
        $post=factory(Sujeto::class)->create();//tengo datos par mis pruebas
        $nombre=$post->nombre;

        $response= $this->put('/rutaSujeto/'.$post->id,[
            'archivoJson'=>'hola'
        ]);

        $this->assertCount(1,Sujeto::all());//confirma si por lo menos hay un post en la tabla post
            
        $post = $post->fresh();

        $this->assertEquals($post->archivoJson,'hola');
        $this->assertEquals($post->nombre, $nombre);//para verificar que los datos guardados previamente no 
        //se modificaron

        $response->assertRedirect('/rutaSujeto/'.$post->id);
    }
}
