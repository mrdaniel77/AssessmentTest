<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(Request $request){

        $search = $request->search;
        if(!empty($search)){
            $store = Store::where('name', 'like', "%". $search."%")
                            ->paginate(10)->withQueryString();
        }else{
            $store = Store::paginate(10);
        } 
        return view('store.index', compact('store'));
    }

    public function create(){
        $actives = ['On', 'Off'];
        return view('store.form', compact('actives'));
    }

    public function edit($id){
        $actives = ['On', 'Off'];
        $store = Store::find($id);
        return view('store.form', compact('store', 'actives'));
    }

    public function store(Request $request){
        if (empty($request->id)) {
            $store = Store::create($request->all());
            $message = "Saved successfully!";
        } else {
            $store = Store::find($request->id);
            $store->update($request->all());        
            $message = "Successfully changed!";
        }
        return redirect('/store')->with('success', $message);
    }

    public function delete($id){
        $store = Store::find($id);
        if(!empty($store->id)){
            $store->delete();
            $message = 'Successfully deleted!';
        }else{
            $message = 'Register not found';
        }
        return redirect('/store')->with('danger', $message);
    }
}
