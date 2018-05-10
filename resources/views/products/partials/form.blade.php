<div class="ui form">
  <div class="field">
    
    {!! Form::label('name', 'Nombre del producto') !!}
    
    {!! Form::text('name', null) !!}
    
  </div>

  <div class="field">
    
      {!! Form::label('description', 'Descripcion del producto') !!}
    
      {!! Form::text('description', null) !!}

  </div>

  
  {!! Form::submit('Guardar', ['class' => "ui button red"]) !!}

  
</div>