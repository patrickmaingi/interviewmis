<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\candidate;
use App\Models\question;
use App\Models\user;
use App\Models\interview;
use App\Models\mark;


class HomeController extends Controller
{

    /**
     * Show the application home.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard.home');
    }

    /**
     * Show the application contact.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('dashboard.contact');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function forgotpswd()
    {
        return view('auth.forgotpswd');
    }
    // public function applicationloans(){
    //      $query = DB::table("loan_applications")
    //     ->leftJoin("clients", "clients.id_no", "loan_applications.client_id")
    //     ->leftJoin("loan_types", "loan_types.loan_productid", "loan_applications.loan_productid")
    //     ->selectRaw("concat(clients.f_name,' ',clients.l_name) client,clients.id_no,loan_applications.loan_id,loan_applications.loan_duration,loan_applications.amount,loan_applications.loan_status,loan_types.loan_name")
    //     ->get();
    //     return view('loans.loanapplication')->with(['data' =>$query]);
    // }  

public function get_candidates(){
          $query = DB::table("candidates")
         ->selectRaw("concat(candidates.f_name,' ',candidates.l_name) client,candidates.id_no,candidates.age,candidates.cand_status")
         ->get();
       return view('adminpanel.candidate')->with(['data' =>$query]);
}

public function add_candidates(Request $request){

        $candidate = new candidate;
        $candidate->id_no = $request->id_no;
        $candidate->f_name = $request->f_name;
        $candidate->m_name = $request->m_name;
        $candidate->l_name = $request->l_name;
        $candidate->age = $request->age;
        $candidate->address = $request->address;
        $candidate->cand_status = 0;
        

        $candidate->save();
        return redirect('candidatelist');
}

public function add_questions(Request $request){
        $question =new question;
        $question->qsn_code=$request->qsn_code;
        $question->qsn_desc=$request->qsn_desc;
        $question->save();
        return redirect('view_question');
}

public function view_questions(){
    $query = DB::table("questions")
         ->selectRaw("questions.qsn_code,questions.qsn_desc")
         ->get();
       return view('adminpanel.viewquestion')->with(['data' =>$query]);
}
public function add_interviews(Request $request){
    $interview = new interview;
    $interview->interview_id=$request->interview_id;
    $interview->interview_desc=$request->interview_desc;
    $interview->save();
    return redirect('view_interview');

}

public function view_interviews(){
    $query = DB::table("interviews")
         ->selectRaw("interviews.interview_id,interviews.interview_desc")
         ->get();
       return view('adminpanel.viewinterview')->with(['data' =>$query]);
}

public function view_profiles($id){
    $query = mark::
        where("id_no",$id)
        //->toArray()
        // ->leftJoin("candidates", "candidates.id_no", "marks.id_no")
        // ->leftJoin("interviews", "interviews.interview_id", "marks.interview_id")
        // ->leftJoin("questions", "questions.qsn_code", "marks.qsn_code")
        // //->whereIn("id_no",$id)
        // ->selectRaw("concat(candidates.f_name,' ',candidates.l_name) client,questions.qsn_desc,questions.qsn_code,interviews.interview_desc,candidates.id_no,candidates.age,candidates.cand_status,marks.score")
        // ->get();
        ->select('qsn_code','interview_id','id_no','score')
        ->get();
        return view('adminpanel.candidate_profile')->with(['data' =>$query]);

}

}