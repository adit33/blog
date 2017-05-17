@extends('backend.layout.master')
@section('content')
<div id="app">
  @{{ nama }}  
@include('backend.categories._form')
</div>
@endsection

@push('scripts')
<script type="text/javascript">

new Vue({
  el:"#app",
  data:{
    nama:"adit"
  }
})

$('.ui.form')
  .form({
    fields: {
      name     : 'empty',
      gender   : 'empty',
      username : 'empty',
      password : ['minLength[6]', 'empty'],
      skills   : ['minCount[2]', 'empty'],
      terms    : 'checked'
    }
  });

</script>
@endpush