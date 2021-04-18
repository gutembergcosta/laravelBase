<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ModelItem;
use App\Models\ModelCategoria;

class Item extends Controller
{
    
    private $mdlItem;
    private $mdlCategoria;

    public function __construct(){

        $this->mdlItem = new ModelItem();
        $this->mdlCategoria = new ModelCategoria();
    }

    public function pagina($id = false)
    {
        if($id){
            $data['item'] = $this->mdlItem->find($id);
        }

        $data['categorias'] = $this->mdlCategoria->all()->sortByDesc('nome');
        $data['lista'] = $this->mdlItem->all()->sortByDesc('nome');

        return view('start')->with('data', $data);
    }

    public function salvar(Request $request)
    {
        request()->validate([
            'nome' => 'required',
            'categoria' => 'required',
        ]);
      
        $data['nome'] = $request->nome;
        $data['id_categoria'] = $request->categoria;
        $data['id_user'] = 0;
        $data['tipo'] = 'teste';

        if($request->id){
            if($this->mdlItem->where(['id' => $request->id])->update($data)){
                $msg['tipo'] = 'success';
                $msg['texto'] = 'Item atualizado com sucesso';
            };
        }else{
            if($this->mdlItem->create($data)){
                $msg['tipo'] = 'successso';
                $msg['texto'] = 'Item inserido com sucesso';
            }
        }

        return redirect('item')->with('msg', $msg);
    }

    public function deletar($id)
    {
        if($this->mdlItem->destroy($id)){
            return response()->json([
                'status' => 0,
                'msg' => 'Registro excluído com sucesso!'
            ]);    
        }
    }

}
