<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\ObjectivoEmpresarial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

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
    public function index()
    {
        return view('home');
    }

    public function addObjetivosImpresariais(Request $request)
    {
        $user = Auth::user();

        $messages = [
            'required' => 'O :attribute não pode estar vazio.',
        ];

        $validator = Validator::make($request->all(),
            [
                'title' => 'required',
                'end' => 'required',
            ],
            $messages);

        if ($validator->fails()) {
            return redirect('home')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();

        $objectivos = new ObjectivoEmpresarial();

        $objectivos->title = $data['title'];
        $objectivos->end = $data['end'];
        $objectivos->userid = $user->id;


        $objectivos->save();

        return redirect()->route('home');
    }

    public function getallcompanygoals()
    {
        $goals = DB::table('objectivos_empresariais')->get();

        if (empty($goals)) {
            return view('home', ['goals' => $goals]);
        }
    }

}
