<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\consulta;
use App\Models\Paciente;
use App\Models\Funcionario;

class consultaController extends Controller{
    
    public function paciente(){
        $dados = [
            'menu'          => 3,
            'pacientes'     => Paciente::all(),
            'funcionarios'  => Funcionario::all()->where('profi', '=', 'MÉDICO'),
        ]; 
        return view('consulta', $dados);
    }
    
    public function consultaSalvar(Request $request){
        $request->validate([
            'NomePaciente'       => 'required',
            'NomeMedico'         => 'required',
            'Queixa'             => 'required',
            'Data'               => 'required',
            'InicioDurabilidade' => 'required',
            'HabitosVida'        => 'required',
            'TipoAlimento'       => 'required',
            'Inspersao'          => 'required',
            'Palpacao'           => 'required',
            'Percusao'           => 'required',
            'Ausculta'           => 'required',
            'Materias'           => 'required',
        ]);

        consulta::create($request->all()); 
        return redirect()->route('consultaListar')->with('ConsultaCadastrada', true);
    }

    public function consultaListar(Request $request){

        $exibirPorPagina = 5;
        $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
        
        if ($request->filtro) {
            $paginacao = consulta::where('NomePaciente', 'like', '%'.$request->filtro.'%')->orWhere('NomeMedico', 'like', '%'.$request->filtro.'%')->paginate($exibirPorPagina); //Exibe 5 elementos por página
            $consultas = consulta::where('NomePaciente', 'like', '%'.$request->filtro.'%')->orWhere('NomeMedico', 'like', '%'.$request->filtro.'%')->limit($exibirPorPagina) //Quantos valores devem ser exibido 
                        ->offset($offset) 
                        ->get();
        }  else {
            $paginacao = consulta::paginate($exibirPorPagina);
            $consultas = consulta::limit($exibirPorPagina) 
                            ->offset($offset)
                            ->get();
        }
        
        $dados = [
            'menu'       => 4, 
            'consultas'  => $consultas,
            'paginacao'  => $paginacao
        ];

        return view('listar', $dados);
    }

    public function consultaEditar($id){
        $dados = [
            'menu'          => 4,
            'consulta'      => consulta::find($id),
            'pacientes'     => Paciente::all(),
            'funcionarios'  => Funcionario::all()->where('profi', '=', 'MÉDICO')
        ];

        return view('consultaEditar', $dados);
    }

    public function consultaExcluir($id){ 

        consulta::destroy($id);
        return redirect()->route('consultaListar');
    }

    public function consultaVisualizar($id){ 
        $dados = [
            'menu'     => 4,
            'consulta' => consulta::find($id)
        ];

        return view('consultaVisualiza', $dados);
    }

    public function consultaAtualizar(Request $request, $id){ 
        $request->validate([
            'NomePaciente'       => 'required',
            'NomeMedico'         => 'required',
            'Queixa'             => 'required',
            'InicioDurabilidade' => 'required',
            'HabitosVida'        => 'required',
            'TipoAlimento'       => 'required',
            'Inspersao'          => 'required',
            'Palpacao'           => 'required',
            'Percusao'           => 'required',
            'Ausculta'           => 'required',
            'Materias'           => 'required',
        ]);

        consulta::where('id', $id)->update($request->all());

        return redirect()->route('consultaListar');
    }
  
}
