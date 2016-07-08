<?php

namespace App\Http\Controllers;

use DB;
use App\meuModel;
use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;

class MeuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('welcome');
    }

    public function usuarios(meuModel $mod)
    {
		$user = $mod->all();
//		$user = $mod->where('user_id', auth()->user()->id)->get();
        //$user = meuModel::all();
        //$user = meuModel::paginate(15);
        return view('usuarios',['users'=>$user]);
    }

    public function user($id)
    {
        $user = meuModel::find($id);
        return view('user',['user'=>$user]);
    }

    public function sobre(){
        return view('sobre');
    }

    public function contato()
    {
        return view('contato');
    }
    
    public function criar(){
        return view('criar');
    }

//    aqui estou usando o FormRequest mais posso tambem usar o metodo "rules" na minha model
    public function store(UserRequest $request)
    {
        $input = $request->all();
        //var_dump($input);
        //exit;
        meuModel::create($input);

        return redirect('usuarios')->with('status','Criado com Sucesso');
    }

    public function destroy($id)
    {
        $delete = meuModel::find($id);
        $delete->delete();
        return redirect('usuarios')->with('status1','Deletado com Sucesso');

//        meuModel::find($id)->delete();
//        return redirect('usuarios')->with('message','meuModel successfully added');
    }

    public function edit($id){
        $editar = meuModel::find($id);
        return view('edit', compact('editar'));
    }

//    aqui estou usando 2 metodos de validação aki usando o medoto validate "rules", que esta na minha model
//    la em cima no metodo store estou usando o FormRequest
    public function update(Request $request, $id)
    {
        $this->validate($request, meuModel::$rules);
        $update = meuModel::find($id)->update($request->all());

        return redirect('usuarios')->with('status','Atualizado com Sucesso');
    }

    public function search()
    {
        $nome = DB::table('meu_models')
            ->select('nome', 'email')
            ->where('nome',"LIKE","E%")
            ->get();

        return view('search', compact('nome'));
    }
}
