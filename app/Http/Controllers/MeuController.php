<?php

namespace App\Http\Controllers;

use App\logUser;
use DB;
use Gate;
use App\meuModel;
use Illuminate\Http\Request;
use DateTime;
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
//		$user = $mod->all()->orderBy('nome', 'ASC')->get();
//		$user = $mod->where('user_id', auth()->user()->id)->get();
//        $user = $mod->all();
       $user = $mod::paginate(15);
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

        $file = $request->file('documento');
        $salvar = storage_path().'/documentos/';
        $nomeFile = $file->getClientOriginalName();

        $fileModel = new \App\meuModel();

        $fileModel->documento = $nomeFile;

        $file->move($salvar, $nomeFile);
        meuModel::create($input);

        $LogUser = new logUser();
        $arrDados = array([
            'acao' => 'INSERIDO/CRIADO',
            'data' => new DateTime(),
            'usuario' => 'nome',
        ]);
        $arrDados = $LogUser::insert($arrDados);

        return redirect('usuarios')->with('status','Criado com Sucesso');
    }

    public function download($id)
    {
        $file = \App\meuModel::find($id);
        $salvar = storage_path().'/documentos/';
//        dd($salvar);
        return \Response::download($salvar.'/'.$file->documento);
    }

    public function destroy($id)
    {
        $delete = meuModel::find($id);
        $delete->delete();
        //meuModel::find($id)->delete();

        $LogUser = new logUser();
        $arrDados = array([
            'acao' => 'EXCLUIDO',
            'data' => new DateTime('now'),
            'usuario' =>  '',
        ]);
        $arrDados = $LogUser::insert($arrDados);

        return redirect('usuarios')->with('status1','Deletado com Sucesso');

//        meuModel::find($id)->delete();
//        return redirect('usuarios')->with('message','meuModel successfully added');
    }

    public function edit($id){
        $editar = meuModel::find($id);
        if( Gate::denies('autorizacao', $editar))
            abort(403,'Não Autorizado ');

        $LogUser = new logUser();
        $arrDados = array([
            'acao' => 'EDITADO',
            'data' => new DateTime('now'),
            'usuario' => 'user',
        ]);
        $arrDados = $LogUser::insert($arrDados);
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

    public function search(Request $request)
    {
        $post = $request->all();
        $nomePost = isset($post['nome']) ? $post['nome'] : "";
        $nome = DB::table('meu_models')
            ->select('id','nome', 'email', 'cidade')
            ->where('nome',"LIKE", "%$nomePost%")
            ->orWhere('id' , "LIKE",   "$nomePost")
            ->orderBy('nome', 'ASC')
            ->get();

        return view('search', compact('nome'));
    }
}
