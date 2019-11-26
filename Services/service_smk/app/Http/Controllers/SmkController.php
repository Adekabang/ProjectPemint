<?php namespace App\Http\Controllers; 
use App\Smk; 
use Illuminate\Http\Request; 
class SmkController extends Controller  {     
    public function index()     
    {         
        $smks = Smk::all();         
        return response()->json($smks);     
    }     
    public function store(Request $request)     
    {         
        Smk::create($request->all());         
        return response()->json([             
            'message' => 'Successfull create new SMK'         
        ]);     
    }     
    public function show($id)     
    {         
        $smk = Smk::find($id);         
        return response()->json($smk);     
    }     
    public function update(Request $request, $id)     
    {         
        $smk = Smk::find($id);         
        $smk->update($request->all());         
        return response()->json([             
            'message' => 'Successfull update SMK'         
        ]);     
    }     
    public function delete($id)     
    {         
        Smk::destroy($id);         
        return response()->json([             
            'message' => 'Successfull delete SMK'         
        ]);     
    } 
} 