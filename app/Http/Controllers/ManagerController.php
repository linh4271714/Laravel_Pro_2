<?php

namespace App\Http\Controllers;

use Request;
use Session;
use Illuminate\Support\collection;
use App\Model\ManagerModel;

class ManagerController extends Controller
{
    private $folder = 'managers';

    public function mng_login()
    {
        return view('mng_login');
    }

    public function mng_login_process(Request $request)
    {
        $mng        = new ManagerModel();
        $mng->email = Request::get('email');
        $mng->pass  = Request::get('pass');
        $mng_array  = $mng->mng_login_process();
        if(count($mng_array)==1){
            Session::put('ID_manager',$mng_array[0]->ID_manager);

            return redirect()->route('mng_add_new_bill');
        }
        return redirect()->route('mng_login')->with('error','Login information is incorrect.');
    }

    public function mng_view_accout()
    {
        $mng_model     = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $array_mng     = $mng_model->get_accout();

        return view('mng_view_accout',compact('array_mng'));
    }

    public function mng_check_password()
    {
        return view('mng_check_password');
    }

    public function mng_check_password_process()
    {
        $pass_check    = Request::get('pass_check');
        $mng_model     = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $array_mng     = $mng_model->get_accout();
        $pass          = $array_mng[0]->Pass;
        if($pass==$pass_check){
            return redirect()->route('mng_edit_accout');
        }
        return redirect()->route('mng_check_password')->with('error','Incorrect password.');
    }

    public function mng_check_password_2()
    {
        return view('mng_check_password_2');
    }

    public function mng_check_password_process_2()
    {
        $pass_check    = Request::get('pass_check');
        $mng_model     = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $array_mng     = $mng_model->get_accout();
        $pass          = $array_mng[0]->Pass;
        if($pass==$pass_check){
            return redirect()->route('mng_change_password');
        }
        return redirect()->route('mng_check_password_2')->with('error','Incorrect password.');
    }

    public function mng_edit_accout()
    {
        $mng_model     = new ManagerModel();
        $mng_model->ID = Session::get('ID_manager');
        $array_mng     = $mng_model->get_accout();

        return view('mng_edit_accout',compact('array_mng'));
    }

    public function mng_edit_accout_process()
    {
        $mng           = new ManagerModel();
        $mng->ID       = Session::get('ID_manager');
        $mng->userName = Request::get('userName');
        $mng->email    = Request::get('email');
        $mng->phone    = Request::get('phone');
        $mng->add      = Request::get('add');        
        $mng->mng_edit_accout_process();

        return redirect()->route('mng_view_accout')->with('success','Edit successful!');
    }

    public function mng_change_password()
    {
        return view('mng_change_password');
    }

    public function mng_change_password_process()
    {
        $mng_model       = new ManagerModel();
        $mng_model->ID   = Session::get('ID_manager');
        $mng_model->pass = Request::get('pass');
        $mng_model->mng_change_password_process();
        return redirect()->route('mng_view_accout')->with('success','Change successful!');
    }

    public function mng_logout()
    {
        Session::flush();
        return redirect()->route('mng_login')->with('success','Logout successful.');
    }

    public function mng_add_category()
    {
        return view('mng_add_category');
    }

    public function mng_add_category_process()
    {
        $mng_model = new ManagerModel();
        $a         = Request::get('category1');
        $b         = Request::get('category2');
        $c         = Request::get('category3');
        $d         = Request::get('category4');
        $e         = Request::get('category5');
        $category  = Request::get('category');
        $collection= collect([$a, $b, $c, $d, $e, $category]);
        for ($i=0; $i <6 ; $i++) { 
            if($collection[$i]==''){
                unset($collection[$i]);
            }
        }
        $collection= $collection->values();
        $mng_model->mng_add_category_process($collection);

        return redirect()->route('add_category');
    }

    public function mng_view_all_category()
    {
        $mng_model      = new ManagerModel();
        $array_category = $mng_model->get_all_category();
        return view('view_all_category',compact('array_category'));
    }

    public function mng_add_author()
    {
        return view('mng_add_author');
    }

    public function mng_add_author_process()
    {
        $mng_model = new ManagerModel();
        $a         = Request::get('author1');
        $b         = Request::get('author2');
        $c         = Request::get('author3');
        $d         = Request::get('author4');
        $e         = Request::get('author5');
        $author         = Request::get('author');

        $collection= collect([$a, $b, $c, $d, $e, $author]);
        for ($i=0; $i <6 ; $i++) { 
            if($collection[$i]==''){
                unset($collection[$i]);
            }
        }
        $collection= $collection->values();
        $mng_model->mng_add_author_process($collection);

        return redirect()->route('add_author');
    }

    public function mng_view_all_author()
    {
        $mng_model    = new ManagerModel();
        $array_author = $mng_model->get_all_author();
        return view('view_all_author',compact('array_author'));
    }

    public function mng_add_publisher()
    {
        return view('mng_add_publisher');
    }

