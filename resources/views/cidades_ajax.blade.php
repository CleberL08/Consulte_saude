<option value="" selected hidden>Cidades</option>
@foreach($cidade as $cid)
<option value="{{ $cid->cid_cod}}"> {{ $cid->cid_nome}} </option>
@endforeach