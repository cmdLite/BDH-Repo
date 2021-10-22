<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;



use App\Models\Menu;



use Illuminate\Support\Facades\DB;

use Illuminate\Database\Query\Builder;


class RubenController extends Controller

{

    public function viewRuben()

    {
        //Alacarte

        $Menus = Menu::all();

        $Starters = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Starters')->get();

        $Steaks = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Steaks')->get();

        $PandS = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->whereIn('sub_cat',['Pasta','Sandwiches'])->get();

        $Rices = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Rice')->get();

        $Specials = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Specials')->get();

        $SSlPs = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->whereIn('sub_cat',['Soup','Salad','Paella'])->get();
        
        //Drinks

        $Menus = Menu::all();

        $Hots = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Hot')->get();

        $OverIces = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Over Ice')->get();

        $IceBlends = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Ice Blended')->get();

        $Others = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Others')->get();

        $Classics = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'CLASSIC COCKTAILS')->get();

        $Signatures = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'SIGNATURE COCKTAILS')->get();

        $OverIce1 = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Over Ice')->first();

        $IceBlend1 = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Ice Blended')->first();



        //Tray

        $Appetizers=Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Appetizer')->get();

        $Salads=Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Salad_Tray')->get();

        $Pastas=Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Pasta_Tray')->get();

        $TSteaks = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Steak_Tray')->get();

        $Beefs = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Beef')->get();

        $Porks = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Pork')->get();

        $Seafoods = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Seafood')->get();

        $Chickens = Menu::select('id','name','sub_cat','img_dir','price_def','price_small','price_large')->where('sub_cat', '=', 'Chicken')->get();



    // return   dd($Starters);

        return view('ruben', compact('Menus',

            'Starters','PandS','Steaks','Rices','Specials','SSlPs',

            'Appetizers', 'Salads', 'Pastas', 'TSteaks', 'Beefs','Porks', 'Seafoods', 'Chickens',
            'Hots', 'OverIces','OverIce1', 'IceBlends','IceBlend1', 'Others', 'Classics', 'Signatures'

        ));

                

    }

}

