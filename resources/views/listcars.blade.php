@extends("layouts.master")

<h1></h1>
@section("content")
<div class="container" >
    <div class="row">
        <div class="col">
            <form action="search-car">
                <select name="color" id="">
                    <option selected>Szin</option>
                    <option value="kék">kék</option>
                    <option value="piros">piros</option>
                    <option value="sárga">sárga</option>
                </select>
                <button class="btn btn-info" style="border-radius:40px" type="submit">Keresés</button>
            </form>
        </div>
        <div class="col-6">
            <a class="btn btn-info"style="border-radius:40px" href="/register">Regisztráció</a>
            <a class="btn btn-info"style="border-radius:40px" href="/login">bejelentkezés</a>
            <a class="btn btn-info" style="border-radius:40px" href="/logout">Kijelentkezés</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-stripped" style="color:white">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Rendszám</th>
                    <th scope="col">Típus</th>
                    <th scope="col">Szín</th>
                    <th scope="col">Ár</th>
                    <th scope="col">Művelet</th>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                    <tr>
                        <td>{{$car->id}}</td>
                        <td>{{$car->plate}}</td>
                        <td>{{$car->brand}}</td>
                        <td>{{$car->color}}</td>
                        <td>{{$car->price}}</td>
                        <td>
                            <a class="btn btn-primary" style="border-radius:40px"  href="/edit-car/{{$car->id}}">Szerkesztés</a>
                            <a class="btn btn-danger" style="border-radius:40px"  href="/delete-car/{{$car->id}}">Törlés</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-2">
            <a style="border-radius:40px" href="/new-car" class="btn btn-primary">Új auto</a>
        </div>
    </div>
</div>
@endsection