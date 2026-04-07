<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mail; 
use App\Models\Packages;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $active_menu = 'home';
        return view('welcome',compact('active_menu'));
    }


    public function aboutus(Request $request)
    {        
        $active_menu = 'about';
        return view('about',compact('active_menu'));         
    }

    public function services(Request $request)
    {        
        $active_menu = 'services';
        return view('services',compact('active_menu'));         
    }

    public function addPackage(Request $request)
    {        
        $active_menu = 'packages';
        return view('admin.add_package',compact('active_menu'));         
    }

    //admin
    public function admin(Request $request)
    {        
        $active_menu = 'admin';
        return view('admin.admin',compact('active_menu'));         
    }

    public function packages(Request $request)
    {        
        $active_menu = 'packages';
        return view('packages',compact('active_menu'));         
    }

    public function contact(Request $request)
    {        
        $active_menu = 'contact';
        return view('contact',compact('active_menu'));         
    }

    public function thanku(Request $request)
    {        
        $active_menu = 'thanku';
        return view('thanku',compact('active_menu'));         
    }
    //KeralaPackages

    public function keralaPackages(Request $request)
    {        
        $active_menu = 'packages';
        return view('kerala-packages',compact('active_menu'));         
    }


    public function rajasthanPackages(Request $request)
    {        
        $active_menu = 'packages';
        return view('rajasthan-packages',compact('active_menu'));         
    }


    public function dharamshalaPackages(Request $request)
    {        
        $active_menu = 'packages';
        return view('dharamshala-packages',compact('active_menu'));         
    }


    public function goaPackages(Request $request)
    {        
        $active_menu = 'packages';
        return view('goa-packages',compact('active_menu'));         
    }



    public function sendContactUs(Request $request)
    {   
        $data=$request->all();
        /*echo '<pre>';
        print_r($data);
        exit;*/
        
        $data['messages'] = $data['message'];
        $data['introLines'] = 'New update'; 


       Mail::send('emails.contact_us', $data, function($message) use ($data){
            $message->subject("Query");
            $message->to('rajeshthakur.gcd@gmail.com');
            $message->from('info@vaikunthholidays.in','Vaikunth Holidays Pvt Ltd');
        });


       Mail::send('emails.contact_us', $data, function($message1) use ($data){
            $message1->subject("Query");
            $message1->to('info@vaikunthholidays.in');
            $message1->from('info@vaikunthholidays.in','Vaikunth Holidays Pvt Ltd');
        });

       //info@vaikunthholidays.in
              
  
        if (Mail::failures()) {
           $data['status']= 'error';
        }else{
           $data['status']= 'success';
        }
        echo json_encode($data);
    }

    //sendQueryForm


    public function sendQueryForm(Request $request)
    {   
        $data=$request->all();
        /*echo '<pre>';
        print_r($data);
        exit;*/
        
        $data['messages'] = $data['message'];
        $data['introLines'] = 'New update'; 


       Mail::send('emails.send_query_form', $data, function($message) use ($data){
            $message->subject("Query");
            $message->to('rajeshthakur.gcd@gmail.com');
            $message->from('info@vaikunthholidays.in','Vaikunth Holidays Pvt Ltd');
        });


       Mail::send('emails.send_query_form', $data, function($message1) use ($data){
            $message1->subject("Query");
            $message1->to('info@vaikunthholidays.in');
            $message1->from('info@vaikunthholidays.in','Vaikunth Holidays Pvt Ltd');
        });

       //info@vaikunthholidays.in
              
  
        if (Mail::failures()) {
           $data['status']= 'error';
        }else{
           $data['status']= 'success';
        }
        echo json_encode($data);
    }


    //addNewPortfolio
    public function addNewPackage(Request $request)
    {
        $data = $request->all();
        $image = $request->file('title_image');
        if(isset($image) && !empty($image)){
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) .'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/packages');
            $image->move($destinationPath, $imagename);
            $data['title_image'] = $imagename;
        } else {
            $data['title_image'] = '';
        }


        $overviewImage = $request->file('overview_image');
        if(isset($overviewImage) && !empty($overviewImage)){
            $overviewimagename = pathinfo($overviewImage->getClientOriginalName(), PATHINFO_FILENAME) .'_'.time().'.'.$overviewImage->getClientOriginalExtension();
            $destinationPath2 = public_path('/uploads/packages');
            $overviewImage->move($destinationPath2, $overviewimagename);
            $data['overview_image'] = $overviewimagename;
        } else {
            $data['overview_image'] = '';
        }

        $saveImage = Packages::create(
                $data
        );

        $id = $saveImage['id'];        
        if ($id) {
            $data['status']='success';
            $data['msg']='Data uploaded successfully';
        } else {
            $data['status']='error';
            $data['msg']='Something went wrong. Please try again!';
        }
        echo json_encode($data);
        
    }



}
