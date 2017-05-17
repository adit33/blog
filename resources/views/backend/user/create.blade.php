@extends('backend.layout.master')
@section('content')
<form class="ui form">
  <div class="field">
    <label>Nama</label>
    {{ Form::text('name',null,['placeholder'=>'Masukan Nama']) }}
  </div>
  <div class="field">
    <label>Email</label>
    {{ Form::email('email',null,['placeholder'=>'Masukan Email']) }}
  </div>
  <div class="field">
    <label>Password</label>
    {{ Form::password('password',null,['placeholder'=>'Masukan Password']) }}
  </div>
  <div class="field">
    <div class="ui checkbox">
      <input tabindex="0" class="hidden" type="checkbox">
      <label>I agree to the Terms and Conditions</label>
    </div>
  </div>
  <button class="ui button" type="submit">Submit</button>
</form>


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