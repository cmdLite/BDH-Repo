<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class MenuListController extends Controller
{

    public function __construct()
{
    $this->middleware('auth');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Menus = Menu::all();
        return view('menulist', compact('Menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                        // validate
        // read more on validation at http://laravel.com/docs/validation
        $request->validate([
            'name'       => 'required',
            'category'      => 'required',
            'subcat' => 'required',
            'image' => 'required',
        ]);
    
            // store
            $prod = new Menu;
            $prod->name       = $request->name;
            $prod->category   = $request->category;
            $prod->price_def = $request->price_def;
            $prod->price_small = $request->price_small;
            $prod->price_large = $request->price_large;
            $prod->sub_cat    = $request->subcat;
            $prod->description = "";
            $prod->user_id = auth()->user()->id;
        
            if ($request->hasfile('image')){
                $menuimg=$request->file('image');
                $extension = $menuimg->getClientOriginalExtension();
                $filename= time(). '.' . $extension;
                $imgloc2 = 'public/product/';
               $menuimg->storeAs($imgloc2,$filename);
                
                $imgpath2 =$imgloc2.$filename;
                // dd($imgpath2);
                $prod->img_dir=$imgpath2;

                $prod->save();
            // redirect
                
            return redirect()->back()->with('saved','Menu Created Successfully');
        }

        else{
            return redirect()->back()->with('noimg','No Image Selected');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $menus=Menu::find($id);
        return view('products.edit', compact('menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $findIMG = Menu::findOrFail($id);
        if ($request->hasfile('image')){
            $menuimg=$request->file('image');
            $extension = $menuimg->getClientOriginalExtension();
            $filename= time(). '.' . $extension;
            $imgloc = 'storage/product/';
            $menuimg->move($imgloc,$filename);
            $imgpath =$imgloc.$filename;

            $findIMG->update(['img_dir' => $imgpath]);
            
            return redirect()->back()->with('success','Menu Updated Successfully');
        }

        else{
            return redirect()->back()->with('Fail','No Image Selected');
        }
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $menus=Menu::find($id);
        $menus->delete();
        // return view('menulist', compact('menus'));
        return redirect('menus');
    }

    
}

//RubenController Query Backup


        // //Alacarte

        // $Menus = Menu::all();

        // $Starters = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Starters')->get();

        // $Steaks = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Steaks')->get();

        // $PandS = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->whereIn('sub_cat',['Pasta','Sandwiches'])->get();

        // $Rices = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Rice')->get();

        // $Specials = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Specials')->get();

        // $SSlPs = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->whereIn('sub_cat',['Soup','Salad','Paella'])->get();
        
        // //Drinks

        // $Menus = Menu::all();

        // $NonHot = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->whereIn('sub_cat', '=', 'Hot')->get();

        // $Steaks = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Steaks')->get();

        // $PandS = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->whereIn('sub_cat',['Pasta','Sandwiches'])->get();

        // $Rices = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Rice')->get();

        // $Specials = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Specials')->get();

        // $SSlPs = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->whereIn('sub_cat',['Soup','Salad','Paella'])->get();



        // //Tray

        // $Appetizers=Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Appetizer')->get();

        // $Salads=Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Salad_Tray')->get();

        // $Pastas=Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Pasta_Tray')->get();

        // $TSteaks = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Steak_Tray')->get();

        // $Beefs = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Beef')->get();

        // $Porks = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Pork')->get();

        // $Seafoods = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Seafood')->get();

        // $Chickens = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Chicken')->get();

