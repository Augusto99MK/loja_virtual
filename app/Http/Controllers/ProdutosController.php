<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    public function index()
{
    $produtos = Produtos::all();
    return view('home', ['produtos' => $produtos]);
}

    public function create()
    {
        return view('criar_produtos');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'imagem' => 'required|image',
        ]);

        $imageName = time() . '.' . $request->imagem->extension();
        $request->imagem->move(public_path('images'), $imageName);

        $novoProduto = new Produtos();
        $novoProduto->nome = $request->nome;
        $novoProduto->preco = $request->preco;
        $novoProduto->imagem = $imageName;

        if ($novoProduto->save()) {
            return redirect('/produtos');
        }
    }

    public function show(Produtos $produtos)
    {
        return view('show', ['produtos' => $produtos]);
    }

    public function edit($id)
    {
        $produtos = Produtos::find($id);

        return view('editar_produtos', ['produtos' => $produtos]);
    }

    public function update(Request $request, Produtos $produtos)
    {
        $produtos->nome = $request->nome;
        $produtos->preco = $request->preco;

        if ($request->hasFile('imagem')) {
            $imageName = time() . '.' . $request->imagem->extension();
            $request->imagem->move(public_path('images'), $imageName);
            $produtos->imagem = $imageName;
        }


        if ($produtos->save()) {
            return redirect('/produtos');
        } else {
        }
    }
    //

    public function destroy($id)
    {
        $product = Produtos::findOrFail($id);
        $product->delete();

        return redirect()->route('home')->with('success', 'Product deleted successfully');
    }
}