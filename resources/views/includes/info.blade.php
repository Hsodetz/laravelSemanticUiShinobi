

@if (Session::has('info'))

<div class="ui info message transition">
  <i class="close icon"></i>
  <div class="header"> {{ Session::get('info') }} </div>
  <ul class="list">
    
  </ul>
</div>
  
@endif
