<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\privatejob;
use App\Models\govtjob;
use App\Models\iscode;
use App\Models\qa;
use App\Models\contact;

class AdminController extends Controller
{
    public function enquiry()
    {
        return view("admin.adminpages.enquiry");
    }
    public function govtjobdetail()
    {
//         $todoArr13 = DB::table('govtjobs')
//         ->orderBy('jobname','desc')
//         ->latest()
//         ->limit(3)
//         ->get();
        $todoArr13 = govtjob::orderBy('id', 'desc')->take(3)->get();
        $todoArr110 = privatejob::orderBy('id', 'desc')->take(3)->get();
//          $todoArr110=DB::table('privatejobs')
//          ->orderBy('jobname','desc')
//         ->latest()
//         ->limit(3)
//          ->get();
//         $todoArr110 = DB::select("select * from privatejobs");
       
        return view('front_end/index',['todoArr13'=>$todoArr13,'todoArr110'=>$todoArr110]);
    }
    
    public function search(Request $request)
    {
        $search=$request->search;
        if($search !=='')
        {
            $iscode =iscode::where('iscode','LIKE','%'. $search .'%')->get();
                return view('/front_end/iscodedisplay')
                ->with('iscode',$iscode); 

        }
        return back();
    }
    public function login(Request $request)
        {
            if($request->isMethod('post'))
            {
                $data = $request->input();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'id'=>'1']))
                {
                    return redirect('/admin/adminindex');
                }
                else
                {
                    return redirect('/admin/login');
                }
            }
            return view("admin.login");
        }

 public function adminindex()
 {
     return view('admin.adminindex');
 }   
 public function privatejob()
 {
     return view('admin.adminpages.privatejob');
 }
 public function privatejob_db(Request $req2)
 {
    $privatejobs = new privatejob;
    $privatejobs->jobname=$req2->Jobname;
    $privatejobs->branch=$req2->Branch;
    $privatejobs->eligibility=$req2->Eligibility;
    $privatejobs->companyname=$req2->Companyname;
    $privatejobs->jobtitle=$req2->Jobtitle;
    $privatejobs->lastdate=$req2->Lastname;
    $privatejobs->describtion=$req2->JobDescribtion;
    $jobtitilurl=$req2->Jobtitle;
    $job_url =  str_replace ( ' ','-',$jobtitilurl);
    $privatejobs->jobtitileurl =$jobtitilurl;
    $privatejobs->save();
    return redirect('/admin/adminpages/privatejob')->with('success','Private Jobs add successfully!');
 }
    public function privatejobdetails()
    {
//         $todoArr122 = DB::select('select * from privatejobs');
        //$todoArr122 = privatejob::orderBy('id', 'desc')->get();
        $todoArr122 =privatejob::orderBy('id', 'desc')->paginate(6);
        
        return view('front_end/privatejob',['todoArr122'=>$todoArr122]);
    
    }
    public function privatejobdetailsdescribtion($tab)
    {
        $todoArr141=DB::table('privatejobs')->select('describtion')->where('jobtitileurl',$tab)->first();
        
        return view('front_end/privatejobdescribtion',['todoArr141'=>$todoArr141]);

    }
    
    
    public function govtjob()
    {
     return view('admin.adminpages.govtjob');
    }
    public function contact()
    {
        return view('front_end.contact');
    }
   
    public function contact_db(Request $req2)
    {
        $contacts = new contact;
        $contacts->name=$req2->Name;
        $contacts->email=$req2->Email;
        $contacts->phone=$req2->Phone;
        $contacts->subject=$req2->Subject;
        $contacts->msg=$req2->Msg;
        $contacts->save();
        return redirect('/contact-us')->with('success','We Will Connect You as soon as possible!');
    }
    public function contactdisplay()
    {
        $todoArr111 = DB::select('select * from contacts');
        return view('/admin/adminpages/contact',['todoArr111'=>$todoArr111]);
        
    }
    public function govtjob_db(Request $req2)
    {
        $govtjobs = new govtjob;
        $govtjobs->jobname=$req2->Jobname;
        $govtjobs->branch=$req2->Branch;
        $govtjobs->eligibility=$req2->Eligibility;
        $govtjobs->companyname=$req2->Companyname;
        $govtjobs->jobtitle=$req2->Jobtitle;
        $govtjobs->lastdate=$req2->Lastdate;
        $govtjobs->describtion=$req2->JobDescribtion;
        $jobtitilurl=$req2->Jobtitle;
        $job_url =  str_replace ( ' ','-',$jobtitilurl);
        $govtjobs->jobtitileurl =$jobtitilurl;
        $govtjobs->save();
        return redirect('/admin/adminpages/govtjob')->with('success','Government Jobs add successfully!');
    }
    public function govtjobdetails()
    {
//         $todoArr12 = DB::select('select * from govtjobs');
        //odoArr12 = govtjob::orderBy('id', 'desc')->get();
        $todoArr12 = govtjob::orderBy('id', 'desc')->paginate(6);
        return view('front_end/govtjob',['todoArr12'=>$todoArr12]);
        

    }
    public function jobdetailsdescribtion($tab)
    {
        $todoArr14=DB::table('govtjobs')->select('describtion')->where('jobtitileurl',$tab)->first();
        
        return view('front_end/jobdescribtion',['todoArr14'=>$todoArr14]);

    }
    
    public function iscode()
    {
     return view('admin.adminpages.iscode');
    }
    public function iscode_db(Request $req2)
    {
        $iscodes = new iscode;
        $iscodes->iscode=$req2->CodeId;
        $iscodes->isdescribtion=$req2->CodeDescribtion;
        $iscodes->url=$req2->ISCODEUrl;
        $iscodes->save();
        return redirect('/admin/adminpages/iscode')->with('success','ISCODE  Add successfully!');
       
       }
    public function iscodes_enquiry()
    {
        $todoArr = DB::select('select * from iscodes');
        return view('front_end.iscode',['todoArr'=>$todoArr]);    
    }
    public function qa()
    {
        return view('admin.adminpages.qa');
    }
    public function qa_db(Request $req2)
    {
        $qas = new qa;
        $qas->qaname=$req2->QADescribtion;
        $qas->url=$req2->QAURL;
        $qas->save();
        return redirect('/admin/adminpages/qa')->with('success','QA/ QS Testing  Add successfully!');
       }
    public function qas_enquiry()
    {
           $todoArr = DB::select('select * from qas');
           return view('front_end.qa',['todoArr'=>$todoArr]);    
    }
}
