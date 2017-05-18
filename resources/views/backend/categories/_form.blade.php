{{ Form::open(['url'=>route('categories.store'),'class'=>'ui form','method'=>'POST']) }}
  <div class="field">
    <label>Nama Kategori</label>
    {{ Form::text('name',null,['placeholder'=>'Masukan Nama']) }}
  </div>
  <button class="ui primary button" type="submit">Submit</button>
{{ Form::close() }}