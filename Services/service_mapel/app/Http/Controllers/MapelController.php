<?php namespace App\Http\Controllers; 
use App\Mapel; 
use Illuminate\Http\Request; 
class MapelController extends Controller  {     
    public function index()     
    {         
        $mapels = Mapel::all();         
        return response()->json($mapels);     
    }     
    public function store(Request $request)     
    {         
        Mapel::create($request->all());         
        return response()->json([             
            'message' => 'Successfull create new Mapel'         
        ]);     
    }     
    public function show($id)     
    {         
        $Mapel = Mapel::find($id);         
        return response()->json($Mapel);     
    }     
    public function update(Request $request, $id)     
    {         
        $Mapel = Mapel::find($id);         
        $Mapel->update($request->all());         
        return response()->json([             
            'message' => 'Successfull update Mapel'         
        ]);     
    }     
    public function delete($id)     
    {         
        Mapel::destroy($id);         
        return response()->json([             
            'message' => 'Successfull delete Mapel'         
        ]);     
    } 
} 