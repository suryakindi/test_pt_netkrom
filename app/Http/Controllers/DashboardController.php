<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticketing;

class DashboardController extends Controller
{
    public function index(){
        $ticket = Ticketing::all();
        return view('panel.index', compact('ticket'));
    }
    public function status($slug){
        if($slug == "checkin"){
            $slug = 1;
        }else{
            $slug = 0;
        }
        $ticket = Ticketing::where('checkin', $slug)->get();
        
        return view('panel.index', compact('ticket'));
    }
    public function update(Request $request, $id){
        $slug = $request->checkin;
        if($slug == "1"){
            $slug = 'checkin';
        }else{
            $slug = 'belumcheckin';
        }
        $ticket = Ticketing::find($id);
        $ticket->checkin = $request->checkin;
        $ticket->save();
        $request->session()->flash('sukses-update');
        return redirect('/dashboard/'.$slug);
    }
    public function editticket(Request $request, $id){
        if($request->all()){
            $ticket = Ticketing::find($id);
            $ticket->nama = $request->nama;
            $ticket->noktp = $request->noktp;
            $ticket->alamat = $request->alamat;
            $ticket->ticket_id = $request->ticket_id;
            $ticket->checkin = $request->status;
            $ticket->save();
            $request->session()->flash('sukses-edit');
            return redirect()->back();
        }else{
            $ticket = Ticketing::find($id);
            return view('panel.edit', compact('ticket'));
        }
        
    }
    public function hapusticket(Request $request, $id){
        $ticket = Ticketing::find($id);
        $ticket->delete();
        $request->session()->flash('sukses-delete');
        return redirect()->back();
    }
}
