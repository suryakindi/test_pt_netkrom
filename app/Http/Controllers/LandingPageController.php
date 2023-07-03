<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticketing;
class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpage.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ticketing(Request $request, $slug)
    {
        if($request->nama){
            $validated = $request->validate([
                'nama' => 'required',
                'noktp'=> 'required',
                'alamat' => 'required',
            ]);
            if($validated){
                if(Ticketing::where('nama', $request->nama)->exists()){
                    $request->session()->flash('ada-ticket');
                    return redirect()->back();
                }else{
                    $ticketing = new Ticketing;
                    $ticketing->nama = $request->nama;
                    $ticketing->noktp = $request->noktp;
                    $ticketing->alamat = $request->alamat;
                    $ticketing->ticket_id = 'ASIKIN'.'-'.rand(0,1000);
                    $ticketing->checkin = 0;
                    $ticketing->save();
                    $request->session()->flash('sukses-ticket');
                    return redirect('/tiket/'.$slug);
                }
                
            }
        }elseif($request->search){
            $ticket = Ticketing::where('nama', 'LIKE', '%'.$request->search.'%')->get();
            return view('landingpage.ticketing', compact('ticket', 'slug'));
        }
        else{
            $slug = $slug;
            return view('landingpage.ticketing', compact('slug'));
        
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function cetakticketing($slug, $id)
    {
        $ticket = Ticketing::find($id);
        return view('landingpage.cetakticket', compact('ticket', 'slug'));
    }
    
    public function contact(){
        return view('landingpage.contact');
    }

}
