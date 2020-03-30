<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Sujeto;
Use App\Genoma;
 
class GenomaTest extends TestCase
{
     
    use RefreshDatabase; 

    /** @test */
    public function testRegistrarGenoma(){
        
        $this->withoutExceptionHandling();// desactivamos las excepciones

        $sujeto=factory(Sujeto::class)->create();
        
        $response= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(1,Genoma::all());//confirma si por lo menos hay un post en la tabla post 
        $post = Genoma::first();
        

        $this->assertEquals($post->text,'test text');
        $this->assertEquals($post->category,'test category');
    }

    /** @test */
    public function testListarGenoma(){

        $this->withoutExceptionHandling();// desactivamos las excepciones
        $sujeto2=factory(Sujeto::class)->create();
        $sujeto1=factory(Sujeto::class)->create();//tengo datos par mis pruebas
         $genoma= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto1->id
        ]);
        // primer genoma
        $post= Genoma::findOrFail(1);// aca nos aprovechamos que sabemos que hay dos genomas con los id 1 y 2

        $response= $this->get('/genoma/'.$post->id);//llamo a la ruta;
        $response->assertOk();

        $this->assertDatabaseHas('genomas', [
            'text' => $post->text,
            'category' => $post->category,
            'idSujeto' => $post->idSujeto
        ]);
        // segundo genoma

        $genoma= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto2->id
        ]);
        // primer genoma
        $post= Genoma::findOrFail(2);// aca nos aprovechamos que sabemos que hay dos genomas con los id 1 y 2

        $response= $this->get('/genoma/'.$post->id);//llamo a la ruta;
        $response->assertOk();

        $this->assertDatabaseHas('genomas', [
            'text' => $post->text,
            'category' => $post->category,
            'idSujeto' => $post->idSujeto
        ]);

    }

    /** @test */
    public function testObtenerUnGenoma(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

         $sujeto1=factory(Sujeto::class)->create();//tengo datos par mis pruebas
         $genoma= $this->post('/genoma',[
            'text'=>'test text',
            'category'=>'test category',
            'idSujeto'=>$sujeto1->id
        ]);
        $post= Genoma::first();

        $response= $this->get('/genoma/'.$post->id);//llamo a la ruta;
        $response->assertOk();

        $this->assertDatabaseHas('genomas', [
            'text' => $post->text,
            'category' => $post->category,
            'idSujeto' => $post->idSujeto
        ]);

    }

    /** @test */
    public function testActualizarTablaGenoma(){
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

    }

    /** @test */
    public function testEliminarGenoma(){
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

    }
}
