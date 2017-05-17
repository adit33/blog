@extends('backend.layout.master')
@section('content')
@include('backend.categories._form')
@endsection

@push('scripts')
<script type="text/javascript">

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
  })
</script>
@endpush