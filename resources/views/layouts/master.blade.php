<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> @yield('title') | Helmuth </title>

  {!! Html::style('css/semantic.css') !!}
  
  {!! Html::style('css/miestilo.css') !!}

  <link href="http://jeffry.in/old-jeffry-in/css/jeffry.in.css" rel="stylesheet" />
  <link href="http://jeffry.in/old-jeffry-in/css/jeffry.in.slider.css" rel="stylesheet" />  

</head>
<body>
  
  @include('includes.navbar')
  
  <div class="ui container">
    @yield('contenido')
  </div>
  

</body>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/semantic.js') }}"></script>
<script src="http://cdn.jsdelivr.net/jquery.glide/1.0.6/jquery.glide.min.js"></script>

<script>
  $('.ui.dropdown')
    .dropdown()
  ;
</script>

</html>