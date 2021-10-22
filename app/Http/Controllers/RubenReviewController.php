<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Facebook\Facebook;


use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\DB;


class RubenReviewController extends Controller
{
   public function index(){
      $fb = new Facebook([
         'app_id' => env('FACEBOOK_CLIENT_ID'),
         'app_secret' => env('FACEBOOK_CLIENT_SECRET'),
         'default_graph_version' => 'v2.3',
         // . . .
         ]);

      try {
         // Returns a `FacebookFacebookResponse` object
         $response = $fb->get(
           '107186324883645/ratings?fields=open_graph_story',
           'EAAHi8y2sW1ABAJB63tmHrjIaJZCPmgOXUHt5Iv08Bx2mP04vgxqdRxgG7NUrDt0LUoB6BIj4ZBzgyj6JkfJhi1XCO4qtwIcndFAQ6SlUUhkMxyxxj3ZCKZCxu1R23Mqs1o3buxTrL8tBecxmlZCFLgeZCDr0GiKBfTVWSN4NIHYOHJ15CUTPlb'
         );
       } catch(FacebookExceptionsFacebookResponseException $e) {
         echo 'Graph returned an error: ' . $e->getMessage();
         exit;
       } catch(FacebookExceptionsFacebookSDKException $e) {
         echo 'Facebook SDK returned an error: ' . $e->getMessage();
         exit;
       }
       $graphNode = $response->getGraphEdge();


$feedEdge = $response->getGraphEdge()->asArray();
$feed = $response->getGraphEdge();

$count = $feed->count();
// return is_int($count);

   for($i = 0; $i < $count ; $i ++){
      echo ("<pre>".print_r($feed[$i]['open_graph_story'],true)."</pre>");
}
 

 
//  echo $tag[$i]['open_graph_stroy'];



// return print("<pre>".print_r($feedEdge[0]['open_graph_story'],true)."</pre>");


        

      //  return view('partial.ruben-review');
   }
}
