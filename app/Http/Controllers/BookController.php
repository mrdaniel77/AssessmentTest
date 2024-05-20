<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Store;

class BookController extends Controller
{
    public function index(Request $request){

        $search = $request->search;
        if(!empty($search)){
            $book = Book::where('name', 'like', "%". $search."%")
                            ->orwhere('isbn', 'like', "%". $search."%")
                            ->paginate(10);
        }else{
            $book = Book::paginate(10);
        } 
        return view('book.index', compact('book'));
    }

    public function create(){
        $stores = Store::get();
        return view('book.form',compact('stores'));
    }

    public function edit($id){
        $book = Book::find($id);
        return view('book.form', compact('book'));
    }

    public function store(Request $request){
        if (empty($request->id)) {
            $book = Book::create($request->all());
            $message = "Saved successfully!";
        } else {
            $book = Book::find($request->id);
            $book->update($request->all());        
            $message = "Successfully changed!";
        }
        return redirect('/book')->with('success', $message);
    }

    public function delete($id){
        $book = Book::find($id);
        if(!empty($book->id)){
            $book->delete();
            $message = 'Successfully deleted!';
        }else{
            $message = 'Register not found';
        }
        return redirect('/book')->with('danger', $message);
    }
}
