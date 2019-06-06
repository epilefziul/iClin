@extends('NavBar')
@section('body')

    <form action="{{ route('consultaAtualizar', ['id' => $consulta['id']]) }}" style="border:#ccc">

        <div class="container">

            <h2>Editar Consulta</h2> 
            
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
            @endif

            {{-- {{$button=false}}

            @if ($button=true)
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmar Cadastro da Consulta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif --}}

            <label for="NomePaciente"><b>NOME PACIENTE</b></label>
            <select name="NomePaciente" id="NomePaciente" value=" {{old('NomePaciente')}}" class="form-control"> // bucas Pacientes no Banco
                @foreach ($pacientes as $paci)

                    <option value="{{$paci->Nome}}">{{$paci->Nome}}</option>

                @endforeach      
            </select> 
            </br>
            <label for="NomeMedico"><b>NOME MÉDICO</b></label>
            <select name="NomeMedico" id="NomeMedico" value=" {{old('NomeMedico')}}" class="form-control"> // bucas Pacientes no Banco
                @foreach ($funcionarios as $func)

                    <option value="{{$func->Nome}}">{{$func->Nome}}</option>

                @endforeach      
            </select>
        </br>
            <label for="Data">DATA DA CONSULTA</label>
            <div class="input-group date">
                <input type="date" class="form-control" id="Data" name="Data" maxlength="10" value="{{old('Data',$consulta['Data'])}}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>
             </br>
            <label for="queixa"><b>QUAL A SUA QUEIXA?</b></label>
            <input type="text" name="Queixa" class="form-control" value="{{old('Queixa',$consulta['Queixa'])}}"> </br>

            <label for="inicio-durabilidade"><b>Início, durabilidade, como se deu a evolução, características da dor?</b></label>
            <input type="text" class="form-control" name="InicioDurabilidade" value="{{old('InicioDurabilidade',$consulta['InicioDurabilidade'])}}"> </br>

            <label for="habitos-vida"><b>HÁBITOS DA VIDA</b></label>
            <input type="text" class="form-control" name="HabitosVida" value="{{old('HabitosVida',$consulta['HabitosVida'])}}"> </br>

            <label for="tipo-alimento"><b>TIPO DE ALIMENTAÇÃO</b></label>
            <input type="text" class="form-control" name="TipoAlimento" value="{{old('TipoAlimento',$consulta['TipoAlimento'])}}"> </br>

            <label for="inspersao"><b>INSPERÇÃO</b></label>
            <input type="text" class="form-control" name="Inspersao" value="{{old('Inspersao',$consulta['Inspersao'])}}"> </br>

            <label for="palpacao"><b>PALPAÇÃO</b></label>
            <input type="text" class="form-control" name="Palpacao" value="{{old('Palpacao',$consulta['Palpacao'])}}"> </br>

            <label for="percusao"><b>PERCUSSÃO</b></label>
            <input type="text" class="form-control" name="Percusao" value="{{old('Percusao',$consulta['Percusao'])}}"> </br>

            <label for="ausculta"><b>AUSCULTA</b></label>
            <input type="text" class="form-control" name="Ausculta" value="{{old('Ausculta',$consulta['Ausculta'])}}"> </br>

            <label for="materias"><b>MATERIAS UTILIZADOS</b></label>
            <input type="text" class="form-control" name="Materias" value="{{old('Materias',$consulta['Materias'])}}"> </br>


            <a href=" {{ route('consultaListar') }} " class="btn btn-danger"><span class="glyphicon glyphicon-backward"></span> Voltar</a>
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-floppy-disk"></span> Alterar Dados</button>
            
        </div>
    </form>
@endsection