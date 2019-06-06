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

            <form action=" {{ route('paciente-salvar') }} " method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

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
                    
                    <div id="mostrarFoto" class="form-group">
                        <label for="campo-foto">FOTO</label>                
                        <div id="image-holder"></div>                         
                        <input type = "file" value="Foto" id="campo-foto" name="Foto" accept=".jpg, .jpeg, .png" class="form-control"/>                   
                    </div>

                    <label for="nome"><b>NOME</b></label>
                    <input type="text" placeholder="Enter com seu Nome" name="Nome" value="{{old('Nome')}}">

                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" value="{{old('Cpf')}}" maxlength="14" OnKeyPress="formatar('###.###.###-##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" onblur="validarCPF(this)">
                        
                    <label for="rg"><b>RG</b></label>
                    <input type="text" placeholder="Entre com seu RG" name="Rg" value="{{old('Rg')}}" maxlength="14" OnKeyPress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

                    <label for="telefone"><b>TELEFONE</b></label>
                    <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone-p" value="{{old('Telefone-p')}}" maxlength="14" OnKeyPress="formatar('## # ####-####', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

                    <label for="Data">DATA DE NASCIMENTO</label>
                    <div class="input-group date">
                        <input type="date" class="form-control" id="Data" name="Data" maxlength="10" value="{{old('Data')}}">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>

                    <label for="naturalidade"><b>NATURALIDADE</b></label>

                    <select class="form-control" id="gender1" name="Naturalidade" value="{{old('Naturalidade')}}">
                        <option value="BRASIL">BRASIL</option>
                        <option value="ARGENTINA">ARGENTINA</option>
                        <option value="CHILE">CHILE</option>
                        <option value="COLÔMBIA">COLÔMBIA</option>
                        <option value="ESTADOS">ESTADOS UNIDOS</option>
                        <option value="CANADa">CANADÁ</option>
                        <option value="MeXICO">MÉXICO</option>
                        <option value="PORTUGAL">PORTUGAL</option>
                        <option value="FRANcA">FRANÇA</option>
                        <option value="ITÁLIA">ITáLIA</option>
                        <option value="RÚSSIA">RÚSSIA</option>
                        <option value="JAPÃO">JAPÃO</option>
                        <option value="CHINA">CHINA</option>
                        <option value="EGITO">EGITO</option>
                        <option value="IRA">IRÃ</option>
                        <option value="HOLANDA">HOLANDA</option>
                        <option value="NORTE">COREIA DO NORTE</option>
                        <option value="SUL">COREIA DO SUL</option>
                        <option value="ISRAEL">ISRAEL</option>
                        <option value="CUBA">CUBA</option>
                        <option value="ESPANHA">ESPANHA</option>
                        <option value="INGLATERRA">INGLATERRA</option>
                        <option value="NOVA">NOVA ZELANDIA</option>
                        <option value="CROCIA">CROCIA</option>
                        <option value="PERU">PERU</option>
                        <option value="URUGUAI">URUGUAI</option>
                        <option value="PARAGUAI">PARAGUAI</option>
                    </select>


                    <label for="sexo"><b>SEXO</b></label>
                    <select class="form-control" id="gender1" name="sexo" value="{{old('sexo')}}">
                        <option value="MASC">MASCULINO</option>
                        <option value="FEMIN">FEMININO</option>
                        <option value="OUTRO">OUTRO</option>
                    </select>


                    <label for="estado"><b>ESTADO CIVIL</b></label>
                    <select class="form-control" id="gender1" name="estado" value="{{old('estado')}}">
                        <option value="casado">CASADO</option>
                        <option value="solteiro">SOLTEIRO</option>
                        <option value="viuvo">VIUVO</option>
                        <option value="divorciado">DIVORCIADO</option>
                    </select>


                    <label for="Email"><b>E-MAIL</b></label>
                    <input type="text" placeholder="Entre com seu Email@email.com" name="Email" value="{{old('Email')}}">

                    <label for="escola"><b>ESCOLARIDADE</b></label>
                    <select class="form-control" id="gender1" name="escola" value="{{old('escola')}}">
                        <option value="FunINCOMPLETO">FUNDAMENTAL-INCOMPLETO</option>
                        <option value="FunCOMPLETO">FUNDAMENTAL-COMPLETO</option>
                        <option value="SugSEGUNDO">SEGUNDO GRAU-INCOMPLETO</option>
                        <option value="SugCOMPLETO">SEGUNDO GRAU-COMPLETO</option>
                        <option value="SupINCOMPLETO">SUPERIOR-INCOMPLETO</option>
                        <option value="SupCOMPLETO">SUPERIOR-COMPLETO</option>
                        <option value="MesINCOMPLETO">MESTRADO-INCOMPLETO</option>
                        <option value="MesCOMPLETO">MESTRADO-COMPLETO</option>
                    </select>


                    <label for="profi"><b>PROFISSÃO</b></label>
                    <select class="form-control" id="gender1" name="profi" value="{{old('profi')}}">
                        <option value="MÉDICO">MÉDICO</option>
                        <option value="ENFERMEIRO">ENFERMEIRO</option>
                        <option value="ARQUITETO">ARQUITETO</option>
                        <option value="ENGENHEIRO">ENGENHEIRO</option>
                        <option value="FISIOTERAPEUTA">FISIOTERAPEUTA</option>
                        <option value="ANALISTA">ANALISTA DE SISTEMAS</option>
                        <option value="PROGRAMADOR">PROGRAMADOR</option>
                        <option value="DENTISTA">DENTISTA</option>
                        <option value="PEDREIRO">PEDREIRO</option>
                        <option value="SEGURANÇA">SEGURANÇA</option>
                        <option value="ADIMINISTRAÇÃO">ADIMINISTRAÇÃO</option>
                        <option value="FARMACIA">FARMACIA</option>
                        <option value="FÍSICA">EDUÇÃO FÍSICA</option>
                        <option value="MECANICO">MECANICO</option>
                        <option value="PSICOLOGIA">PSICOLOGIA</option>
                        <option value="FRETISTA">FRETISTA</option>
                        <option value="ELETRCISTA">ELETRCISTA</option>
                        <option value="EMPRESARIO">EMPRESARIO</option>
                        <option value="PROFESSOR">PROFESSOR</option>
                        <option value="ATENDENTE">ATENDENTE</option>
                        <option value="SECRETARIA">SECRETARIA</option>
                        <option value="EDUCADOR">EDUCADOR FISICO</option>
                        <option value="ATOR">ATOR</option>
                        <option value="PUBLICITARIO">PUBLICITARIO</option>
                        <option value="MOTORISTA">MOTORISTA</option>
                        <option value="MILITAR">MILITAR</option>
                    </select>

        </div>

        <div id="Endereco" class="tab-pane fade">
            <!-- 2 Aba (aba dos enderço)-->

            <h3>Endereço</h3>

            <div class="form-group">
                <label for="Cep"><b>CEP</b></label>
                <input type="text" placeholder="Enter com seu CEP" id="cep" name="Cep" value="{{old('Cep')}}" maxlength="9" onblur="pesquisacep(this.value);" OnKeyPress="formatar('#####-###', this)">
                <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="_blank">Pesquisar CEP</a>
            </div>

            <label for="Uf"><b>UF</b></label>
            <input type="text" placeholder="Entre com seu UF" id="uf" maxlength="2" name="Uf" value="{{old('Uf')}}">

            <label for="cidade"><b>CIDADE</b></label>
            <select class="form-control" name="cidade" value="{{old('cidade')}}">
                <option value="MACEIÓ">MACEIÓ</option>
                <option value="CORURIPE">CORURIPE</option>
                <option value="RIO">RIO DE JANEIRO</option>
                <option value="PAULO">SÃO PAULO</option>
                <option value="PARANA">PARANA</option>
                <option value="SANTA">SANTA CATARINA</option>
                <option value="RECIFE">RECIFE</option>
                <option value="BAHIA">BAHIA</option>s
                <option value="SERGIPE">SERGIPE</option>
                <option value="PERNABUCO">PERNABUCO</option>
                <option value="GOIAS">GOIAS</option>
                <option value="AMAZONAS">AMAZONAS</option>
                <option value="FLORIPA">FLORIPA</option>
                <option value="TEREZINA">TEREZINA</option>
                <option value="CURITIBA">CURITIBA</option>
                <option value="SANTOS">SANTOS</option>
                <option value="AMAPA">AMAPA</option>
                <option value="GRAMADOS">GRAMADOS</option>
                <option value="ARACAJU">ARACAJU</option>
                <option value="JUENVILHE">JUENVILHE</option>
                <option value="ANGRA">ANGRA DOS REIS</option>
                <option value="SALVADOR">SALVADOR</option>
                <option value="MARACHAL">MARACHAL DEODORO</option>
                <option value="NATAL">NATAL</option>
                <option value="JOÃO">JOÃO PESSOA</option>
                <option value="ATALAIA">ATALAIA</option>
            </select>

            <label for="Endereco"><b>ENDEREÇO</b></label>
            <input type="text" placeholder="Entre com seu Endereço" id="rua" name="Endereco" value="{{old('Endereco')}}">

            <label for="Bairro"><b>BAIRRO</b></label>
            <input type="text" placeholder="Entre com seu Bairro" id="bairro" name="Bairro" value="{{old('Bairro')}}">

            <label for="Numero"><b>NÚMERO</b></label>
            <input type="text" placeholder="Entre com seu Número" name="Numero" maxlength="5" value="{{old('Numero')}}">

            <label for="Complemento"><b>COMPLEMENTO</b></label>
            <input type="text" placeholder="Entre com seu Complemento" name="Complemento" value="{{old('Complemento')}}">
        </div>

        <div id="Contato" class="tab-pane fade">
            <!-- 3 Aba (aba dos contatos)-->
            <h3>Contatos</h3>
            <label for="parente"><b>RESPONSAVEL/PARENTE 1 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente" value="{{old('Parente')}}">

            <label for="parentent-tele"><b>RESPONSAVEL/PARENTE 1 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele" value="{{old('Parentent-tele')}}" maxlength="14" OnKeyPress="formatar('## # ####-####', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

            <label for="parente-1"><b>RESPONSAVEL/PARENTE 2 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente-1" value="{{old('Parente-1')}}">

            <label for="parentent-tele-1"><b>RESPONSAVEL/PARENTE 2 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele-1" value="{{old('Parentent-tele-1')}}" maxlength="14" OnKeyPress="formatar('## # ####-####', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
        </div>

        <div id="financeiro" class="tab-pane fade">
            <!-- 4 Aba (aba dos financeiro)-->
            <h3>Finânceiro</h3>

            <label for="convenio"><b>CONVÊNIO</b></label>
            <select class="form-control" id="gender1" name="convenio" value="{{old('convenio')}}">
                <option value="UNIMED">UNIMED</option>
                <option value="HAPVIDA">HAPVIDA</option>
                <option value="SANDANDER">SANDANDER</option>
                <option value="AMIL">AMIL</option>
            </select>
            
            <label for="Plano"><b>PLANO</b></label>
            <select class="form-control" id="Plano" name="Plano" value="{{old('Plano')}}">
                <option value="Individual">Individual</option>
                <option value="Familiares">Familiares</option>
                <option value="Empresarias">Empresarias</option>
                <option value="Hospitalares">Hospitalares</option>
            </select>

            <label for="Inscricao"><b>INSCRIÇÃO</b></label>
            <input type="text" placeholder="Entre com sua Inscrição" name="Inscricao" value="{{old('Inscricao')}}" maxlength="19" OnKeyPress="formatar('# ### ########### #', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

            <label for="Validade">Validade</label>
            <div class="input-group date">
                <input type="date" class="form-control" id="Validade" name="Validade" maxlength="10" value="{{old('Validade')}}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>
       </div>

        <div id="clinicos1" class="tab-pane fade">
            <!-- 5 Aba (aba dos dados clinicos)-->

            <h3>DADOS CLÍNICOS</h3>
            <label for="cor"><b>COR DA PELE</b></label>
            <select class="form-control" id="gender1" name="cor" value="{{old('cor')}}">
                <option value="BRANCA">BRANCA</option>
                <option value="PARDA">PARDA</option>
                <option value="PRETA">PRETA</option>
                <option value="AMARELO">AMARELO</option>
                <option value="INDÍGINA">INDÍGINA</option>
            </select>
            

            <label for="Peso"><b>PESO</b></label>
            <input type="text" placeholder="Entre com seu Peso" name="Peso" value="{{old('Peso')}}" maxlength="5" OnKeyPress="formatar('##,##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

            <label for="Altura"><b>ALTURA</b></label>
            <input type="text" placeholder="Entre com sua Altura" name="Altura" value="{{old('Altura')}}" maxlength="4" OnKeyPress="formatar('#,##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

            <label for="rh"><b>FATOR RH</b></label>
            <select class="form-control" id="gender1" name="rh" value="{{old('rh')}}">
                <option value="RH+">RH+</option>
                <option value="RH-">RH-</option>
            </select>
            

            <label for="tipo"><b>TIPO SANGUINIO</b></label>
            <select class="form-control" id="gender1" name="tipo" value="{{old('tipo')}}">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            

            <label><b>DOÊNÇAS HEREDITARIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioH" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioH" value="não" checked="checked" >
                <span class="checkmark"></span>
            </label>
            <select class="form-control" name="Chere" value="{{old('Chere')}}">
                <option value="Nenhuma">-Nenhuma-</option>
                <option value="Câncer">Câncer</option>
                <option value="Depressão">Depressão</option>
                <option value="Fibrose">Fibrose Cística</option>
                <option value="Hemorroidas">Hemorroidas</option>
                <option value="Daltonismo">Daltonismo</option>
                <option value="Obesidade">Obesidade</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Cardiopatias">Cardiopatias</option>
                <option value="Hipertensão">Hipertensão arterial</option>
                <option value="Anemia">Anemia falciforme</option>
                <option value="Síndrome">Síndrome de Marfan</option>
                <option value="Hemocromatose">Hemocromatose arterial</option>
            </select>

            <label for="plano"><b>DIABETES?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioD" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioD" value="nao" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="CDiab" value="{{old('CDiab')}}">

            <label for="plano"><b>HIPERTENSÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioHI" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioHI" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chiper" value="{{old('Chiper')}}">

        </div>

        <div id="clinicos2" class="tab-pane fade">
            <!-- 6 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>
            <label for="plano"><b>TABAGISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioT" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioT" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cclini" value="{{old('Cclini')}}">

            <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioC" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioC" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <select class="form-control" name="Cdoen" value="{{old('Cdoen')}}">
                <option value="Nenhuma">-Nenhuma-</option>
                <option value="Hipertensão">Hipertensão arterial</option>
                <option value="Colesterol">Colesterol alto</option>
                <option value="Depressão">Depressão</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Artrite">Artrite</option>
                <option value="Câncer">Câncer</option>
                <option value="Asma">Asma</option>
                <option value="coluna">Dores na coluna</option>
                <option value="DPOC">DPOC (Doença pulmonar obstrutiva crônica)</option>
                <option value="Osteoporose">Osteoporose</option>
                <option value="Parkinson">Parkinson arterial</option>
                <option value="Alzheimer">Alzheimer</option>
                <option value="AVC">AVC</option>
                <option value="Fibrose">Fibrose Cistica</option>
                <option value="Hepatites">Hepatites</option>
                <option value="Cirrose">Cirrose</option>
            </select>

            <label for="plano"><b>NEOPLASIA?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioN" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioN" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cneopla" value="{{old('Cneopla')}}">

            <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioFA" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioFA" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cfarma" value="{{old('Cfarma')}}">
        </div>

        <div id="clinicos3" class="tab-pane fade">
            <!-- 7 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>USO DE DROGAS?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioDRO" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioDRO" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cuso" value="{{old('Cuso')}}">

            <label for="plano"><b>ALERGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioAL" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioAL" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Calerg" value="{{old('Calerg')}}">

            <label for="plano"><b>ETILISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioET" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioET" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cetili" value="{{old('Cetili')}}">

            <label for="plano"><b>VACINA TOMADAS?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioVA" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioVA" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cvacina" value="{{old('Cvacina')}}">
        </div>

        <div id="clinicos4" class="tab-pane fade">
            <!-- 8 Aba (DADODS CLINICOS)-->
            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>CIRURGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioCI" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioCI" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <select class="form-control" name="Ccirur" value="{{old('Ccirur')}}">
                <option value="Nenhum">Nenhum</option>
                <option value="Vasectomia">Vasectomia</option>
                <option value="Nefrectomia">Nefrectomia</option>
                <option value="Mastectomia">Mastectomia</option>
                <option value="Prostectomia">Prostectomia</option>
                <option value="Pneumonectomia">Pneumonectomia</option>
                <option value="Histerectomia">Histerectomia</option>
                <option value="Colecistectomia">Colecistectomia</option>
                <option value="Ooforectomia">Ooforectomia</option>
                <option value="Abdominoplastia">Abdominoplastia</option>
                <option value="Craniotomia">Craniotomia</option>
                <option value="Blefaroplastia">Blefaroplastia</option>
                <option value="Rinoplastia">Rinoplastia</option>
                <option value="Queiloplastia">Queiloplastia</option>
                <option value="Mamoplastia">Mamoplastia</option>
                <option value="Ritidoplastia">Ritidoplastia</option>
            </select>

            <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioTRA" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioTRA" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cporta" value="{{old('Cporta')}}">

            <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioMAR" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioMAR" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cmarca" value="{{old('Cmarca')}}">

            <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" name="radioEP" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioEP" value="não" checked="checked">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ceplis" value="{{old('Ceplis')}}"> 

            <a href=" {{ route('paciente-listar') }} " class="btn btn-danger"><span class="glyphicon glyphicon-backward"></span> Voltar</a>
            <button class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-disk"></span> CONCLUIR</button>
        </div>
        </form>

        <script>
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

        $("#campo-foto").on('change', function() {

            if (typeof(FileReader) != "undefined") {
                var image_holder = $("#image-holder");
                image_holder.empty();

                var reader = new FileReader();
                reader.onload = function(e) {
        
                    $("<img />", {
                        "src": e.target.result,
                        "class": "thumb-image",
                        "width": "250px",
                        "height": "250px",
                        "border": "none"
                    }).appendTo(image_holder);
        
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
        
            } else {
                alert("Este navegador nao suporta FileReader.");
            }
        });
        </script>
@endsection