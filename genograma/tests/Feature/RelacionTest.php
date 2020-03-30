<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Sujeto;
use App\Genoma;
use App\Relacion;

/**
 * Para estas pruebas no realizaremos el TDD del metodo
 * listar todas las relaciones registradas en la base de datos, 
 * debido a que es similar a listar una relacion en la base de datos.
 * Ademas de tener que pasar un array de relaciones al metodo assertDatabaseHas
 * que aumenta la complejidad (autorizado por el profesor)
 */
class RelacionTest extends TestCase
{
    
    
    use RefreshDatabase; 

    /** @test */
    public function testRegistrarRelacion(){
        
        $this->withoutExceptionHandling();// desactivamos las excepciones
        /**datos de prueba */
        //creamos nuestro primer genoma.
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
        $Genoma1= Genoma::findOrFail(1);
        // creamos nuestro segundo genoma
        $response= $this->post('/genoma',[
            'id'=>2,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(2,Genoma::all());
        $Genoma2= Genoma::findOrFail(2);
        $relacion= $this->post('/relacion',[
            'id'=>1,
            'category'=>'test category',
            'from'=>$Genoma1->id,
            'to'=>$Genoma2->id,
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(1,Relacion::all());//confirma si por lo menos hay un post en la tabla post 
        $post = Relacion::first();

        $this->assertEquals($post->category,'test category');
        $this->assertEquals($post->from,$Genoma1->id);
        $this->assertEquals($post->to,$Genoma2->id);
        $this->assertEquals($post->idSujeto,$sujeto->id);

    }


    /**no lo e probado aun */
    public function testObtenerUnRelacion(){
        /**Creamos una relacion */
        $this->withoutExceptionHandling();// desactivamos las excepciones
        /**datos de prueba */
        //creamos nuestro primer genoma.
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
        $Genoma1= Genoma::findOrFail(1);
        // creamos nuestro segundo genoma
        $response= $this->post('/genoma',[
            'id'=>2,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(2,Genoma::all());
        $Genoma2= Genoma::findOrFail(2);
        $relacion= $this->post('/relacion',[
            'id'=>1,
            'category'=>'test category',
            'from'=>$Genoma1->id,
            'to'=>$Genoma2->id,
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(1,Relacion::all());//confirma si por lo menos hay un post en la tabla post 
        /**Una vez creada obtenemos la unica relacion registrada en la base de datos */
        $post= Relacion::first();

        $response= $this->get('/relacion/'.$post->id);//llamo a la ruta;
        $response->assertOk();

        $this->assertDatabaseHas('relacions', [
            'category' => $post->category,
            'from' => $post->from,
            'to' => $post->to,
            'idSujeto' => $post->idSujeto
        ]);
    }

    /** @test */
    public function testActualizarTablaRelacion(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

        /**datos de prueba */
        //creamos nuestro primer genoma.
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
        $Genoma1= Genoma::findOrFail(1);
        // creamos nuestro segundo genoma
        $response= $this->post('/genoma',[
            'id'=>2,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(2,Genoma::all());
        $Genoma2= Genoma::findOrFail(2);
        $relacion= $this->post('/relacion',[
            'id'=>1,
            'category'=>'test category',
            'from'=>$Genoma1->id,
            'to'=>$Genoma2->id,
            'idSujeto'=>$sujeto->id
        ]);
       //**obtengo la primera relacion guardada en la base de datos */
       $post= Relacion::first();
 
        $response= $this->put('/relacion/'.$post->id,[
            'category'=>'test category actualizada',
            'from'=>$Genoma1->id,
            'to'=>$Genoma2->id,
            'idSujeto'=>$sujeto->id
        ]);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(1,Relacion::all());//confirma si por lo menos hay un post en la tabla post
            
        $post = $post->fresh();

        $this->assertEquals($post->category,'test category actualizada');
        $this->assertEquals($post->from,$Genoma1->id);
        $this->assertEquals($post->to,$Genoma2->id);
        $this->assertEquals($post->idSujeto,$sujeto->id);
    }

    /** @test */
    public function testEliminarRelacion(){
        $this->withoutExceptionHandling();// desactivamos las excepciones

        //** creo un datos de prueba */
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
        $Genoma1= Genoma::findOrFail(1);
        // creamos nuestro segundo genoma
        $response= $this->post('/genoma',[
            'id'=>2,
            'nombre'=>'test nombre',
            'apellido'=>'test apellido',
            'edad'=>'test edad',
            'category'=>'test category',
            'loc'=>'test loc',
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(2,Genoma::all());
        $Genoma2= Genoma::findOrFail(2);
        $relacion= $this->post('/relacion',[
            'id'=>1,
            'category'=>'test category',
            'from'=>$Genoma1->id,
            'to'=>$Genoma2->id,
            'idSujeto'=>$sujeto->id
        ]);
        $this->assertCount(1,Relacion::all());
        
        //**obtengo el primer genoma guardado */
       $post= Relacion::first();
        $response= $this->delete('/relacion/'.$post->id);

        //$response->assertOK();//confirme que no hay ningun error
        //confirma que estas contando un post en mi tabla de post
        $this->assertCount(0,Relacion::all());//confirma si por lo menos hay un post en la tabla post
    }

}