    public function mng_add_publisher_process()
    {
        $mng_model = new ManagerModel();
        $a         = Request::get('publisher1');
        $b         = Request::get('publisher2');
        $c         = Request::get('publisher3');
        $d         = Request::get('publisher4');
        $e         = Request::get('publisher5');
        $publisher         = Request::get('publisher');

        $collection= collect([$a, $b, $c, $d, $e, $publisher]);
        for ($i=0; $i <6 ; $i++) { 
            if($collection[$i]==''){
                unset($collection[$i]);
            }
        }
        $collection= $collection->values();
        $mng_model->mng_add_publisher_process($collection);

        return redirect()->route('add_publisher');
    }

    public function mng_view_all_publisher()
    {
        $mng_model       = new ManagerModel();
        $array_publisher = $mng_model->get_all_publisher();
        return view('view_all_publisher',compact('array_publisher'));
    }

    public function import_book()
    {
        $mng_model       = new ManagerModel();
        $array_author    = $mng_model->get_all_author();
        $array_category  = $mng_model->get_all_category();
        $array_publisher = $mng_model->get_all_publisher();
        return view('mng_import_book',compact('array_author','array_category','array_publisher'));
    }

    public function mng_import_book_process()
    {
        $mng_model               = new ManagerModel();
        $urlImg="";
        if (Request::hasFile('image')) {
            $image = Request::file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name);
            $urlImg='images/'.$name;
        }
        $mng_model->id_category  = Request::get('category');
        $mng_model->id_publisher = Request::get('publisher');
        $mng_model->name         = Request::get('name');
        $mng_model->id_author    = Request::get('author');
        $mng_model->price        = Request::get('price');
        $mng_model->quanlity     = Request::get('quanlity');
        $mng_model->image        = $urlImg;
        $mng_model->demo         = Request::get('demo');
        $mng_model->status       = Request::get('status');
        $mng_model->importDate   = date("Y-m-d");
        $mng_model->id_manager   = Session::get('ID_manager');

        $mng_model->mng_import_book_process();
        return redirect()->route('import_book')->with('success','The book was successfully added.');;
    }

    public function mng_add_new_bill()
    {
        $mng_model               = new ManagerModel();
        $array_name = $mng_model->get_all_book_for_bill();
        $array_author = $mng_model->get_all_author();
        $array_publisher = $mng_model->get_all_publisher();
        return view('mng_view_add_new_bill',compact('array_publisher', 'array_author', 'array_name'));
    }
    public function mng_add_new_bill_total()
    {
        $mng_model = new ManagerModel();
        $ID_book_1 = $mng_model->ID_book_1  = Request::get('book1');
        $ID_book_2 = $mng_model->ID_book_2  = Request::get('book2');
        $ID_book_3 = $mng_model->ID_book_3  = Request::get('book3');
        $deposit = $mng_model->get_price_book();
    }
    
    public function mng_add_new_bill_process()
    {
        $mng_model               = new ManagerModel();
        $mng_model->reader = Request::get('customer');
        $mng_model->idreader = Request::get('ID');
        $mng_model->idlender = Session::get('ID_manager');
        $mng_model->borrowdate = date("Y-m-d");
        $mng_model->total = Request::get('total');
        $mng_model->status = "Be borrowing";
        $id_book1 =  Request::get('book1');
        $id_book2 =  Request::get('book2');
        $id_book3 =  Request::get('book3');
        $number1 =  Request::get('number1');
        $number2 =  Request::get('number2');
        $number3 =  Request::get('number3');

        $collection3 = collect([$id_book1, $id_book2, $id_book3]);
        $collection2 = collect([$number1, $number2, $number3]);
        if(isset($collection2) and isset($collection3)){
            for ($i=0; $i <3 ; $i++) { 
                if($collection3[$i]==""){
                    unset($collection3[$i]);
                    unset($collection2[$i]);
                }
            }
            for ($i=0; $i < $collection2->count(); $i++) { 
                if($collection2[$i]<1 or $collection2[$i]==""){
                    unset($collection3[$i]);
                    unset($collection2[$i]);
                }
            }
        }
        $collection3= $collection3->values();
        $collection2= $collection2->values();
        $mng_model->mng_add_new_bill_process();

        $mng_model->newest_bill = $mng_model->select_newest_bill();
        $mng_model->mng_add_detail_invoice($collection3, $collection2);
        return view('mng_view_add_new_bill');
    }

    public function mng_search()
    {
        $mng_model = new ManagerModel();
        $array_book = $mng_model->get_all_book();
        return view('mng_search',compact('array_book'));
    }
    public function mng_search_process()
    {
        $mng_model = new ManagerModel();

        $mng_model->author  = Request::get('name_author');
        $mng_model->publisher = Request::get('name_publisher');
        $mng_model->name      = Request::get('name_book');

        $array_result= $mng_model->search_book();
        if(count($array_result)==0)
        {
            return view('mng_search_result_0');
        }
        return view('mng_search_result', compact('array_result'));
    }
}
