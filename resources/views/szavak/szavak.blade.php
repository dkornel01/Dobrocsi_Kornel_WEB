 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
<div>
    <h1>Szavak</h1>
    <div>
    <select class="form-select" >
        @foreach ($tema as $tem)
            <option value="{{$tem->id}}" onclick="valtas">{{$tem->temanev}}</option>
        @endforeach
        </select>
        </select>
        <div class="row">
            <div class="col-md-4"><p>Angol</p></div>
            <div class="col-md-4"><p>Magyar</p></div>
            <div class="col-md-2"><p>visszajelzés</p></div>
        </div>
        @foreach ($szavak as $szav)
            <div class="row">
                <div class="col-md-4"><p>{{$szav->angol}}</p></div>
                <div class="col-md-4"><input id="{{$szav->magyar}}" name="{{$szav->id}}" type="text" onkeyup="helyes(this)"></div>
                <div class="col-md-2"><p id="{{$szav->id}}"></p></div>
            </div>
        @endforeach
    </div>
</div>

<script>
    function helyes(obj){
        
        
    }
    async function valtas(obj){
        let obj
    }
</script>
