<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
		public function add(){
        	return view('admin.owner.add');

       }

       public function store(Request $request) {
       $owner = new Owner();

       $owner->name = $request->name;
       $owner->from = $request->from;
       $owner->to = $request->to;

       $owner->slot = $request->slot;

       $owner->save();
       return back();
   }

       public function save(){
        $this->validate(request(),[
            'name'=>'required',
            'from'=>'required',
            'to'=>'required',

            'slot'=>'required',
        ]);
    }

    public function show(){
    	$owners = Owner::get()->all();

        return view('admin.owner.show', compact('owners'));
    }

    public function view($id){
        try {
            $owner = Owner::findOrfail($id);
            return view('admin.owner.view', compact('owner'));
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');;
        }
    }

    public function edit($id){
        try{
            $owner = Owner::findOrfail($id);

            return view('admin.owner.edit',compact('owner'));
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');
        }
    }

    public function update($id){
        $this->validate(request(),[
           'name'=>'required',
            'from'=>'required',
            'to'=>'required',

            'slot'=>'required',

        ]);
        try{
            $owner = Owner::findOrfail($id);
            $owner->name = request('name');
            $owner->from = request('from');
            $owner->to = request('to');
            $owner->slot = request('slot');

            $owner->save();
            return redirect('/owner/')->with('success','Service Updated Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');;
        }
    }

    public function delete($id){
      try {
      	
            Owner::findOrfail($id)->delete();
            return redirect('/owner/')->with('success','Service Deleted Successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            return back()->with('danger','Something went wrong! Delete Not Allowed!');
        }
    }
}
