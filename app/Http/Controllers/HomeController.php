<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mail; 
use App\Models\Packages;
use App\Models\TourExclusions;
use App\Models\TourInclusions;
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
        $latestPackages = Packages::orderBy('id', 'desc')->take(10)->get()->toArray();
        /*echo '<pre>';
        print_r($latestPackages);
        exit;*/
        return view('welcome',compact('active_menu','latestPackages'));
    }


    public function aboutus(Request $request)
    {        
        $active_menu = 'about';
        return view('about',compact('active_menu'));         
    }

    //privacyPolicy

    public function privacyPolicy(Request $request)
    {        
        $active_menu = 'privacy-policy';
        return view('privacy-policy',compact('active_menu'));         
    }


    public function terms(Request $request)
    {        
        $active_menu = 'terms';
        return view('terms',compact('active_menu'));         
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
    {        //packageCategory
        $active_menu = 'admin';
        $allPackagesList = Packages::with('packageCategory')->get()->toArray();
        /*echo '<pre>';
        print_r($allPackagesList);
        exit;*/
        return view('admin.admin',compact('active_menu','allPackagesList'));         
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
        $keralaPackagesList = Packages::where('package_category',2)->get()->toArray();
        /*echo '<pre>';
        print_r($keralaPackagesList);
        exit;*/
        return view('kerala-packages',compact('active_menu','keralaPackagesList'));         
    }

    public function getPackageDetail(Request $request,$id)
    {        
        $active_menu = 'packages';
        $id = base64_decode($id);
        $packageDetails = Packages::with('tourInclusion','tourExclusion')->where('id',$id)->first()->toArray();
        /*echo '<pre>';
        print_r($packageDetails);
        //exit;*/
        if ($packageDetails['day_heading'] && $packageDetails['day_heading'] !='') {
            $packageDetails['day_heading'] = json_decode($packageDetails['day_heading']);
        }

        if ($packageDetails['day_description'] && $packageDetails['day_description'] !='') {
            $packageDetails['day_description'] = json_decode($packageDetails['day_description']);
        }
        /*echo '<pre>';
        print_r($packageDetails);
        exit;*/
        return view('packages-details',compact('active_menu','packageDetails'));         
    }
    //getPackageDetail


    public function rajasthanPackages(Request $request)
    {        
        $active_menu = 'packages';
        $rajasthanPackagesList = Packages::where('package_category',4)->get()->toArray();
        return view('rajasthan-packages',compact('active_menu','rajasthanPackagesList'));         
    }


    public function himachalPackages(Request $request)
    {        
        $active_menu = 'packages';
        $himachalPackagesList = Packages::where('package_category',1)->get()->toArray();
        return view('himachal-packages',compact('active_menu','himachalPackagesList'));         
    }


    public function goaPackages(Request $request)
    {        
        $active_menu = 'packages';
        $goaPackagesList = Packages::where('package_category',3)->get()->toArray();
        return view('goa-packages',compact('active_menu','goaPackagesList'));         
    }

    public function kashmirPackages(Request $request)
    {        
        $active_menu = 'packages';
        $kashmirPackagesList = Packages::where('package_category',5)->get()->toArray();
        return view('kashmir-packages',compact('active_menu','kashmirPackagesList'));         
    }

    public function uttarakhandPackages(Request $request)
    {        
        $active_menu = 'packages';
        $uttarakhandPackagesList = Packages::where('package_category',6)->get()->toArray();
        return view('uttarakhand-packages',compact('active_menu','uttarakhandPackagesList'));         
    }

    public function gujaratPackages(Request $request)
    {        
        $active_menu = 'packages';
        $gujaratPackagesList = Packages::where('package_category',7)->get()->toArray();
        return view('gujarat-packages',compact('active_menu','gujaratPackagesList'));         
    }

    public function lehLadakhPackages(Request $request)
    {        
        $active_menu = 'packages';
        $lehLadakhPackagesList = Packages::where('package_category',8)->get()->toArray();
        return view('leh-ladakh-packages',compact('active_menu','lehLadakhPackagesList'));         
    }

    public function tamilNaduPackages(Request $request)
    {        
        $active_menu = 'packages';
        $tamilNaduPackagesList = Packages::where('package_category',9)->get()->toArray();
        return view('tamil-nadu-packages',compact('active_menu','tamilNaduPackagesList'));         
    }

    //odishaPackages
    public function karnatakaPackages(Request $request)
    {        
        $active_menu = 'packages';
        $karnatakaPackagesList = Packages::where('package_category',10)->get()->toArray();
        return view('karnataka-packages',compact('active_menu','karnatakaPackagesList'));         
    }


    public function odishaPackages(Request $request)
    {        
        $active_menu = 'packages';
        $odishaPackagesList = Packages::where('package_category',11)->get()->toArray();
        return view('odisha-packages',compact('active_menu','odishaPackagesList'));         
    }

    public function sikkimDarjeelingPackages(Request $request)
    {        
        $active_menu = 'packages';
        $sikkimDarjeelingPackagesList = Packages::where('package_category',12)->get()->toArray();
        return view('sikkim-Darjeeling-packages',compact('active_menu','sikkimDarjeelingPackagesList'));         
    }

    public function northEastPackages(Request $request)
    {        
        $active_menu = 'packages';
        $northEastPackagesList = Packages::where('package_category',13)->get()->toArray();
        return view('north-east-packages',compact('active_menu','northEastPackagesList'));         
    }

    public function madhyaPradeshPackages(Request $request)
    {        
        $active_menu = 'packages';
        $madhyaPradeshPackagesList = Packages::where('package_category',14)->get()->toArray();
        return view('madhya-pradesh-packages',compact('active_menu','madhyaPradeshPackagesList'));         
    }

    public function andamanNicobarPackages(Request $request)
    {        
        $active_menu = 'packages';
        $andamanNicobarPackagesList = Packages::where('package_category',15)->get()->toArray();
        return view('andaman-nicobar-packages',compact('active_menu','andamanNicobarPackagesList'));         
    }

    //internationalTours

    public function internationalTours(Request $request)
    {        
        $active_menu = 'international';
        $internationalToursList = Packages::where('package_category',16)->get()->toArray();
        return view('international-tours-packages',compact('active_menu','internationalToursList'));         
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

       
        if ($data['day_heading'] && count($data['day_heading'])>0) {
            $data['day_heading'] = json_encode($data['day_heading']);
        }


         if ($data['day_description'] && count($data['day_description'])>0) {
            $data['day_description'] = json_encode($data['day_description']);
        }
        /*echo '<pre>';
        print_r($data);
        exit;*/

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
                if ($data['tour_inclusion'] && count($data['tour_inclusion']) >0) {
                    foreach ($data['tour_inclusion'] as $key => $value) {
                        if ($value && $value!=='') {
                            $inclusionData = [];
                            $inclusionData['package_id'] = $id;
                            $inclusionData['title'] = $value;
                            $saveInclusionData = TourInclusions::create(
                                $inclusionData
                            );
                        }
                        
                    }
                }
            }


        if ($id) {
                if ($data['tour_exclusion'] && count($data['tour_exclusion']) >0) {
                    foreach ($data['tour_exclusion'] as $key => $value) {
                        if ($value && $value!=='') {
                            $exclusionData = [];
                            $exclusionData['package_id'] = $id;
                            $exclusionData['title'] = $value;
                            $saveExclusionData = TourExclusions::create(
                                $exclusionData
                            );
                        }
                        
                    }
                }
            }


        /*echo '<pre>';
        print_r($data);
        exit;*/


        if ($id) {
            $data['status']='success';
            $data['msg']='Data uploaded successfully';
        } else {
            $data['status']='error';
            $data['msg']='Something went wrong. Please try again!';
        }
        echo json_encode($data);
        
    }

    //deletePackage

    public function deletePackage(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        Packages::where('id',$id)->delete();
        TourInclusions::where('package_id',$id)->delete();
        TourExclusions::where('package_id',$id)->delete();
        $data['status']='success';
        $data['msg']='Data deleted successfully';
        echo json_encode($data);
        /*echo '<pre>';
        print_r($data);
        exit;*/
    }
}
