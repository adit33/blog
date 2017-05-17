<!DOCTYPE html>
<html>
<head>
    <title>Backend</title>
</head>


<body>

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<body>
  <div class="ui visible sidebar inverted vertical menu">
    <a class="item">
      1
    </a>
    <a class="item">
      2
    </a>
    <a class="item">
      3
    </a>
  </div>
  <div class="pusher">
    <div class="ui blue three item inverted menu">
  <a class="active item">
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a class="item">
    Friends
  </a>
</div>
  
  <div class="ui grid container">
  <div class="two wide column"></div>
  <div class="fourteen wide column">@yield('content')</div>
  </div>

  </div>

  

</body>
<script
              src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
<script type="text/javascript">
    $(document)
    .ready(function() {
        // $('.ui.sidebar')
        // .sidebar('toggle');
    });

</script>
@stack('scripts')

</body>
</html>
