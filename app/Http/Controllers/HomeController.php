<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitedRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RegisteredExport;
use Illuminate\Http\Request;
use App\Models\registered;
use App\Models\invited;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($page)
    {   
        if($page == 'home')
            $invited = invited::all();
            
        if($page == 'reg')
            $invited = registered::all();

        if($page == 'export')
           return Excel::download(new RegisteredExport, 'registeredData.xlsx');

        return view($page,compact('invited'));
    }

    public function store(InvitedRequest $request){
        invited::create($request->validated());
        return redirect()->back();
    }

    public function changeSeat(Request $request,$id){
        registered::where('id',$id)->update(['seat_number' => $request->seat_number]);
        return redirect()->back();
    }

}
