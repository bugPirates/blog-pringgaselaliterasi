<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use DB;




class SearchController extends Controller

{

   public function index()

{

return view('search.search');

}



public function search(Request $request)

{

if($request->ajax())

{

$output="";

$products=DB::table('wink_posts')->where('title','LIKE','%'.$request->search."%")->get();

if($products)

{

foreach ($wink_posts as $key => $wink_post) {

$output.='<tr>'.

'<td>'.$wink_post->slug.'</td>'.

'<td>'.$wink_post->title.'</td>'.

'<td>'.$wink_post->description.'</td>'.

'</tr>';

  }



return Response($output);



               }

           }  

        }

  }
