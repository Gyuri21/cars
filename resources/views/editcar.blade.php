@extends("layouts.master")
@section("content")
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4">
        <form  class="form-control mt-5" action="/update-car" method="post">
        @csrf
        @method("PUT")
            <input type="hidden" name="id" class="form-control" value="{{$cars->id}}">
            <label class="mt-3" for="plate">Rendszám</label>
            <input type="text" name="plate" class="form-control" value="{{$cars->plate}}">
            <label class="mt-3" for="brand">Márka</label>
            <input type="text" name="brand" class="form-control"value="{{$cars->brand}}">
            <label class="mt-3" for="color">Szín</label>
            <input type="text" name="color" class="form-control"value="{{$cars->color}}">
            <label class="mt-3" for="price">Ár</label>
            <input type="text" name="price" class="form-control"value="{{$cars->price}}">
            <button class="btn btn-outline-primary mt-3" type="submit">Küldés</button>
            
        </form>
        <a class="btn btn-info" href="/">Vissza</a>
    </div>
</div>
@endsection