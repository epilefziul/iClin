@extends('NavBar')
@section('body')

    <form action="{{ route('consultaSalvar') }}" style="border:#ccc">

        <div class="container">

            <h2>Cadastrar Consulta</h2> 

            {{-- @if(session('ConsultaCadastrada'))      
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Consulta Realizada Com Sucesso</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif --}}
            
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
            @endif

            <label for="NomePaciente"><b>NOME PACIENTE</b></label>
            <select name="NomePaciente" id="NomePaciente" value=" {{old('NomePaciente')}}" class="form-control"> // bucas Pacientes no Banco
                @foreach ($pacientes as $paci)

                    <option value="{{$paci->Nome}}">{{$paci->Nome}}</option>

                @endforeach             
            </select>

            <label for="NomeMedico"><b>NOME MÉDICO</b></label>
            <select name="NomeMedico" id="NomeMedico" value=" {{old('NomeMedico')}}" class="form-control"> // bucas Pacientes no Banco

                @foreach ($funcionarios as $func)

                    <option value="{{$func->Nome}}">{{$func->Nome}}</option>

                @endforeach      
            </select> 

            <label for="Data">DATA DA CONSULTA</label> </br>
            <div class="input-group date">
                <input type="date" class="form-control" id="Data" name="Data" maxlength="10" value="{{old('Data')}}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>

            <label for="queixa"><b>QUAL A SUA QUEIXA?</b></label>
            <input type="text" name="Queixa" id="queixa" value="{{old('Queixa')}}" class="form-control">

            <label for="iniciodurabilidade"><b>Início, durabilidade, como se deu a evolução, características da dor?</b></label>
            <input type="text" id="iniciodurabilidade" name="InicioDurabilidade" class="form-control" value="{{old('InicioDurabilidade')}}">

            <label for="habitosvida"><b>HÁBITOS DA VIDA</b></label>
            <input type="text" id="habitosvida" name="HabitosVida" class="form-control" value="{{old('HabitosVida')}}">

            <label for="tipoalimento"><b>TIPO DE ALIMENTAÇÃO</b></label>
            <input type="text" id="tipoalimento" name="TipoAlimento" class="form-control" value="{{old('TipoAlimento')}}">

            <label for="inspersao"><b>INSPERÇÃO</b></label>
            <input type="text" id="inspersao" name="Inspersao" class="form-control" value="{{old('Inspersao')}}">

            <label for="palpacao"><b>PALPAÇÃO</b></label>
            <input type="text" id="palpacao" name="Palpacao" class="form-control" value="{{old('Palpacao')}}">

            <label for="percusao"><b>PERCUSSÃO</b></label>
            <input type="text" id="percusao" name="Percusao" class="form-control" value="{{old('Percusao')}}">
 
            <label for="ausculta"><b>AUSCULTA</b></label>
            <input type="text" id="ausculta" name="Ausculta" class="form-control" value="{{old('Ausculta')}}">

            <label for="materias"><b>MATERIAS UTILIZADOS</b></label>
            <input type="text" id="materias" name="Materias" class="form-control" value="{{old('Materias')}}">

            <a href=" {{ route('consultaListar') }} " class="btn btn-danger"><span class="glyphicon glyphicon-backward"></span> Voltar</a>
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-floppy-disk"></span> CONCLUIR</button>
            
        </div>
    </form>

    <div class="container">
            
    </div>    
@endsection