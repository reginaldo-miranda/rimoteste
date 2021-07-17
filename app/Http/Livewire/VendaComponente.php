<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\vendas;
use App\models\produto;
use App\models\vendasitens;
use App\Http\Livewire\document;
use App\Http\Livewire\produtos;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
//use App\Http\Livewire\DB;
use Livewire\WithPagination;

class VendaComponente extends Component
{
    public $vendab;
    
    public $id_cliente;
    
    public $prod_id;
    
    public $nome = 'jose';

    public $descricao;
    public $grupo;
    public $pvenda;
    public $buscapdv;
    public $id_venda;
    public $view ='formpdv';
    public $cliente = 1;
    public $qde=2;
    public $valortotal=100;
    public $status = 1;
    public $fechado = 2;

    public $post;
    public $totalvenda, $totalv;

    /*
        public function render()
        {

            // $venda = DB::table('vendas')->get();
            $vendab = vendas::get();
            //dd($vendab);
            // return view('livewire.venda-componente');
            // return view('livewire.pdv_form',['vendas' => $venda]);
            // return view('livewire.venda-componente',['vendas' => $vendab]);

        return view('livewire.venda-componente',['vendas' => $vendab]);

        }



        public function abrir(){

            $status = 1;

            $venda = vendas::create([
                // 'id_cliente' =>$this->cliente,
                // 'valor_total'=>$this->valortotal,
               'statusvenda'=>$status,

           ]);

          // dd($vendapdv);
           //return view('livewire.pdv_form',['vendas' => $vendapdv]);
         }
         public function edit($id){


            $produtos = produto::find($id);


            $this->prod_id   = $produtos->id;
            $this->descricao = $produtos->descricao;
            $this->grupo     = $produtos->grupo;
            $this->pvenda    = $produtos->pvenda;
            $this->gravar();
          //  return view('livewire.vendaitens-componente',['produtos'=> $produtos]);
        }


        public function gravar(){
            $vendaitens = vendasitens::create([

                'id_cliente' =>$this->cliente,
                'id_produto' =>$this->prod_id,
                'qde'        => $this->qde,
                'valorunit'  => $this->pvenda,
                'status'     =>$this->status

              ]);

              $vendaitens->refresh();

              $this->prod_id = '';
              //  $this->getfocus(id);va
              //  $this->view = 'pdvbusca';
              //  return back()->withInput();
            //  $totalvenda  = DB::select("SELECT SUM(qde * valorunit)
             // FROM vendasitens WHERE status = 1;");
             //dd($totalvenda);

            //return view('livewire.vendaitens-componente',['vendaitens'=> $totalvenda]);
        }

    }
    */



    public function render()
    {
        $produtos = DB::table('vendasitens')
           
    ->select('vendasitens.*', 'produtos.descricao')
    ->join('produtos', 'produtos.id', '=', 'vendasitens.id_produto')->where('status', '=', 1)->get();
        $this ->somar();
        return view('livewire.venda-componente', ['produtos'=> $produtos]);
    }
        public function somar(){
            
            $totalvenda  = DB::select("SELECT SUM(qde * valorunit) as totalv
            FROM vendasitens WHERE status = 1;");
           //dd($totalvenda);
          
           return redirect('/');
         
      }
    
/*
    public function somaritens()
    {
        $totalvenda = DB::select("SELECT qde*valorunit FROM vendasitens WHERE status = 1;");
        dd($totalvenda);
     }
*/
    public function edit($id)
    {
        $produtos = produto::find($id);

        $this->prod_id   = $produtos->id;
        $this->descricao = $produtos->descricao;
        $this->grupo     = $produtos->grupo;
        $this->pvenda    = $produtos->pvenda;
        $this->gravar();
        //  return view('livewire.vendaitens-componente',['produtos'=> $produtos]);
    }


    public function abrir()
    {
        $status = 1;
     
        $venda = vendas::create([
        // 'id_cliente' =>$this->cliente,
        // 'valor_total'=>$this->valortotal,
       'statusvenda'=>$status,
       
                    
   ]);

        // dd($vendapdv);
   //return view('livewire.pdv_form',['vendas' => $vendapdv]);
    }

    public function gravar()
    {
        $vendaitens = vendasitens::create([
    
        'id_cliente' => $this->cliente,
        'id_produto' => $this->prod_id,
        'qde'        => $this->qde,
        'valorunit'  => $this->pvenda,
        'status'     => $this->status
       
      ]);

        $vendaitens->refresh();

        $this->prod_id = '';

        //  $this->getfocus(id);va
      //  $this->view = 'pdvbusca';
      //  return back()->withInput();
      //  $totalvenda  = DB::select("SELECT SUM(qde * valorunit)
      //  FROM vendasitens WHERE status = 1;");
      //  dd($totalvenda);
      
      //return view('livewire.vendaitens-componente',['vendaitens'=> $totalvenda]);
    }

    public function destruir($id)
    {
        vendasitens::destroy($id);
    }

    public function fecharvenda()
    {
        $produtos =  DB::update("update vendasitens SET STATUS = 2 WHERE id_cliente = 1");

        /*   $produtos = DB::table('vendasitens')
            ->join('produtos', 'produtos.id', '=', 'produtos.id')
            ->where('status', '=' , 1)
            ->select('vendasitens.*','produtos.descricao')->get();
            return view('livewire.vendaitens-componente',['produtos'=> $produtos]);
            return view('livewire.vendaitens-componente');
            /<script>
               $("#botaoabir").show();
            </script>
         */
    }

    public function default()
    {
        // $this->nome = '';
  // $this->fone = '';
  // $this->view = ('livewire.vendaitens-componente');
    }

    public function checar()
    {
        $produtos = DB::table('vendasitens')->where('status', '=', 1)->get();
        $status = 1;
        $this->abrir($status);

        return view('livewire.pdv_form', ['vendasitens'=> $produtos]);
    }
}




/*
exemplo de join

$users = DB::table('users')
    ->join('contacts', 'users.id', '=', 'contacts.user_id')
    ->join('orders', 'users.id', '=', 'orders.user_id')
    ->select('users.*', 'contacts.phone', 'orders.price')
    ->get();
*/

 