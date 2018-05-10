<div class="ui form">
  <div class="field">
    
    {!! Form::label('name', 'Nombre') !!}
    
    {!! Form::text('name', null) !!}
    
  </div>

  <hr>
  <h3> Lista de Roles </h3>
  
  <div class="ui list">
    
    @foreach ($roles as $role)
      <div class="item">
        <label>
          {!! Form::checkbox('roles[]', $role->id, null) !!}
          {{ $role->name }}
          <em> {{ $role->description ?: "Sin descripcion" }} </em>
        </label>
      </div>   
    @endforeach
   
  </div>

  

 
  
  
  {!! Form::submit('Guardar', ['class' => "ui button red"]) !!}

  
</div>