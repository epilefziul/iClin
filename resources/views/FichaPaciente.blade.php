@extends('NavBar') 
@section('body')

<div class="container">

    <h2>Cadastrar Paciente</h2>

    <ul class="nav nav-tabs">
        <!-- Abbas do cadastro -->
        <li class="active"><a data-toggle="tab" href="#clinicos1">Dados Clínicos 1</a></li>
        <li><a data-toggle="tab" href="#clinicos2">Clínicos 2</a></li>
        <li><a data-toggle="tab" href="#clinicos3">Clínicos 3</a></li>
        <li><a data-toggle="tab" href="#clinicos4">Clínicos 4</a></li>
    </ul>

    <form action="{{route('paciente-listar')}}" style="border:#ccc">

        <div id="clinicos1" class="tab-pane fade">
            <!-- 5 Aba (aba dos dados clinicos)-->

            <h3>DADOS CLÍNICOS</h3>
            <label for="cor"><b>COR DA PELE</b></label>
            <select class="form-control" id="gender1" name="cor" disabled value="{{old('cor',$pacientes['cor'])}}">
                <option @if(old( 'cor',$pacientes[ 'cor'])=="BRANCA" ) selected @endif disabled value="BRANCA">BRANCA</option>
                <option @if(old( 'cor',$pacientes[ 'cor'])=="PARDA" ) selected @endif disabled value="PARDA">PARDA</option>
                <option @if(old( 'cor',$pacientes[ 'cor'])=="PRETA" ) selected @endif disabled value="PRETA">PRETA</option>
                <option @if(old( 'cor',$pacientes[ 'cor'])=="AMARELO" ) selected @endif disabled value="AMARELO">AMARELO</option>
                <option @if(old( 'cor',$pacientes[ 'cor'])=="INDÍGINA" ) selected @endif disabled value="INDÍGINA">INDÍGINA</option>
            </select>
            </br>

            <label for="Peso"><b>PESO</b></label>
            <input type="text" placeholder="Entre com seu Peso" name="Peso" disabled value="{{old('Peso',$pacientes['Peso'])}}">

            <label for="Altura"><b>ALTURA</b></label>
            <input type="text" placeholder="Entre com sua Altura" name="Altura" disabled value="{{old('Altura',$pacientes['Altura'])}}">

            <label for="rh"><b>FATOR RH</b></label>
            <select class="form-control" id="gender1" name="rh" disabled value="{{old('rh',$pacientes['rh'])}}">
                <option @if(old( 'rh',$pacientes[ 'rh'])=="RH+" ) selected @endif disabled value="RH+">RH+</option>
                <option @if(old( 'rh',$pacientes[ 'rh'])=="RH-" ) selected @endif disabled value="RH-">RH-</option>
            </select>
            </br>

            <label for="tipo"><b>TIPO SANGUINIO</b></label>
            <select class="form-control" id="gender1" name="tipo" disabled value="{{old('tipo',$pacientes['tipo'])}}">
                <option @if(old( 'tipo',$pacientes[ 'tipo'])=="A+" ) selected @endif disabled value="A+">A+</option>
                <option @if(old( 'tipo',$pacientes[ 'tipo'])=="A-" ) selected @endif disabled value="A-">A-</option>
                <option @if(old( 'tipo',$pacientes[ 'tipo'])=="B+" ) selected @endif disabled value="B+">B+</option>
                <option @if(old( 'tipo',$pacientes[ 'tipo'])=="B-" ) selected @endif disabled value="B-">B-</option>
                <option @if(old( 'tipo',$pacientes[ 'tipo'])=="AB+" ) selected @endif disabled value="AB+">AB+</option>
                <option @if(old( 'tipo',$pacientes[ 'tipo'])=="AB-" ) selected @endif disabled value="AB-">AB-</option>
                <option @if(old( 'tipo',$pacientes[ 'tipo'])=="O+" ) selected @endif disabled value="O+">O+</option>
                <option @if(old( 'tipo',$pacientes[ 'tipo'])=="O-" ) selected @endif disabled value="O-">O-</option>
            </select>
            </br>

            <label for="plano"><b>DOÊNÇAS HEREDITARIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioH" @if(old( 'radioH',$pacientes[ 'radioH'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioH" @if(old( 'radioH',$pacientes[ 'radioH'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chere" disabled value="{{old('Chere',$pacientes['Chere'])}}">

            <label for="plano"><b>DIABETES?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioD" @if(old( 'radioD',$pacientes[ 'radioD'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="nao" name="radioD" @if(old( 'radioD',$pacientes[ 'radioD'])=="nao" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="CDiab" disabled value="{{old('CDiab',$pacientes['CDiab'])}}">

            <label for="plano"><b>HIPERTENSÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioHI" @if(old( 'radioHI',$pacientes[ 'radioHI'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioHI" @if(old( 'radioHI',$pacientes[ 'radioHI'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chiper" disabled value="{{old('Chiper',$pacientes['Chiper'])}}">

        </div>

        <div id="clinicos2" class="tab-pane fade">
            <!-- 6 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>
            <label for="plano"><b>TABAGISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioT" @if(old( 'radioT',$pacientes[ 'radioT'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioT" @if(old( 'radioT',$pacientes[ 'radioT'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cclini" disabled value="{{old('Cclini',$pacientes['Cclini'])}}">

            <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioC" @if(old( 'radioC',$pacientes[ 'radioC'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioC" @if(old( 'radioC',$pacientes[ 'radioC'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cdoen" disabled value="{{old('Cdoen',$pacientes['Cdoen'])}}">

            <label for="plano"><b>NEOPLASIA?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioN" @if(old( 'radioN',$pacientes[ 'radioN'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioN" @if(old( 'radioN',$pacientes[ 'radioN'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cneopla" disabled value="{{old('Cneopla',$pacientes['Cneopla'])}}">

            <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioFA" @if(old( 'radioFA',$pacientes[ 'radioFA'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioFA" @if(old( 'radioFA',$pacientes[ 'radioFA'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cfarma" disabled value="{{old('Cfarma',$pacientes['Cfarma'])}}">
        </div>

        <div id="clinicos3" class="tab-pane fade">
            <!-- 7 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>USO DE DROGAS?</b></label>

            <label class="radio">SIM
                <input type="radio" disabled value="sim" disabled value="sim" name="radioDRO" @if(old( 'radioDRO',$pacientes[ 'radioDRO'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioDRO" @if(old( 'radioDRO',$pacientes[ 'radioDRO'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cuso" disabled value="{{old('Cuso',$pacientes['Cuso'])}}">

            <label for="plano"><b>ALERGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioAL" @if(old( 'radioAL',$pacientes[ 'radioAL'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioAL" @if(old( 'radioAL',$pacientes[ 'radioAL'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Calerg" disabled value="{{old('Calerg',$pacientes['Calerg'])}}">

            <label for="plano"><b>ETILISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioET" @if(old( 'radioET',$pacientes[ 'radioET'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioET" @if(old( 'radioET',$pacientes[ 'radioET'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cetili" disabled value="{{old('Cetili',$pacientes['Cetili'])}}">

            <label for="plano"><b>VACINA TOMADAS?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioVA" @if(old( 'radioET',$pacientes[ 'radioET'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioVA" @if(old( 'radioET',$pacientes[ 'radioET'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cvacina" disabled value="{{old('Cvacina',$pacientes['Cvacina'])}}">
        </div>

        <div id="clinicos4" class="tab-pane fade">
            <!-- 8 Aba (DADODS CLINICOS)-->
            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>CIRURGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioCI" @if(old( 'radioCI',$pacientes[ 'radioCI'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioCI" @if(old( 'radioCI',$pacientes[ 'radioCI'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ccirur" disabled value="{{old('Ccirur',$pacientes['Ccirur'])}}">

            <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioTRA" @if(old( 'radioTRA',$pacientes[ 'radioTRA'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioTRA" @if(old( 'radioTRA',$pacientes[ 'radioTRA'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cporta" disabled value="{{old('Cporta',$pacientes['Cporta'])}}">

            <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioMAR" @if(old( 'radioMAR',$pacientes[ 'radioMAR'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioMAR" @if(old( 'radioMAR',$pacientes[ 'radioMAR'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cmarca" disabled value="{{old('Cmarca',$pacientes['Cmarca'])}}">

            <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" disabled value="sim" name="radioEP" @if(old( 'radioEP',$pacientes[ 'radioEP'])=="sim" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" disabled value="não" name="radioEP" @if(old( 'radioEP',$pacientes[ 'radioEP'])=="não" ) checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ceplis" disabled value="{{old('Ceplis',$pacientes['Ceplis'])}}"> </br>
        </div>
        <button class="btn btn-danger">Voltar</button>
    </form>

    @endsection