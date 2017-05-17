<form class="ui form">
  <div class="field">
    <label>Nama Kategori</label>
    {{ Form::text('name',null,['placeholder'=>'Masukan Nama']) }}
  </div>
  <button class="ui primary button" type="submit">Submit</button>
</form>