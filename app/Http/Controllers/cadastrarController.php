<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Funcionario;

class cadastrarController extends Controller{

    public function paciente(){
        $dados['menu'] = 1;
        return view('Cadastrar-p', $dados);
    }

    public function pacienteSalvar(Request $request){ 
        $request->validate([
            'Foto'             => 'required',
            'Nome'             => 'required',
            'Cpf'              => 'required',
            'Rg'               => 'required',
            'Telefone-p'       => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Plano'            => 'required',
            'Inscricao'        => 'required',
            'Validade'         => 'required|date',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        $dados = Paciente::create($request->all());

        if(isset($request->Foto)){
            $this->SalvarFoto($dados, $request); 
        }
        return redirect()->route('paciente-listar');
    }

    public function pacienteListar(Request $request){

        
       $exibirPorPagina = 5;
       $offset = ($exibirPorPagina * ($request->query('page', 1)-1));

       if ($request->filtro) {
           $paginacao = Paciente::where('Nome', 'like', '%'.$request->filtro.'%')->paginate($exibirPorPagina); 
           $pacientes = Paciente::where('Nome', 'like', '%'.$request->filtro.'%')->limit($exibirPorPagina) 
                       ->offset($offset) 
                       ->get();
       }  else {
           $paginacao = Paciente::paginate($exibirPorPagina); 
           $pacientes = Paciente::limit($exibirPorPagina) 
                           ->offset($offset)
                           ->get();
       }

        $dados = [
            'menu'       => 6,
            'pacientes'  => $pacientes,
            'paginacao'  => $paginacao
        ];

        return view('listarPaciente', $dados);
    }

    public function pacienteEditar($id){
        $dados = [
            'menu'      => 6,
            'pacientes' => Paciente::find($id)
        ];

        return view('PacienteEditar', $dados);
    }

    public function pacienteExcluir($id){

        Paciente::destroy($id);
        return redirect()->route('paciente-listar');
    }

    public function pacienteVisualizar($id){ 
        $dados = [
            'menu'      => 6,
            'pacientes' => Paciente::find($id)
        ];

        return view('paciente-visualizar', $dados);
    }

    public function pacienteAtualizar(Request $request, $id){
        $request->validate([
            'Nome'             => 'required',
            'Cpf'              => 'required',
            'Rg'               => 'required',
            'Telefonep'        => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Plano'            => 'required',
            'Inscricao'        => 'required',
            'Validade'         => 'required',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        if(isset($request->Foto)){
            $nomeDaImagem = $request->Foto->getClientOriginalName(); 
            $caminho = 'storage/paciente/'.$nomeDaImagem; 
            $imagem = $request->Foto;  
            $imagem->storeAs('paciente',$nomeDaImagem,'public'); 

            $dados321 = Paciente::where('id', $id)->update([
                'Foto' => $caminho
                ]);
        }

        $dados123 = Paciente::where('id', $id)->update([
            'Nome'             => $request->Nome,
            'Cpf'              => $request->Cpf,
            'Rg'               => $request->Rg,
            'Telefone-p'       => $request->Telefonep,
            'Data'             => $request->Data,
            'Sexo'             => $request->sexo,
            'estado'           => $request->estado,
            'escola'           => $request->escola,
            'profi'            => $request->profi,
            'cidade'           => $request->cidade,
            'convenio'         => $request->convenio,
            'cor'              => $request->cor,
            'rh'               => $request->rh,
            'tipo'             => $request->tipo,
            'radioH'           => $request->radioH,
            'Chere'            => $request->Chere,
            'radioD'           => $request->radioD,
            'CDiab'            => $request->CDiab,
            'radioHI'          => $request->radioHI,
            'Chiper'           => $request->Chiper,
            'radioT'           => $request->radioT,
            'Cclini'           => $request->Cclini,
            'radioC'           => $request->radioC,
            'Cdoen'            => $request->Cdoen,
            'radioN'           => $request->radioN,
            'Cneopla'          => $request->Cneopla,
            'radioFA'          => $request->radioFA,
            'Cfarma'           => $request->Cfarma,
            'radioDRO'         => $request->radioDRO,
            'Cuso'             => $request->Cuso,
            'radioAL'          => $request->radioAL,
            'Calerg'           => $request->Calerg,
            'radioET'          => $request->radioET,
            'Cetili'           => $request->Cetili,
            'radioVA'          => $request->radioVA,
            'Cvacina'          => $request->Cvacina,
            'radioCI'          => $request->radioCI,
            'Ccirur'           => $request->Ccirur,
            'radioTRA'         => $request->radioTRA,
            'Cporta'           => $request->Cporta,
            'radioMAR'         => $request->radioMAR,
            'Cmarca'           => $request->Cmarca,
            'radioEP'          => $request->radioEP,
            'Ceplis'           => $request->Ceplis,
            'Email'            => $request->Email,
            'Cep'              => $request->Cep,
            'Uf'               => $request->Uf,
            'Endereco'         => $request->Endereco,
            'Bairro'           => $request->Bairro,
            'Numero'           => $request->Numero,
            'Complemento'      => $request->Complemento,
            'Parente'          => $request->Parente,
            'Parentent-tele'   => $request->Parententtele,
            'Parente-1'        => $request->Parente1,
            'Parentent-tele-1' => $request->Parententtele1,
            'Plano'            => $request->Plano,
            'Inscricao'        => $request->Inscricao,
            'Validade'         => $request->Validade,
            'Peso'             => $request->Peso,
            'Altura'           => $request->Altura,
            ]);

        return redirect()->route('paciente-listar');
    }

    public function Ficha($id){ 
        $dados = [
            'menu'  => 6,
            'Ficha' => Paciente::find($id)
        ];

        return view('FichaPaciente', $dados);
    }

    public function SalvarFoto(Paciente $dados, Request $request): void{

        $nomeDaImagem = $request->Foto->getClientOriginalName();
        $caminho = 'storage/paciente/'.$nomeDaImagem; 
        $imagem = $request->Foto; 
        $imagem->storeAs('paciente',$nomeDaImagem,'public'); 


        $FotoPaciente = $caminho;

        $dados->Foto = $FotoPaciente;
        $dados->save();
    }

   
    public function funcionario(){ 
        $dados['menu'] = 2;
        return view('cadastrar_funcionario', $dados);
    }

    public function funcionarioSalvar(Request $request){
        $request->validate([
            'Nome'             => 'required',
            'Cpf'              => 'required',
            'Rg'               => 'required',
            'Foto'             => 'required',
            'Telefone-p'       => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        $dados = Funcionario::create($request->all());

        $this->SalvarFotoFuncionario($dados, $request);

        return redirect()->route('funcionario-listar');
    }

    public function funcionarioListar(Request $request){

       
       $exibirPorPagina = 5;
       $offset = ($exibirPorPagina * ($request->query('page', 1)-1));

       if ($request->filtro) {
           $paginacao = Funcionario::where('Nome', 'like', '%'.$request->filtro.'%')->paginate($exibirPorPagina); 
           $Funcionarios = Funcionario::where('Nome', 'like', '%'.$request->filtro.'%')->limit($exibirPorPagina) 
                       ->offset($offset)
                       ->get();
       }  else {
           $paginacao = Funcionario::paginate($exibirPorPagina); 
           $Funcionarios = Funcionario::limit($exibirPorPagina) 
                           ->offset($offset) 
                           ->get();
       }

        $dados = [
            'menu'          => 7,
            'Funcionarios'  => $Funcionarios,
            'paginacao'     => $paginacao
        ];

        return view('listarFuncionario', $dados);
    }

    public function funcionarioEditar($id){ 
        $dados = [
            'menu'         => 7,
            'Funcionarios' => Funcionario::find($id)
        ];

        return view('FuncionarioEditar', $dados);
    }

    public function funcionarioExcluir($id){

        Funcionario::destroy($id);
        return redirect()->route('funcionario-listar');
    }

    public function funcionarioVisualizar($id){
        $dados = [
            'menu'         => 7,
            'Funcionarios' => Funcionario::find($id)
        ];

        return view('FuncionarioVisualizar', $dados);
    }

    public function funcionarioAtualizar(Request $request, $id){
        $request->validate([
            'Nome'             => 'required',
            'Cpf'              => 'required',
            'Rg'               => 'required',
            'Telefonep'        => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

       $dados123 = Funcionario::where('id', $id)->update([
           'Nome'             => $request->Nome,
           'Cpf'              => $request->Cpf,
           'Rg'               => $request->Rg,
           'Telefone-p'       => $request->Telefonep,
           'Data'             => $request->Data,
           'Sexo'             => $request->sexo,
           'estado'           => $request->estado,
           'escola'           => $request->escola,
           'profi'            => $request->profi,
           'cidade'           => $request->cidade,
           'cor'              => $request->cor,
           'rh'               => $request->rh,
           'tipo'             => $request->tipo,
           'radioH'           => $request->radioH,
           'Chere'            => $request->Chere,
           'radioD'           => $request->radioD,
           'CDiab'            => $request->CDiab,
           'radioHI'          => $request->radioHI,
           'Chiper'           => $request->Chiper,
           'radioT'           => $request->radioT,
           'Cclini'           => $request->Cclini,
           'radioC'           => $request->radioC,
           'Cdoen'            => $request->Cdoen,
           'radioN'           => $request->radioN,
           'Cneopla'          => $request->Cneopla,
           'radioFA'          => $request->radioFA,
           'Cfarma'           => $request->Cfarma,
           'radioDRO'         => $request->radioDRO,
           'Cuso'             => $request->Cuso,
           'radioAL'          => $request->radioAL,
           'Calerg'           => $request->Calerg,
           'radioET'          => $request->radioET,
           'Cetili'           => $request->Cetili,
           'radioVA'          => $request->radioVA,
           'Cvacina'          => $request->Cvacina,
           'radioCI'          => $request->radioCI,
           'Ccirur'           => $request->Ccirur,
           'radioTRA'         => $request->radioTRA,
           'Cporta'           => $request->Cporta,
           'radioMAR'         => $request->radioMAR,
           'Cmarca'           => $request->Cmarca,
           'radioEP'          => $request->radioEP,
           'Ceplis'           => $request->Ceplis,
           'Email'            => $request->Email,
           'Cep'              => $request->Cep,
           'Uf'               => $request->Uf,
           'Endereco'         => $request->Endereco,
           'Bairro'           => $request->Bairro,
           'Numero'           => $request->Numero,
           'Complemento'      => $request->Complemento,
           'Parente'          => $request->Parente,
           'Parentent-tele'   => $request->Parententtele,
           'Parente-1'        => $request->Parente1,
           'Parentent-tele-1' => $request->Parententtele1,
           'Peso'             => $request->Peso,
           'Altura'           => $request->Altura,
           'TIPO_PERMISAO'    => $request->TIPO_PERMISAO,
           'Crm'              => $request->Crm,
           ]);

        if(isset($request->Foto)){
        $nomeDaImagem = $request->Foto->getClientOriginalName();
        $caminho = 'storage/Funcionario/'.$nomeDaImagem; 
        $imagem = $request->Foto; 
        $imagem->storeAs('Funcionario',$nomeDaImagem,'public');
        

        $dados321 = Funcionario::where('id', $id)->update([
              'Foto' => $caminho
              ]);   
      }

        return redirect()->route('funcionario-listar');
    }

    public function SalvarFotoFuncionario(Funcionario $dados, Request $request): void{ 

        
        $nomeDaImagem = $request->Foto->getClientOriginalName(); 
        $caminho = 'storage/Funcionario/'.$nomeDaImagem; 
        $imagem = $request->Foto;  
        $imagem->storeAs('Funcionario',$nomeDaImagem,'public'); 
       

        $FotoFuncionario = $caminho;

       
        $dados->Foto = $FotoFuncionario;
        $dados->save();
    }
}
