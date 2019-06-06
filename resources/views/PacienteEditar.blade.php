@extends('NavBar')
@section('body')

  <div class="container">
      <!-- Cadastrar Paciente -->
      <h2>Cadastrar Paciente</h2>
      <ul class="nav nav-tabs">
          <!-- Abbas do cadastro -->
          <li class="active"><a data-toggle="tab" href="#DadosPessoais">Dados Pessoais</a></li>
          <li><a data-toggle="tab" href="#Endereco">Endereço</a></li>
          <li><a data-toggle="tab" href="#Contato">Familiares para contato</a></li>
          <li><a data-toggle="tab" href="#financeiro">Finânceiro</a></li>
          <li><a data-toggle="tab" href="#clinicos1">Dados Clínicos 1</a></li>
          <li><a data-toggle="tab" href="#clinicos2">Clínicos 2</a></li>
          <li><a data-toggle="tab" href="#clinicos3">Clínicos 3</a></li>
          <li><a data-toggle="tab" href="#clinicos4">Clínicos 4</a></li>
      </ul>

      <div class="tab-content">

        <div id="DadosPessoais" class="tab-pane fade in active">
            <!-- Dados do pacientes-->

            <form action="{{ route('paciente-atualizar', ['id' => $pacientes['id']]) }}" method="post" enctype="multipart/form-data">
               @csrf
                    <h3>Dados Paciente</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="campo-foto">FOTO</label>
                        </br>
                        <img src="{{url($pacientes->Foto)}}">
                        <input type="file" class="form-control" name="Foto" id="campo-foto">
                    </div>

                    <label for=""><b>MATRICULA</b></label>
                    <input type="text" placeholder="Entre com sua Matricula" name="id" value="{{old('id',$pacientes['id'])}}" disabled>

                    <label for=""><b>NOME</b></label>
                    <input type="text" placeholder="Enter com seu nome" name="Nome" value="{{old('Nome',$pacientes['Nome'])}}" OnKeyPress="if (isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" value="{{old('Cpf',$pacientes['Cpf'])}}" maxlength="14" OnKeyPress="formatar('###.###.###-##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" onblur="validarCPF(this)">

                    <label for=""><b>RG</b></label>
                    <input type="text" placeholder="Entre com seu RG" name="Rg" value="{{old('Rg',$pacientes['Rg'])}}" maxlength="14" OnKeyPress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

                    <label for=""><b>TELEFONE</b></label>
                    <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefonep" value="{{old('Telefone-p',$pacientes['Telefone-p'])}}" maxlength="14" OnKeyPress="formatar('## # ####-####', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

                    <label for="Data">DATA DE NASCIMENTO</label>
                    <div class="input-group date">
                        <input type="date" class="form-control" id="Data" name="Data" maxlength="10" value="{{old('Data',$pacientes['Data'])}}">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>

                      <label for=""><b>NATURALIDADE</b></label>
                      <select class="form-control" id="gender1" name="Naturalidade" value="{{old('Naturalidade',$pacientes['Naturalidade'])}}">
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "BRASIL") selected @endif value="BRASIL">BRASIL</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "ARGENTINA") selected @endif value="ARGENTINA">ARGENTINA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "CHILE") selected @endif value="CHILE">CHILE</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "COLÔMBIA") selected @endif value="COLÔMBIA">COLÔMBIA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "ESTADOS") selected @endif value="ESTADOS">ESTADOS UNIDOS</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "CANADA") selected @endif value="CANADA">CANADÁ</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "MEXICO") selected @endif value="MEXICO">MÉXICO</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "PORTUGAL") selected @endif value="PORTUGAL">PORTUGAL</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "FRANÇA") selected @endif value="FRANÇA">FRANÇA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "FRANÇA") selected @endif value="FRANÇA">ITáLIA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "FRANÇA") selected @endif value="FRANÇA">RÚSSIA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "JAPÃO") selected @endif value="JAPÃO">JAPÃO</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "CHINA") selected @endif value="CHINA">CHINA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "EGITO") selected @endif value="EGITO">EGITO</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "IRA") selected @endif value="IRA">IRÃ</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "HOLANDA") selected @endif value="HOLANDA">HOLANDA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "NORTE") selected @endif value="NORTE">COREIA DO NORTE</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "SUL") selected @endif value="SUL">COREIA DO SUL</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "ISRAEL") selected @endif value="ISRAEL">ISRAEL</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "CUBA") selected @endif value="CUBA">CUBA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "ESPANHA") selected @endif value="ESPANHA">ESPANHA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "INGLATERRA") selected @endif value="INGLATERRA">INGLATERRA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "NOVA") selected @endif value="NOVA">NOVA ZELANDIA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "CROCIA") selected @endif value="CROCIA">CROCIA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "PERU") selected @endif value="PERU">PERU</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "URUGUAI") selected @endif value="URUGUAI">URUGUAI</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "PARAGUAI") selected @endif value="PARAGUAI">PARAGUAI</option>
                      </select>

                      <label for=""><b>SEXO</b></label>
                      <select class="form-control" id="gender1" name="sexo" value="{{old('sexo',$pacientes['sexo'])}}">
                        <option @if(old('sexo',$pacientes['sexo']) == "MASC") selected @endif value="MASC">MASCULINO</option>
                        <option @if(old('sexo',$pacientes['sexo']) == "FEMIN") selected @endif value="FEMIN">FEMININO</option>
                        <option @if(old('sexo',$pacientes['sexo']) == "OUTRO") selected @endif value="OUTRO">OUTRO</option>
                      </select>
                      </br>

                      <label for=""><b>ESTADO CIVIL</b></label>
                      <select class="form-control" id="gender1" name="estado" value="{{old('estado',$pacientes['estado'])}}">
                        <option @if(old('estado',$pacientes['estado']) == "casado") selected @endif value="casado">CASADO</option>
                        <option @if(old('estado',$pacientes['estado']) == "solteiro") selected @endif value="solteiro">SOLTEIRO</option>
                        <option @if(old('estado',$pacientes['estado']) == "viuvo") selected @endif value="viuvo">VIUVO</option>
                        <option @if(old('estado',$pacientes['estado']) == "divorciado") selected @endif value="divorciado">DIVORCIADO</option>
                      </select>
                      </br>

                      <label for=""><b>E-MAIL</b></label>
                      <input type="text" placeholder="Entre com seu Email@email.com" name="Email" value="{{old('Email',$pacientes['Email'])}}">

                      <label for=""><b>ESCOLARIDADE</b></label>
                      <select class="form-control" id="gender1" name="escola" value="{{old('escola',$pacientes['escola'])}}">
                        <option @if(old('escola',$pacientes['escola']) == "FunINCOMPLETO") selected @endif value="FunINCOMPLETO">FUNDAMENTAL-INCOMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "FunCOMPLETO") selected @endif value="FunCOMPLETO">FUNDAMENTAL-COMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "SugSEGUNDO") selected @endif value="SugSEGUNDO">SEGUNDO GRAU-INCOMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "SugCOMPLETO") selected @endif value="SugCOMPLETO">SEGUNDO GRAU-COMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "SupINCOMPLETO") selected @endif value="SupINCOMPLETO">SUPERIOR-INCOMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "SupCOMPLETO") selected @endif value="SupCOMPLETO">SUPERIOR-COMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "MesINCOMPLETO") selected @endif value="MesINCOMPLETO">MESTRADO-INCOMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "MesCOMPLETO") selected @endif value="MesCOMPLETO">MESTRADO-COMPLETO</option>
                      </select>
                      </br>

                      <label for=""><b>PROFISSÃO</b></label>
                      <select class="form-control" id="gender1" name="profi" value="{{old('profi',$pacientes['profi'])}}">
                        <option @if(old('profi',$pacientes['profi']) == "MÉDICO") selected @endif value="MÉDICO">MÉDICO</option>
                        <option @if(old('profi',$pacientes['profi']) == "ENFERMEIRO") selected @endif value="ENFERMEIRO">ENFERMEIRO</option>
                        <option @if(old('profi',$pacientes['profi']) == "ARQUITETO") selected @endif value="ARQUITETO">ARQUITETO</option>
                        <option @if(old('profi',$pacientes['profi']) == "ENGENHEIRO") selected @endif value="ENGENHEIRO">ENGENHEIRO</option>
                        <option @if(old('profi',$pacientes['profi']) == "FISIOTERAPEUTA") selected @endif value="FISIOTERAPEUTA">FISIOTERAPEUTA</option>
                        <option @if(old('profi',$pacientes['profi']) == "ANALISTA") selected @endif value="ANALISTA">ANALISTA DE SISTEMAAS</option>
                        <option @if(old('profi',$pacientes['profi']) == "PROGRAMADOR") selected @endif value="PROGRAMADOR">PROGRAMADOR</option>
                        <option @if(old('profi',$pacientes['profi']) == "DENTISTA") selected @endif value="DENTISTA">DENTISTA</option>
                        <option @if(old('profi',$pacientes['profi']) == "PEDREIRO") selected @endif value="PEDREIRO">PEDREIRO</option>
                        <option @if(old('profi',$pacientes['profi']) == "SEGURANÇA") selected @endif value="SEGURANÇA">SEGURANÇA</option>
                        <option @if(old('profi',$pacientes['profi']) == "ADIMINISTRAÇÃO") selected @endif value="ADIMINISTRAÇÃO">ADIMINISTRAÇÃO</option>
                        <option @if(old('profi',$pacientes['profi']) == "FARMACIA") selected @endif value="FARMACIA">FARMACIA</option>
                        <option @if(old('profi',$pacientes['profi']) == "FÍSICA") selected @endif value="FÍSICA">EDUÇÃO FÍSICA</option>
                        <option @if(old('profi',$pacientes['profi']) == "MECANICO") selected @endif value="MECANICO">MECANICO</option>
                        <option @if(old('profi',$pacientes['profi']) == "PSICOLOGIA") selected @endif value="PSICOLOGIA">PSICOLOGIA</option>
                        <option @if(old('profi',$pacientes['profi']) == "FRETISTA") selected @endif value="FRETISTA">FRETISTA</option>
                        <option @if(old('profi',$pacientes['profi']) == "ELETRCISTA") selected @endif value="ELETRCISTA">ELETRCISTA</option>
                        <option @if(old('profi',$pacientes['profi']) == "EMPRESARIO") selected @endif value="EMPRESARIO">EMPRESARIO</option>
                        <option @if(old('profi',$pacientes['profi']) == "PROFESSOR") selected @endif value="PROFESSOR">PROFESSOR</option>
                        <option @if(old('profi',$pacientes['profi']) == "ATENDENTE") selected @endif value="ATENDENTE">ATENDENTE</option>
                        <option @if(old('profi',$pacientes['profi']) == "SECRETARIA") selected @endif value="SECRETARIA">SECRETARIA</option>
                        <option @if(old('profi',$pacientes['profi']) == "EDUCADOR") selected @endif value="EDUCADOR">EDUCADOR FISICO</option>
                        <option @if(old('profi',$pacientes['profi']) == "ATOR") selected @endif value="ATOR">ATOR</option>
                        <option @if(old('profi',$pacientes['profi']) == "PUBLICITARIO") selected @endif value="PUBLICITARIO">PUBLICITARIO</option>
                        <option @if(old('profi',$pacientes['profi']) == "MOTORISTA") selected @endif value="MOTORISTA">MOTORISTA</option>
                        <option @if(old('profi',$pacientes['profi']) == "MILITARS") selected @endif value="MILITAR">MILITAR</option>
                      </select>
                      </br>
        </div>

        <div id="Endereco" class="tab-pane fade">
            <!-- 2 Aba (aba dos enderço)-->

            <h3>Endereço</h3>

            <div class="form-group col-md-2">
                <label for="Cep"><b>CEP</b></label>
                <input type="text" placeholder="Enter com seu CEP" id="cep" name="Cep" value="{{old('Cep',$pacientes['Cep'])}}" maxlength="9" onblur="pesquisacep(this.value);" OnKeyPress="formatar('#####-###', this)">
                <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="_blank">Pesquisar CEP</a>
            </div>

            <label for="Uf"><b>UF</b></label>
            <input type="text" placeholder="Entre com seu UF" id="uf" name="Uf" value="{{old('Uf',$pacientes['Uf'])}}">

            <label for="cidade"><b>CIDADE</b></label>
            <select class="form-control" id="gender1" name="cidade">
              <option @if(old('cidade',$pacientes['cidade']) == "MACEIÓ") selected @endif value="MACEIÓ">MACEIÓ</option>
              <option @if(old('cidade',$pacientes['cidade']) == "CORURIPE") selected @endif value="CORURIPE">CORURIPE</option>
              <option @if(old('cidade',$pacientes['cidade']) == "RIO") selected @endif value="RIO">RIO DE JANEIRO</option>
              <option @if(old('cidade',$pacientes['cidade']) == "PAULO") selected @endif value="PAULO">SÃO PAULO</option>
              <option @if(old('cidade',$pacientes['cidade']) == "PARANA") selected @endif value="PARANA">PARANA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "SANTA") selected @endif value="SANTA">SANTA CATARINA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "RECIFE") selected @endif value="RECIFE">RECIFE</option>
              <option @if(old('cidade',$pacientes['cidade']) == "BAHIA") selected @endif value="BAHIA">BAHIA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "SERGIPE") selected @endif value="SERGIPE">SERGIPE</option>
              <option @if(old('cidade',$pacientes['cidade']) == "PERNABUCO") selected @endif value="PERNABUCO">PERNABUCO</option>
              <option @if(old('cidade',$pacientes['cidade']) == "GOIAS") selected @endif value="GOIAS">GOIAS</option>
              <option @if(old('cidade',$pacientes['cidade']) == "AMAZONAS") selected @endif value="AMAZONAS">AMAZONAS</option>
              <option @if(old('cidade',$pacientes['cidade']) == "FLORIPA") selected @endif value="FLORIPA">FLORIPA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "TEREZINA") selected @endif value="TEREZINA">TEREZINA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "FLORIPA") selected @endif value="TEREZINA">CURITIBA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "TEREZINA") selected @endif value="SANTOS">SANTOS</option>
              <option @if(old('cidade',$pacientes['cidade']) == "AMAPA") selected @endif value="AMAPA">AMAPA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "GRAMADOS") selected @endif value="GRAMADOS">GRAMADOS</option>
              <option @if(old('cidade',$pacientes['cidade']) == "ARACAJU") selected @endif value="ARACAJU">ARACAJU</option>
              <option @if(old('cidade',$pacientes['cidade']) == "JUENVILHE") selected @endif value="JUENVILHE">JUENVILHE</option>
              <option @if(old('cidade',$pacientes['cidade']) == "ANGRA") selected @endif value="ANGRA">ANGRA DOS REIS</option>
              <option @if(old('cidade',$pacientes['cidade']) == "SALVADOR") selected @endif value="SALVADOR">SALVADOR</option>
              <option @if(old('cidade',$pacientes['cidade']) == "MARACHAL") selected @endif value="MARACHAL">MARACHAL DEODORO</option>
              <option @if(old('cidade',$pacientes['cidade']) == "NATAL") selected @endif value="NATAL">NATAL</option>
              <option @if(old('cidade',$pacientes['cidade']) == "JOÃO") selected @endif value="JOÃO">JOÃO PESSOA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "ATALAIA") selected @endif value="ATALAIA">ATALAIA</option>
            </select>
            </br>

            <label for="endereco"><b>ENDEREÇO</b></label>
            <input type="text" placeholder="Entre com seu Endereço" id="rua" name="Endereco" value="{{old('Endereco',$pacientes['Endereco'])}}">

            <label for="bairro"><b>BAIRRO</b></label>
            <input type="text" placeholder="Entre com seu Bairro" id="bairro" name="Bairro" value="{{old('Bairro',$pacientes['Bairro'])}}">

            <label for="numero"><b>NÚMERO</b></label>
            <input type="text" placeholder="Entre com seu Número" name="Numero" value="{{old('Numero',$pacientes['Numero'])}}" OnKeyPress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

            <label for="complemento"><b>COMPLEMENTO</b></label>
            <input type="text" placeholder="Entre com seu Complemento" name="Complemento" value="{{old('Complemento',$pacientes['Complemento'])}}">
        </div>

        <div id="Contato" class="tab-pane fade">
            <!-- 3 Aba (aba dos contatos)-->
            <h3>Contatos</h3>
            <label for="parente"><b>RESPONSAVEL/PARENTE 1 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente" value="{{old('Parente',$pacientes['Parente'])}}">

            <label for="parentent-tele"><b>RESPONSAVEL/PARENTE  1 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parententtele" maxlength="14" value="{{old('Parentent-tele',$pacientes['Parentent-tele'])}}">

            <label for="parente-1"><b>RESPONSAVEL/PARENTE 2 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente1" value="{{old('Parente-1',$pacientes['Parente-1'])}}">

            <label for="parentent-tele-1"><b>RESPONSAVEL/PARENTE 2 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parententtele1" maxlength="14" value="{{old('Parentent-tele-1',$pacientes['Parentent-tele-1'])}}">
        </div>

        <div id="financeiro" class="tab-pane fade">
            <!-- 4 Aba (aba dos financeiro)-->
            <h3>Finânceiro</h3>

            <label for="convenio"><b>CONVÊNIO</b></label>
            <select class="form-control" id="gender1" name="convenio" value="{{old('convenio',$pacientes['convenio'])}}">
                <option @if(old('convenio',$pacientes['convenio']) == "UNIMED") selected @endif  value="UNIMED">UNIMED</option>
                <option @if(old('convenio',$pacientes['convenio']) == "HAPVIDA") selected @endif  value="HAPVIDA">HAPVIDA</option>
                <option @if(old('convenio',$pacientes['convenio']) == "SANDANDER") selected @endif  value="SANDANDER">SANDANDER</option>
                <option @if(old('convenio',$pacientes['convenio']) == "AMIL") selected @endif  value="AMIL">AMIL</option>
            </select>
            </br>

            <label for="Plano"><b>PLANO</b></label>
            <select class="form-control" id="Plano" name="Plano" value="{{old('Plano')}}">
                <option @if(old('Plano',$pacientes['Plano']) == "Individual") selected @endif value="Individual">Individual</option>
                <option @if(old('Plano',$pacientes['Plano']) == "Familiares") selected @endif value="Familiares">Familiares</option>
                <option @if(old('Plano',$pacientes['Plano']) == "Empresarias") selected @endif value="Empresarias">Empresarias</option>
                <option @if(old('Plano',$pacientes['Plano']) == "Hospitalares") selected @endif value="Hospitalares">Hospitalares</option>
            </select>

            <label for="Inscricao"><b>INSCRIÇÃO</b></label>
            <input type="text" placeholder="Entre com sua Inscrição" name="Inscricao" value="{{old('Inscricao',$pacientes['Inscricao'])}}" OnKeyPress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

            <label for="Validade">Validade</label>
            <div class="input-group date">
                <input type="date" class="form-control" id="Validade" name="Validade" maxlength="10" value="{{old('Validade',$pacientes['Validade'])}}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>
        </div>

        <div id="clinicos1" class="tab-pane fade">
            <!-- 5 Aba (aba dos dados clinicos)-->

            <h3>DADOS CLÍNICOS</h3>
          <label for="cor"><b>COR DA PELE</b></label>
          <select class="form-control" id="gender1" name="cor" value="{{old('cor',$pacientes['cor'])}}">
              <option @if(old('cor',$pacientes['cor']) == "BRANCA") selected @endif value="BRANCA">BRANCA</option>
              <option @if(old('cor',$pacientes['cor']) == "PARDA") selected @endif value="PARDA">PARDA</option>
              <option @if(old('cor',$pacientes['cor']) == "PRETA") selected @endif value="PRETA">PRETA</option>
              <option @if(old('cor',$pacientes['cor']) == "AMARELO") selected @endif value="AMARELO">AMARELO</option>
              <option @if(old('cor',$pacientes['cor']) == "INDÍGINA") selected @endif value="INDÍGINA">INDÍGINA</option>
          </select>
          </br>

          <label for="Peso"><b>PESO</b></label>
          <input type="text" placeholder="Entre com seu Peso" name="Peso" value="{{old('Peso',$pacientes['Peso'])}}" maxlength="5" OnKeyPress="formatar('##,##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

          <label for="Altura"><b>ALTURA</b></label>
          <input type="text" placeholder="Entre com sua Altura" name="Altura" value="{{old('Altura',$pacientes['Altura'])}}" maxlength="5" OnKeyPress="formatar('##,##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

          <label for="rh"><b>FATOR RH</b></label>
          <select class="form-control" id="gender1" name="rh" value="{{old('rh',$pacientes['rh'])}}">
            <option @if(old('rh',$pacientes['rh']) == "RH+") selected @endif value="RH+">RH+</option>
            <option @if(old('rh',$pacientes['rh']) == "RH-") selected @endif value="RH-">RH-</option>
          </select>
          </br>

          <label for="tipo"><b>TIPO SANGUINIO</b></label>
          <select class="form-control" id="gender1" name="tipo" value="{{old('tipo',$pacientes['tipo'])}}">
              <option @if(old('tipo',$pacientes['tipo']) == "A+") selected @endif value="A+">A+</option>
              <option @if(old('tipo',$pacientes['tipo']) == "A-") selected @endif value="A-">A-</option>
              <option @if(old('tipo',$pacientes['tipo']) == "B+") selected @endif value="B+">B+</option>
              <option @if(old('tipo',$pacientes['tipo']) == "B-") selected @endif value="B-">B-</option>
              <option @if(old('tipo',$pacientes['tipo']) == "AB+") selected @endif value="AB+">AB+</option>
              <option @if(old('tipo',$pacientes['tipo']) == "AB-") selected @endif value="AB-">AB-</option>
              <option @if(old('tipo',$pacientes['tipo']) == "O+") selected @endif value="O+">O+</option>
              <option @if(old('tipo',$pacientes['tipo']) == "O-") selected @endif value="O-">O-</option>
          </select>
          </br>

          <label for="plano"><b>DOÊNÇAS HEREDITARIAS?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioH" @if(old('radioH',$pacientes['radioH']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioH" @if(old('radioH',$pacientes['radioH']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <select class="form-control" required name="Chere" value="{{old('Chere')}}">
            <option @if(old('Chere',$pacientes['Chere']) == "Nenhuma") selected @endif value="Nenhuma">-Nenhuma-</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Câncer") selected @endif value="Câncer">Câncer</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Depressão") selected @endif value="Depressão">Depressão</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Fibrose") selected @endif value="Fibrose">Fibrose Cística</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Hemorroidas") selected @endif value="Hemorroidas">Hemorroidas</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Daltonismo") selected @endif value="Daltonismo">Daltonismo</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Obesidade") selected @endif value="Obesidade">Obesidade</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Diabetes") selected @endif value="Diabetes">Diabetes</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Cardiopatias") selected @endif value="Cardiopatias">Cardiopatias</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Hipertensão") selected @endif value="Hipertensão">Hipertensão arterial</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Anemia") selected @endif value="Anemia">Anemia falciforme</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Síndrome") selected @endif value="Síndrome">Síndrome de Marfan</option>
            <option @if(old('Chere',$pacientes['Chere']) == "Hemocromatose") selected @endif value="Hemocromatose">Hemocromatose arterial</option>
          </select>

          <label for="plano"><b>DIABETES?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioD" @if(old('radioD',$pacientes['radioD']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="nao" name="radioD" @if(old('radioD',$pacientes['radioD']) == "nao") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="CDiab" value="{{old('CDiab',$pacientes['CDiab'])}}">

          <label for="plano"><b>HIPERTENSÃO?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioHI" @if(old('radioHI',$pacientes['radioHI']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioHI" @if(old('radioHI',$pacientes['radioHI']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Chiper" value="{{old('Chiper',$pacientes['Chiper'])}}">

      </div>

      <div id="clinicos2" class="tab-pane fade">
          <!-- 6 Aba (DADODS CLINICOS)-->

          <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>
          <label for="plano"><b>TABAGISTA?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioT" @if(old('radioT',$pacientes['radioT']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioT" @if(old('radioT',$pacientes['radioT']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cclini" value="{{old('Cclini',$pacientes['Cclini'])}}">

          <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioC" @if(old('radioC',$pacientes['radioC']) == "sim") checked @endif >
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioC" @if(old('radioC',$pacientes['radioC']) == "não") checked @endif >
              <span class="checkmark"></span>
          </label>
          <select class="form-control" required name="Cdoen" value="{{old('Cdoen')}}">
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Nenhuma") selected @endif value="Nenhuma">-Nenhuma-</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Hipertensão") selected @endif value="Hipertensão">Hipertensão arterial</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Colesterol") selected @endif value="Colesterol">Colesterol alto</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Depressão") selected @endif value="Depressão">Depressão</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Diabetes") selected @endif value="Diabetes">Diabetes</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Artrite") selected @endif value="Artrite">Artrite</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Câncer") selected @endif value="Câncer">Câncer</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Asma") selected @endif value="Asma">Asma</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "coluna") selected @endif value="coluna">Dores na coluna</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "DPOC") selected @endif value="DPOC">DPOC (Doença pulmonar obstrutiva crônica)</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Osteoporose") selected @endif value="Osteoporose">Osteoporose</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Parkinson") selected @endif value="Parkinson">Parkinson arterial</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Alzheimer") selected @endif value="Alzheimer">Alzheimer</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "AVC") selected @endif value="AVC">AVC</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Fibrose") selected @endif value="Fibrose">Fibrose Cistica</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Hepatites") selected @endif value="Hepatites">Hepatites</option>
            <option @if(old('Cdoen',$pacientes['Cdoen']) == "Cirrose") selected @endif value="Cirrose">Cirrose</option>
          </select>

          <label for="plano"><b>NEOPLASIA?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioN" @if(old('radioN',$pacientes['radioN']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioN" @if(old('radioN',$pacientes['radioN']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cneopla" value="{{old('Cneopla',$pacientes['Cneopla'])}}">

          <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioFA" @if(old('radioFA',$pacientes['radioFA']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioFA" @if(old('radioFA',$pacientes['radioFA']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cfarma" value="{{old('Cfarma',$pacientes['Cfarma'])}}">
      </div>

      <div id="clinicos3" class="tab-pane fade">
          <!-- 7 Aba (DADODS CLINICOS)-->

          <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

          <label for="plano"><b>USO DE DROGAS?</b></label>

          <label class="radio">SIM
              <input type="radio" value="sim" value="sim" name="radioDRO" @if(old('radioDRO',$pacientes['radioDRO']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioDRO" @if(old('radioDRO',$pacientes['radioDRO']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cuso" value="{{old('Cuso',$pacientes['Cuso'])}}">

          <label for="plano"><b>ALERGIAS?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioAL" @if(old('radioAL',$pacientes['radioAL']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioAL" @if(old('radioAL',$pacientes['radioAL']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Calerg" value="{{old('Calerg',$pacientes['Calerg'])}}">

          <label for="plano"><b>ETILISTA?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioET" @if(old('radioET',$pacientes['radioET']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioET" @if(old('radioET',$pacientes['radioET']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cetili" value="{{old('Cetili',$pacientes['Cetili'])}}">

          <label for="plano"><b>VACINA TOMADAS?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioVA" @if(old('radioET',$pacientes['radioET']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioVA" @if(old('radioET',$pacientes['radioET']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cvacina" value="{{old('Cvacina',$pacientes['Cvacina'])}}">
      </div>

      <div id="clinicos4" class="tab-pane fade">
          <!-- 8 Aba (DADODS CLINICOS)-->
          <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

          <label for="plano"><b>CIRURGIAS?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioCI" @if(old('radioCI',$pacientes['radioCI']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioCI" @if(old('radioCI',$pacientes['radioCI']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <select class="form-control" required name="Ccirur" value="{{old('Ccirur')}}">
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Nenhuma") selected @endif value="Nenhum">Nenhum</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Vasectomia") selected @endif value="Vasectomia">Vasectomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Nefrectomia") selected @endif value="Nefrectomia">Nefrectomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Mastectomia") selected @endif value="Mastectomia">Mastectomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Prostectomia") selected @endif value="Prostectomia">Prostectomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Pneumonectomia") selected @endif value="Pneumonectomia">Pneumonectomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Histerectomia") selected @endif value="Histerectomia">Histerectomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Colecistectomia") selected @endif value="Colecistectomia">Colecistectomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Ooforectomia") selected @endif value="Ooforectomia">Ooforectomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Abdominoplastia") selected @endif value="Abdominoplastia">Abdominoplastia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Craniotomia") selected @endif value="Craniotomia">Craniotomia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Blefaroplastia") selected @endif value="Blefaroplastia">Blefaroplastia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Rinoplastia") selected @endif value="Rinoplastia">Rinoplastia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Queiloplastia") selected @endif value="Queiloplastia">Queiloplastia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Mamoplastia") selected @endif value="Mamoplastia">Mamoplastia</option>
            <option @if(old('Ccirur',$pacientes['Ccirur']) == "Ritidoplastia") selected @endif value="Ritidoplastia">Ritidoplastia</option>
        </select>

          <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioTRA" @if(old('radioTRA',$pacientes['radioTRA']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioTRA" @if(old('radioTRA',$pacientes['radioTRA']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cporta" value="{{old('Cporta',$pacientes['Cporta'])}}">

          <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioMAR" @if(old('radioMAR',$pacientes['radioMAR']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioMAR" @if(old('radioMAR',$pacientes['radioMAR']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cmarca" value="{{old('Cmarca',$pacientes['Cmarca'])}}">

          <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
          <label class="radio">SIM
              <input type="radio" value="sim" name="radioEP" @if(old('radioEP',$pacientes['radioEP']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" value="não" name="radioEP" @if(old('radioEP',$pacientes['radioEP']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Ceplis" value="{{old('Ceplis',$pacientes['Ceplis'])}}"> </br>
        </div>
            <a href=" {{ route('paciente-listar') }} " class="btn btn-danger"><span class="glyphicon glyphicon-backward"></span> Voltar</a>
            <button class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Alterar Dados</button>
        </form>

        <script>
            {{-- function formatar(mascara, documento) { // Para a Data
                var i = documento.value.length;
                var saida = mascara.substring(0, 1);
                var texto = mascara.substring(i)

                if (texto.substring(0, 1) != saida) {
                    documento.value += texto.substring(0, 1);
                }

            }

            $('#Data').datepicker({
                format: 'dd/mm/yyyy',
                language: "pt-BR",
            }); --}}

            function formatar(mascara, documento) { // Mascara dos campos

                var i = documento.value.length;
                var saida = mascara.substring(0, 1);
                var texto = mascara.substring(i)

                if (texto.substring(0, 1) != saida) {
                    documento.value += texto.substring(0, 1);
                }

            }

            function limpa_formulário_cep() { // Buscar o CEP
	            //Limpa valores do formulário de cep.
	            document.getElementById('rua').value=("");
	            document.getElementById('bairro').value=("");
	            document.getElementById('cidade').value=("");
	            document.getElementById('uf').value=("");
	    }

	    function meu_callback(conteudo) {
	        if (!("erro" in conteudo)) {
	            //Atualiza os campos com os valores.
	            document.getElementById('rua').value=(conteudo.logradouro);
	            document.getElementById('bairro').value=(conteudo.bairro);
	            //document.getElementById('cidade').value=(conteudo.localidade);
	            document.getElementById('uf').value=(conteudo.uf);
	        } //end if.
	        else {
	            //CEP não Encontrado.
	            limpa_formulário_cep();
	            alert("CEP não encontrado.");
	        }
	    }

	    function pesquisacep(valor) {

	        //Nova variável "cep" somente com dígitos.
	        var cep = valor.replace(/\D/g, '');

	        //Verifica se campo cep possui valor informado.
	        if (cep != "") {

	            //Expressão regular para validar o CEP.
	            var validacep = /^[0-9]{8}$/;

	            //Valida o formato do CEP.
	            if(validacep.test(cep)) {

	                //Preenche os campos com "..." enquanto consulta webservice.
	                document.getElementById('rua').value="...";
	                document.getElementById('bairro').value="...";
	                //document.getElementById('cidade').value="...";
	                document.getElementById('uf').value="...";
	                //document.getElementById('ibge').value="...";

	                //Cria um elemento javascript.
	                var script = document.createElement('script');

	                //Sincroniza com o callback.
	                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

	                //Insere script no documento e carrega o conteúdo.
	                document.body.appendChild(script);

	            } //end if.
	            else {
	                //cep é inválido.
	                limpa_formulário_cep();
	                alert("Formato de CEP inválido.");
	            }
	        } //end if.
	        else {
	            //cep sem valor, limpa formulário.
	            limpa_formulário_cep();
	        }
	    };

	    function formatar(mascara, documento){ // Masca cara dos Campos
	            var i = documento.value.length;
	            var saida = mascara.substring(0,1);
	            var texto = mascara.substring(i)

	            if (texto.substring(0,1) != saida){
	                        documento.value += texto.substring(0,1);
	            }

        }

        function _cpf(cpf) { // Validar CPF
            cpf = cpf.replace(/[^\d]+/g, '');
            if (cpf == '') return false;
            if (cpf.length != 11 ||
                cpf == "00000000000" ||
                cpf == "11111111111" ||
                cpf == "22222222222" ||
                cpf == "33333333333" ||
                cpf == "44444444444" ||
                cpf == "55555555555" ||
                cpf == "66666666666" ||
                cpf == "77777777777" ||
                cpf == "88888888888" ||
                cpf == "99999999999")
                return false;
            add = 0;
            for (i = 0; i < 9; i++)
                add += parseInt(cpf.charAt(i)) * (10 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(9)))
                return false;
            add = 0;
            for (i = 0; i < 10; i++)
                add += parseInt(cpf.charAt(i)) * (11 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(10)))
                return false;
            return true;
        }

        function validarCPF(el){
          if( !_cpf(el.value) ){

            {{-- $("body").append("<button>Outro Botão adicionado</button>") --}}
            alert("CPF inválido!" + el.value);

            // apaga o valor
            el.value = "";
          }
        }
        </script>
@endsection
