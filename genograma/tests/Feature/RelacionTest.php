<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RelacionTest extends TestCase
{
    
    
    use RefreshDatabase; 

    /** @test */
    public function testRegistrarRelacion(){
        
        $this->withoutExceptionHandling();// desactivamos las excepciones
        /**datos de prueba */
        $sujeto=factory(Sujeto::class)->create(); 
        $genoma1= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto->id
        ]);
        
        $genoma2= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(1,Genoma::all());//confirma si por lo menos hay un post en la tabla post 
        $post = Genoma::first();
        $this->assertEquals($post->text,'test text');
        $this->assertEquals($post->category,'test category');

        $response->assertRedirect('/genoma/'.$post->id);
    }

    /** @test */
    public function testListarRelacion(){

        $this->withoutExceptionHandling();// desactivamos las excepciones

        $sujeto1=factory(Sujeto::class)->create();
        $sujeto2=factory(Sujeto::class)->create();
        $response1= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto1->id
        ]);
        $response2= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto2->id
        ]);



        $response= $this->get('/genoma');//llamo a la ruta
        $posts= Genoma::all();
        $response->assertOk();

        $response->assertViewIs('genoma.index');
        $response->assertViewHas('posts',$posts);
    }

    /**no lo e probado aun */
    public function testObtenerUnRelacion(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

         $sujeto1=factory(Sujeto::class)->create();//tengo datos par mis pruebas
         $genoma= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto1->id
        ]);
        $post= Sujeto::first();

        $response= $this->get('/genoma/'.$post->id);//llamo a la ruta
        $post= Genoma::first();
        $response->assertOk();

        $response->assertViewIs('genoma.show');
        $response->assertViewHas('sujeto',$post);// el primer parametro corresponde al parametro que retornas en la vista.
    }

    /** @test */
    public function testActualizarTablaRelacion(){
        $this->withoutExceptionHandling();// desactivamos las excepciones
        //** creo un genoma de prueba */
        $sujeto1=factory(Sujeto::class)->create();//tengo datos par mis pruebas
        $genoma= $this->post('/genoma',[
           'text'=>'test text',
           'category'=>'test category',
           'idSujeto'=>$sujeto1->id
       ]);
       //**obtengo el primer genoma guardado */
       $post= Genoma::first();
 
        $response= $this->put('/genoma/'.$post->id,[
            'text'=>'test nombre',
            'category'=>'test apellido',
            'idSujeto'=>$sujeto1->id
        ]);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(1,Genoma::all());//confirma si por lo menos hay un post en la tabla post
            
        $post = $post->fresh();

        $this->assertEquals($post->text,'test nombre');
        $this->assertEquals($post->category,'test apellido');

        $response->assertRedirect('/genoma/'.$post->id);
    }

    /** @test */
    public function testEliminarRelacion(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

        //** creo un genoma de prueba */
        $sujeto1=factory(Sujeto::class)->create();//tengo datos par mis pruebas
        $genoma= $this->post('/genoma',[
           'text'=>'test text',
           'category'=>'test category',
           'idSujeto'=>$sujeto1->id
       ]);
        //**obtengo el primer genoma guardado */
       $post= Genoma::first();
        $response= $this->delete('/genoma/'.$post->id);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(0,Genoma::all());//confirma si por lo menos hay un post en la tabla post


        $response->assertRedirect('/genoma');
    }

}
