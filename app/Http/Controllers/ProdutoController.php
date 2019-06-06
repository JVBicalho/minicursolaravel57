<?php

namespace App\Http\Controllers;


use  App\Model\Produto;
Use illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Testing\Constraints\SoftDeletedInDatabase;
use App\Model\Estoque;

class ProdutoController extends Controller
{
    /**
     * Retorna todos os produtos
     */
    public function index(){
        $produtos = Produto::Paginate(10);

        return view('home',compact('produtos'));

    }
    public function new(Request $request){
        $file= Input::file('img');
        //dd($file);
        $nameFile = NULL;
        if($file){

                $name = uniqid(config('app.name').date('HisYmd'));
                $extension = $file->extension();
                $nameFile ="{$name}.{$extension}";
                $upload =$file->storeAs('public/prod',$nameFile);
                if (!$upload) {
                    return redirect()->back()->with('error','Falha no upload do arquivo')->withInput();
                }else{
                    $dados =[
                        'name'=>$request->name,
                        'descricao'=> $request->descricao,
                        'img'=> $nameFile,
                    ];
                    $produto = new Produto($dados);
                    $produto->save();
                    Estoque::create([
                        'produto_id' => $produto->id,
                        'quantidade' => Input::get('quantidade')
                    ]);

                    return redirect()->route('produto.detalhes',$produto->id);
                }


        }else{
            return redirect()->back()->with('toastr')->with('error','Nenhum arquivo selecionado!');
        }

    }
    public function detalhes($id){
        $produto = Produto::find($id);
        //dd($produto);
        return view('produto',compact('produto'));
    }
    public function estoque($id){
        $dados =[
            'produto_id'=>$id,
            'quantidade' =>Input::get('quantidade'),
        ];
        $est = new Estoque($dados);
        $est->save();
        //dd($est);
        return redirect()->back();
    }
    public function delete($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->back();
    }

}
