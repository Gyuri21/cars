@extends("layouts.master")
@section("content")
<div class="row">
        <div class="col">
            <table style="color:white"class="table table-stripped">
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
                            <a class="btn btn-primary" href="/edit-car/{{$car->id}}">Szerkesztés</a>
                            <a class="btn btn-danger" href="/delete-car/{{$car->id}}">Törlés</a>
                            <a class="btn btn-info" href="/">Vissza</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection