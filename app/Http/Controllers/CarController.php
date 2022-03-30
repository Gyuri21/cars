<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view("/listcars",[
            "cars" => $cars
        ]);
    }
    public function create(){
        return view("newcar");
    }
    public function store(Request $request){
        Car::create($request->all());
        return redirect("/");
    }
    public function edit($id){
        $cars = Car::find($id);

        return view("editcar",[
            "cars"=>$cars
        ]);
    }
    public function delete($id){
        $cars = Car::find($id);
        $cars -> delete();

        return redirect("/");
    }
    public function update(Request $request){
        $car = Car::find($request->id);

        $car->update($request->all());

        return redirect("/");
    }
    public function search(Request $request){
        $cars = Car::where("color",$request->color)->get();

        return view("showcar",[
            "cars"=>$cars
        ]);
    }
}
