@extends('seller.index')
@section('content')
<div class="ui-widget">
  <label>Your preferred programming language: </label>
  <select id="select1" name="style" onchange="myFunction()">
    @foreach($styles as $style)
    <option value="{{$style->style_name}}" >{{$style->style_name}}</option>
    @endforeach
    <option value="other">Other</option>
  </select>
</div>
<div id="style" hidden>
    <label>enter style</label>
<input type="text"  >
</div>

<div class="ui-widget">
  <label>Your preferred programming language: </label>
  <select id="select1" name="material" onchange="myFunction()">
    @foreach($materials as $material)
    <option value="{{$material->mater_name}}" >{{$material->mater_name}}</option>
    @endforeach
    <option value="other">Other</option>
  </select>
</div>
<div id="style" hidden>
    <label>enter material</label>
<input type="text"  >
</div>

@endsection

@section('script')
<script>
function myFunction() {
    var x = document.getElementById("select1").value;
    
    if(x=='other')
    {
        console.log(x);
        $("#style").removeAttr('hidden');
        
    }
}
</script>
@endsection