<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
.uk-navbar-container:not(.uk-navbar-transparent) {
    background: linear-gradient(to left, #28a5f5, #1e87f0) !important;
}
</style>

<body class="uk-background-default">

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
@stack('styles')

<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</nav>

<form class="uk-margin-small-top">

<div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div class="uk-margin-small-left">
        <div class="uk-card uk-card-default uk-card-body">
          <h3 class="uk-card-title">Default</h3>
          wkwkwkw
            @yield('content')
        </div>
    </div>
    <div class="uk-width-1-3 uk-margin-small-right">
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div>

    
</form>

@stack('scripts')

<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
<script type="text/javascript"></script>
</body>
</html>
