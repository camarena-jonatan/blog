<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Requests;

use Khill\Lavacharts\Lavacharts;

use App\Agenda;



class agendacontroller extends Controller{
    public function index(){
        return view("pages.insertar");
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $agenda = new Agenda();
        $agenda->firstname = $request->get("input1");
        $agenda->lastname  = $request->get("input2");
        $agenda->address   = $request->get("input3");
        $agenda->telephone = $request->get("input4");
        $agenda->tipo = $request->get("input5");

        
        // return $request->get("input1").'-'.$request->get("input2").'-'.$request->get("input3").'-'.$request->get("input4");
        $agenda->save() ;
        return redirect('/insertar');
    }

    public function shows2(){
        $agendas = Agenda::get();
        return view('/pages.grafica',compact('agendas'));    
    }

    public function shows(){
        

        $a = Agenda::where('tipo',1)->count();
        $b = Agenda::where('tipo',2)->count();
        $c = Agenda::where('tipo',3)->count();

        $west = Agenda::count();
        $first = Agenda::pluck('firstname')->toArray(); 
        $last = Agenda::pluck('lastname')->toArray(); 
        $address = Agenda::pluck('address')->toArray(); 
        $telephone = Agenda::pluck('telephone')->toArray(); 

        

        $lava = new Lavacharts;
        $reasons = $lava->DataTable();
        $reasons->addStringColumn('Reasons')
                ->addNumberColumn('Percent')
                ->addRow(['Musicos',$a])
                ->addRow(['Matematicos', $b])
                ->addRow(['Electricos', $c]);
        
        $donutchart = $lava->DonutChart('IMDB', $reasons, [
            'title' => 'Profesiones',
            'titleTextStyle'    => ['red'],
            'width' => 1000
        ]);
    
        return view('/pages.consultar',compact('lava','west','first','last','address','telephone'));
    }

    public function edit($id){
        //
    }
    public function update(Request $request, $id){
        //
    }
    public function destroy($id){
        //
    }
}
