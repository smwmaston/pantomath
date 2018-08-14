<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{

    // ****************************
    // function: getGroceryRun
    // type: GET
    // param: $id - grocery run id
    // summary: If $id is set the selected grocery run loads to view for editing.
    //          If not, view is ready for a new grocery run to be added.
    // ****************************

    public function index()
    {
        $blurb = "blahblah";    
        return view('Stories.show')->with('blurb', $blurb);
    }

    public function getShow()
    {
        $blurb = "This is getShow()";    
        return view('Stories.show')->with('blurb', $blurb);
    }

    // ****************************
    // function: getGroceryRun
    // type: GET
    // param: $id - grocery run id
    // summary: If $id is set the selected grocery run loads to view for editing.
    //          If not, view is ready for a new grocery run to be added.
    // ****************************

  //  public function getStory($id = null)
   // {
     //   $user_info = \Auth::user();
     //   $user_grocery_runs = \LMG\GroceryRun::orderBy('dt_grocery_run','DESC')->where('user_id', '=', $user_info->id)->get(); 
     //   $grocery_run_selected = isset($id);

     //   $selected_grocery_run = $user_grocery_runs->find($id);

     //   return view('Stories.show')
     //       ->with('user_grocery_runs', $user_grocery_runs)
     //       ->with('selected_grocery_run', $selected_grocery_run)
     //       ->with('user_info', $user_info)
     //       ->with('grocery_run_selected', $grocery_run_selected);
   // }
}
