<?php

namespace App\Http\Controllers;

use App\Models\Conteiner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConteinerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


   public function index(){
    $dados = DB::select("SELECT u.name, c.id,  c.nr_conteiner, c.tp_conteiner, c.status, c.categoria FROM conteiners c INNER JOIN users u ON(c.cliente_id=u.id) GROUP BY u.name, c.nr_conteiner, c.tp_conteiner, c.status, c.id, c.categoria");
    return view('conteiners.index', compact('dados'));
   }

   public function create(){
    $dados = User::all();
    return view('conteiners.create', compact('dados'));
   }

   public function store(Request $request){
    $conteiners =  new Conteiner();
    $conteiners->cliente_id = $request->cliente;
    $conteiners->nr_conteiner = $request->formatCtext.$request->formatCnumber;
    $conteiners->tp_conteiner = $request->tp_conteiner;
    $conteiners->status = $request->status;
    $conteiners->categoria = $request->categoria;
    $conteiners->save();

    return redirect()->route('conteiners.index')->with('success', 'Conteiner criado com sucesso !!');
   }

   public function delete($id){
    $container = Conteiner::find($id);
    $container->delete();

    return redirect()->route('conteiners.index')->with('success', 'Conteiner deletado com sucesso!!');
   }

   public function edit($id){
    $container = Conteiner::find($id);
    return redirect()->route('conteiners.edit', compact('container'));
   }
}
