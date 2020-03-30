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
            'id'=>1,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(1,Genoma::all());//confirma si por lo menos hay un post en la tabla post 
        $post = Genoma::first();
        

        $this->assertEquals($post->id,1);
        $this->assertEquals($post->nombre,'test nombre');
        $this->assertEquals($post->apellido,'test apellido');
        $this->assertEquals($post->edad,'test edad');
        $this->assertEquals($post->category,'test category');
        $this->assertEquals($post->loc,'test loc');
        $this->assertEquals($post->idSujeto,$sujeto->id);
    }

    /** @test */
    public function testListarGenoma(){

        $this->withoutExceptionHandling();// desactivamos las excepciones
        $sujeto2=factory(Sujeto::class)->create();
        $sujeto1=factory(Sujeto::class)->create();//tengo datos par mis pruebas
        $genoma= $this->post('/genoma',[
            'id'=>1,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto1->id
        ]);
        // primer genoma
        $post= Genoma::findOrFail(1);// aca nos aprovechamos que sabemos que hay dos genomas con los id 1 y 2

        $response= $this->get('/genoma/'.$post->id);//llamo a la ruta;
        $response->assertOk();

        $this->assertDatabaseHas('genomas', [
            'id' => $post->id,
            'nombre' => $post->nombre,
            'apellido' => $post->apellido,
            'edad' => $post->edad,
            'category' => $post->category,
            'loc' => $post->loc,
            'idSujeto' => $post->idSujeto
        ]);

        
        // segundo genoma

        $response= $this->post('/genoma',[
            'id'=>2,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto2->id
        ]);
        // primer genoma
        $post= Genoma::findOrFail(2);// aca nos aprovechamos que sabemos que hay dos genomas con los id 1 y 2

        $response= $this->get('/genoma/'.$post->id);//llamo a la ruta;
        $response->assertOk();

        $this->assertDatabaseHas('genomas', [
            'id' => $post->id,
            'nombre' => $post->nombre,
            'apellido' => $post->apellido,
            'edad' => $post->edad,
            'category' => $post->category,
            'loc' => $post->loc,
            'idSujeto' => $post->idSujeto
        ]);

    }

    /** @test */
    public function testObtenerUnGenoma(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

         $sujeto1=factory(Sujeto::class)->create();//tengo datos par mis pruebas
         $genoma= $this->post('/genoma',[
            'id'=>1,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto1->id
        ]);
        $post= Genoma::first();

        $response= $this->get('/genoma/'.$post->id);//llamo a la ruta;
        $response->assertOk();

        $this->assertDatabaseHas('genomas', [
            'id' => $post->id,
            'nombre' => $post->nombre,
            'apellido' => $post->apellido,
            'edad' => $post->edad,
            'category' => $post->category,
            'loc' => $post->loc,
            'idSujeto' => $post->idSujeto
        ]);

    }

    /** @test */
    public function testActualizarTablaGenoma(){
        $this->withoutExceptionHandling();// desactivamos las excepciones
        //** creo un genoma de prueba */
        $sujeto=factory(Sujeto::class)->create();
        
        $response= $this->post('/genoma',[
            'id'=>1,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(1,Genoma::all());
       
       //**obtengo el primer genoma guardado */

       
       $post= Genoma::first();
 
        $response= $this->put('/genoma/'.$post->id,[
            'nombre'=>'test nombre actualizado',
            'apellido'=>'test apellido actualizado',
            'edad'=>'test edad actualizado',
            'category'=>'test category actualizado',
            'loc'=>'test loc actualizado',
            'idSujeto'=>$sujeto->id
        ]);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(1,Genoma::all());//confirma si por lo menos hay un post en la tabla post
            
        $post = $post->fresh();

        $this->assertEquals($post->nombre,'test nombre actualizado');
        $this->assertEquals($post->apellido,'test apellido actualizado');
        $this->assertEquals($post->edad,'test edad actualizado');
        $this->assertEquals($post->category,'test category actualizado');
        $this->assertEquals($post->loc,'test loc actualizado');
        $this->assertEquals($post->idSujeto,$sujeto->id);

    }

    /** @test */
    public function testEliminarGenoma(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

        //** creo un genoma de prueba */
        $sujeto=factory(Sujeto::class)->create();
        
        $response= $this->post('/genoma',[
            'id'=>1,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(1,Genoma::all());
        //**obtengo el primer genoma guardado */
       $post= Genoma::first();
        $response= $this->delete('/genoma/'.$post->id);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(0,Genoma::all());//confirma si por lo menos hay un post en la tabla post

    }
}
