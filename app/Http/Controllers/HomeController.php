<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Anusangik_khroch;
use App\Models\Abbhontorin_check;
use App\Models\Share_sonchoi_rosid;
use App\Models\Rijab_fund;
use App\Models\Rijab_fund_uttolon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Session;
Session_start();
class HomeController extends Controller
{
    public function index(){
        $this->AdminAuthCheck();
        return view('home.index');
     }


    public function user_create_form(){
        $this->AdminAuthCheck();
        return view('user-create-form.index');
     }
    public function all_user_information(){
        $this->AdminAuthCheck();
        $user_info=User::all();
        return view('all-user-information.index')->with('user_info',$user_info);

     }
    public function songoroho_talika(){
        $this->AdminAuthCheck();
        $particuler_user_all_info = DB::table('users')
            ->join('share_sonchoi_rosids', 'users.id', '=', 'share_sonchoi_rosids.user_id')
            ->get();
            return view('songoroho-talika.index')->with('user_all_infos',$particuler_user_all_info);

     }

     public function AdminAuthCheck(){
        $admin_id=Session::get('id');

        if($admin_id){
            return;
        }else{
            return Redirect::to('/admin-logout')->send();
        }

    }

    public function user_admission_form(Request $request){
        //  return $request->input('first_name');
        // $request->validate( [
            // 'সদস্য_নাম_মি_মিসেস_মিস' => ['required', 'string', 'max:255'],
            // 'সদস্য_পিতা_স্বামীর_নাম' => ['required', 'string', 'max:255'],
            // 'সদস্য_মাতার_নাম' => ['required', 'string','max:255'],
            // 'সদস্য_বর্তমান_ঠিকানা' => ['required','string','max:255'],
            // 'সদস্য_স্থায়ী_ঠিকানা_গ্রাম' => ['required','string','max:255'],
            // 'সদস্য_পো' => ['required'],
            // 'সদস্য_উপজেলা' => ['required'],
            // 'সদস্য_জেলা' => ['required'],
            // 'সদস্য_বয়স_বৎসর' => ['required'],
            // 'সদস্য_জন্মতারিখ' => ['required'],
            // 'সদস্য_জাতীয়তা' => ['required'],
            // 'সদস্য_ধর্ম' => ['required'],
            // 'সদস্য_পেশা' => ['required'],
            // 'অন্য_সমিতির_সদস্য_নং' => ['required'],
            // '100_টাকা_জমা' => ['required'],
            // 'নমিনির_সম্পর্ক' => ['required'],
            // 'উত্তরাধিকারীর_নাম' => ['required'],
            // 'উত্তরাধিকারীর_স্থায়ী_ঠিকানা' => ['required'],
            // 'উত্তরাধিকারীর_পো' => ['required'],
            // 'উত্তরাধিকারীর_উপজেলা' => ['required'],
            // 'উত্তরাধিকারীর_জেলা' => ['required'],
            // 'আবেদন_ভর্তির_তারিখ' => ['required'],
            // 'ভর্তির_আবেদনকারীর_স্বাক্ষর' => ['required'],

            // 'পরিচয়_প্রদানকারীর_নাম_1' => ['required'],
            // 'পরিচয়_প্রদানকারীর_স্বাক্ষর_1' => ['required'],
            // 'পরিচয়_প্রদানকারীর_সদস্য_1' => ['required'],

            // 'পরিচয়_প্রদানকারীর_নাম_2' => ['required'],
            // 'পরিচয়_প্রদানকারীর_স্বাক্ষর_2' => ['required'],
            // 'পরিচয়_প্রদানকারীর_সদস্য_নং_2' => ['required'],

            // 'পরিচয়_প্রদানকারীর_তারিখ' => ['required'],
            // 'পরিচয়_প্রদানকারীর_আবেদনকারীর_স্বাক্ষর' => ['required'],
            // 'ম্যানেজমেন্ট_অনুমোদনের_তারিখ' => ['required'],
            // 'তারিখ' => ['required'],
            // 'সংগ্রহকারীর_স্বাক্ষর' => ['required'],
            // 'Phone_no' => ['required','unique:user_infos'],
            // 'national_id_no' => ['required','unique:user_infos'],
            // 'edu_qualification' => ['required'],
            // 'email_or_fb_link' => ['required', 'string', 'max:255','unique:user_infos'],
            // 'nominee_name' => ['required'],
            // 'nominee_phone_no' => ['required','unique:user_infos'],
            // 'nominee_national_no' => ['required','unique:user_infos'],
            // 'nominee_relationship' => ['required'],
            // 'user_photo' => ['required','image'],
            // 'nominee_photo' => ['required','image'],
            // 'nominee_signature' => ['required','image'],
            // 'signature_photo' => ['required'],'image',

        // ]);

        $store= User::create([
            'সদস্য_নাম_মি_মিসেস_মিস' => $request['সদস্য_নাম_মি_মিসেস_মিস'],
            'সদস্য_পিতা_স্বামীর_নাম' => $request['সদস্য_পিতা_স্বামীর_নাম'],
            'সদস্য_মাতার_নাম' => $request['সদস্য_মাতার_নাম'],
            'সদস্য_বর্তমান_ঠিকানা' => $request['সদস্য_বর্তমান_ঠিকানা'],
            'সদস্য_স্থায়ী_ঠিকানা_গ্রাম' => $request['সদস্য_স্থায়ী_ঠিকানা_গ্রাম'],
            'সদস্য_পো' => $request['সদস্য_পো'],
            'সদস্য_উপজেলা' => $request['সদস্য_উপজেলা'],
            'সদস্য_জেলা' => $request['সদস্য_জেলা'],
            'সদস্য_বয়স_বৎসর' => $request['সদস্য_বয়স_বৎসর'],
            'সদস্য_জন্মতারিখ' => $request['সদস্য_জন্মতারিখ'],
            'সদস্য_জাতীয়তা' => $request['সদস্য_জাতীয়তা'],
            'সদস্য_ধর্ম' => $request['সদস্য_ধর্ম'],
            'সদস্য_পেশা' => $request['সদস্য_পেশা'],
            'অন্য_সমিতির_সদস্য_নং' => $request['অন্য_সমিতির_সদস্য_নং'],
            '100_টাকা_জমা' => $request['100_টাকা_জমা'],
            'নমিনির_সম্পর্ক' => $request['নমিনির_সম্পর্ক'],
            'উত্তরাধিকারীর_নাম' => $request['উত্তরাধিকারীর_নাম'],
            'উত্তরাধিকারীর_স্থায়ী_ঠিকানা' => $request['উত্তরাধিকারীর_স্থায়ী_ঠিকানা'],
            'উত্তরাধিকারীর_পো' => $request['উত্তরাধিকারীর_পো'],
            'উত্তরাধিকারীর_উপজেলা' => $request['উত্তরাধিকারীর_উপজেলা'],
            'উত্তরাধিকারীর_জেলা' => $request['উত্তরাধিকারীর_জেলা'],
            'আবেদন_ভর্তির_তারিখ' => $request['আবেদন_ভর্তির_তারিখ'],
            'ভর্তির_আবেদনকারীর_স্বাক্ষর' => $request['ভর্তির_আবেদনকারীর_স্বাক্ষর'],
            'পরিচয়_প্রদানকারীর_নাম_1' => $request['পরিচয়_প্রদানকারীর_নাম_1'],
            'পরিচয়_প্রদানকারীর_স্বাক্ষর_1' => $request['পরিচয়_প্রদানকারীর_স্বাক্ষর_1'],
            'পরিচয়_প্রদানকারীর_সদস্য_1' => $request['পরিচয়_প্রদানকারীর_সদস্য_1'],

            'পরিচয়_প্রদানকারীর_নাম_2' => $request['পরিচয়_প্রদানকারীর_নাম_2'],
            'পরিচয়_প্রদানকারীর_স্বাক্ষর_2' => $request['পরিচয়_প্রদানকারীর_স্বাক্ষর_2'],
            'পরিচয়_প্রদানকারীর_সদস্য_নং_2' => $request['পরিচয়_প্রদানকারীর_সদস্য_নং_2'],

            'পরিচয়_প্রদানকারীর_তারিখ' => $request['পরিচয়_প্রদানকারীর_তারিখ'],
            'পরিচয়_প্রদানকারীর_আবেদনকারীর_স্বাক্ষর' => $request['পরিচয়_প্রদানকারীর_আবেদনকারীর_স্বাক্ষর'],
            'ম্যানেজমেন্ট_অনুমোদনের_তারিখ' => $request['ম্যানেজমেন্ট_অনুমোদনের_তারিখ'],
            'অনুমোদনকারী_নাম' => $request['অনুমোদনকারী_নাম'],
            'সদস্য_নং' => $request['সদস্য_নং'],
            'তারিখ' => $request['তারিখ'],
            'সংগ্রহকারীর_স্বাক্ষর' => $request['সংগ্রহকারীর_স্বাক্ষর'],

            // 'user_photo' => $user_photo,
            // 'nominee_photo' => $nominee_photo,
            // 'nominee_signature' => $nominee_signature,
            // 'signature_photo' => $signature_photo,


        ]);

        if($store){
            return redirect('/all-user-information');

            // return view('songoroho-talika.index')->with('success_message','Thank you for filling out your information. we will get back to you soon!');
        }else{
             return;
        }
    }


  
    public function roshid_submit(Request $request , $id){

        // return $request;
        // $data=User::where('id',$user_id)->get();

        $store= Share_sonchoi_rosid::create([
            'রশিদ_নং' => $request['রশিদ_নং'],
            'শেয়ার' => $request['শেয়ার'],
            'সঞ্চয়' => $request['সঞ্চয়'],
            'ঋণ_ফেরৎ' => $request['ঋণ_ফেরৎ'],
            'সুদ' => $request['সুদ'],
            'জরিমানা' => $request['জরিমানা'],
            'ভর্তি_ফি' => $request['ভর্তি_ফি'],
            'বিক্রয়' => $request['বিক্রয়'],
            'হিসাব_খরচ' => $request['হিসাব_খরচ'],
            'বিশেষ_সঞ্চয়' => $request['বিশেষ_সঞ্চয়'],
            'হিসাব_খরচ' => $request['হিসাব_খরচ'],
            'user_id' =>$id,



        ]);
        if($store){

            return redirect('/songoroho-talika');

            // return view('songoroho-talika.index')->with('success_message','Thank you for filling out your information. we will get back to you soon!');
        }else{
             return;
        }
     }

     public function anusangik_ai(){
        return view('anusangik-ai.index');
     }

     public function particuler_user_info($id){
        $user_infos  =  User::where('id', $id)->firstOrFail();

        //  $cities = DB::table('users')
        // ->join('share_sonchoi_rosids', 'share_sonchoi_rosids.user_id', '=','users.id' )
        // ->where('share_sonchoi_rosids.user_id', '=', $id)
        // // ->orderBy('users.created_at', 'DESC')
        // ->get();
        // // ->toArray();
         
         $particuler_user_all_info = User::join('share_sonchoi_rosids', 'share_sonchoi_rosids.user_id', '=', 'users.id' )->where('share_sonchoi_rosids.user_id', '=', $id)->orderBy('users.created_at', 'DESC')
         ->get();

         $anusangik_khroch_amounts= Abbhontorin_check::where('হিসাব_নং', '=', $user_infos->সদস্য_নং)
         ->orderBy('created_at', 'DESC')
         ->get();

        $user_all_infos = array_merge($particuler_user_all_info->toArray(), $anusangik_khroch_amounts->toArray());
        usort($user_all_infos, function($a, $b)
        {
            
            return $a['created_at'] < $b['created_at'];
        });

        return view('particular-user-info.index')->with('user_info',$user_infos)->with('user_all_infos',$user_all_infos)->with('anusangik_khroch_amounts',$anusangik_khroch_amounts);

     }


     public function abbhantorin_check(){
        $anusangik_khroch_type= Anusangik_khroch::get();
        $user_infos  =  User::get();
        return view('abbhantorin-check.index')->with('khroch_types',$anusangik_khroch_type)->with('user_infos',$user_infos);
     }


     public function anusangik_khroch_form(Request $request){
        
        $store= Anusangik_khroch::create([
            'আনুষঙ্গিক_খরচের_নাম' => $request['আনুষঙ্গিক_খরচের_নাম']
            
            ]);

            if($store){
                return redirect('/abbhantorin-check');
    
            }else{
                 return;
            }    
        
    }


     public function abbhantorin_check_form(Request $request){
        // return $request;
        $store= Abbhontorin_check::create([
            'ক্রমিক_নং' => $request['ক্রমিক_নং'],
            'anusangik_id' =>$request['khroch_type'],
            'অফিস_স্টাফ_নাম' => $request['অফিস_স্টাফ_নাম'],
            'হিসাব_নং' => $request['হিসাব_নং'],
            'বিশেষ_সঞ্চয়_উত্তোলন' => $request['বিশেষ_সঞ্চয়_উত্তোলন'],
            'সঞ্চয়_উত্তোলন' => $request['সঞ্চয়_উত্তোলন'],
            'শেয়ার_ফেরত' => $request['শেয়ার_ফেরত'],
            'ঋণ_প্রদান' => $request['ঋণ_প্রদান'],
            'আনুষঙ্গিক_খরচের_পরিমাণ' => $request['আনুষঙ্গিক_খরচের_পরিমাণ'],
            
            ]);

            if($store){
                return redirect('/abbhantorin-check');
    
            }else{
                 return;
            }    
        
    }


    public function khroch_talika(){
        // $date_months= Abbhontorin_check::selectRaw('created_at')->groupBy('created_at')->get();
    
        $date_years= Abbhontorin_check::selectRaw('DATE_FORMAT(created_at,"%Y") as year')
        ->groupBy('year')
        ->get();

        $date_months= Abbhontorin_check::selectRaw('DATE_FORMAT(created_at,"%M") as month')
        ->groupBy('month')
        ->get();

        $anusangik_khroch_amounts= Abbhontorin_check::selectRaw('sum(আনুষঙ্গিক_খরচের_পরিমাণ) as sum ,anusangik_id')
       ->groupBy('anusangik_id')
       ->get();
        
        $users_info= User::get();
        $abbhontorin_checks= Abbhontorin_check::get();
        $anusangik_khroch_type= Anusangik_khroch::get();
        return view('khroch-talika-month.index')->with('users_info',$users_info)->with('khroch_types',$anusangik_khroch_type)->with('abbhontorin_checks',$abbhontorin_checks)->with('date_years',$date_years)->with('date_months',$date_months)->with('anusangik_khroch_amounts',$anusangik_khroch_amounts);
        // return view('khroch-talika.index')->with('users_info',$users_info)->with('abbhontorin_checks',$abbhontorin_checks)->with('khroch_types',$anusangik_khroch_type)->with('abbhontorin_checks',$abbhontorin_checks)->with('date_years',$date_years)->with('date_months',$date_months);
    }

    function khroch_talika_month_data(Request $request){
        $abbhontorin_checks = Abbhontorin_check::whereYear('created_at', '=', $request->বছর)
        ->whereMonth('created_at', '=', $request->মাস)
        ->get();

        $date_years= Abbhontorin_check::selectRaw('DATE_FORMAT(created_at,"%Y") as year')
        ->groupBy('year')
        ->get();

        $date_months= Abbhontorin_check::selectRaw('DATE_FORMAT(created_at,"%M") as month')
        ->groupBy('month')
        ->get();

         $anusangik_khroch_amounts= Abbhontorin_check::selectRaw('sum(আনুষঙ্গিক_খরচের_পরিমাণ) as sum ,anusangik_id')
         ->whereYear('created_at', '=', $request->বছর)
        ->whereMonth('created_at', '=', $request->মাস)
        ->groupBy('anusangik_id')
        ->get();
        

        $users_info= User::get();
        // $abbhontorin_checks= Abbhontorin_check::get();
        $anusangik_khroch_type= Anusangik_khroch::get();
        $type= Anusangik_khroch::get();
        return view('khroch-talika-month.index')->with('users_info',$users_info)->with('khroch_types',$anusangik_khroch_type)->with('abbhontorin_checks',$abbhontorin_checks)->with('date_years',$date_years)->with('date_months',$date_months)->with('anusangik_khroch_amounts',$anusangik_khroch_amounts);

    }

    public function total_income_expenditure(){

            $Share_sonchoi_rosids= Share_sonchoi_rosid::selectRaw('sum(শেয়ার) as শেয়ার ,sum(সঞ্চয়) as সঞ্চয়,sum(ঋণ_ফেরৎ) as ঋণ_ফেরৎ,sum(সুদ) as সুদ,sum(জরিমানা) as জরিমানা,sum(ভর্তি_ফি) as ভর্তি_ফি,sum(বিক্রয়) as বিক্রয়,sum(হিসাব_খরচ) as হিসাব_খরচ,sum(বিশেষ_সঞ্চয়) as বিশেষ_সঞ্চয়')
                
            ->get();
            $all_income=0;
            foreach($Share_sonchoi_rosids as $Share_sonchoi_rosid){
                $all_income=$Share_sonchoi_rosid->শেয়ার+$Share_sonchoi_rosid->সঞ্চয়+$Share_sonchoi_rosid->ঋণ_ফেরৎ+$Share_sonchoi_rosid->সুদ+$Share_sonchoi_rosid->জরিমানা+$Share_sonchoi_rosid->ভর্তি_ফি+$Share_sonchoi_rosid->বিক্রয়+$Share_sonchoi_rosid->হিসাব_খরচ+$Share_sonchoi_rosid->বিশেষ_সঞ্চয়;
            }
            

            $anusangik_khroch_amounts= Abbhontorin_check::selectRaw('sum(আনুষঙ্গিক_খরচের_পরিমাণ) as sum ,anusangik_id')

            ->groupBy('anusangik_id')
            ->get();

            $abbhontorin_checks= Abbhontorin_check::selectRaw('sum(বিশেষ_সঞ্চয়_উত্তোলন) as বিশেষ_সঞ্চয়_উত্তোলন ,sum(সঞ্চয়_উত্তোলন) as সঞ্চয়_উত্তোলন,sum(শেয়ার_ফেরত) as শেয়ার_ফেরত,sum(ঋণ_প্রদান) as ঋণ_প্রদান,sum(আনুষঙ্গিক_খরচের_পরিমাণ) as আনুষঙ্গিক_খরচের_পরিমাণ')
            ->get();
            $types= Anusangik_khroch::get();


            $expenditure=0;
            foreach($abbhontorin_checks as $abbhontorin_check){
                $expenditure+=$abbhontorin_check->বিশেষ_সঞ্চয়_উত্তোলন+$abbhontorin_check->সঞ্চয়_উত্তোলন+$abbhontorin_check->শেয়ার_ফেরত+$abbhontorin_check->ঋণ_প্রদান+$abbhontorin_check->আনুষঙ্গিক_খরচের_পরিমাণ;
            }
            

            //    echo $totalreveniw=$all_income-$expenditure; 

            $user_infos  =  User::get();

            $date_years= Abbhontorin_check::selectRaw('DATE_FORMAT(created_at,"%Y") as year')
            ->groupBy('year')
            ->get();

            $date_months= Abbhontorin_check::selectRaw('DATE_FORMAT(created_at,"%M") as month')
            ->groupBy('month')
            ->get();
            return view('total-income-expenditure.index')->with('Share_sonchoi_rosids',$Share_sonchoi_rosids)->with('abbhontorin_checks',$abbhontorin_checks)->with('all_income',$all_income)->with('anusangik_khroch_amounts',$anusangik_khroch_amounts)->with('types',$types)->with('expenditures',$expenditure)->with('date_years',$date_years)->with('date_months',$date_months);


    }


    public function total_income_expenditure_month_date(Request $request){
         
        $year =  Carbon::createFromFormat('Y-m-d', $request->date)->year;
        $month =  Carbon::createFromFormat('Y-m-d', $request->date)->format('m');

         $incomes= Share_sonchoi_rosid::selectRaw('sum(শেয়ার)+sum(সঞ্চয়)+sum(ঋণ_ফেরৎ)+sum(সুদ)+sum(জরিমানা)+sum(ভর্তি_ফি)+sum(বিক্রয়)+sum(হিসাব_খরচ)+sum(বিশেষ_সঞ্চয়)as all_income')
        ->whereDate('created_at', '<', $request->date)
        ->get();

        $total_incomes=[];
        foreach($incomes as $income){
            array_push($total_incomes,$income->all_income);
            

        }
        
        $expends= Abbhontorin_check::selectRaw('sum(বিশেষ_সঞ্চয়_উত্তোলন)+sum(সঞ্চয়_উত্তোলন)+sum(শেয়ার_ফেরত)+sum(ঋণ_প্রদান)+sum(আনুষঙ্গিক_খরচের_পরিমাণ) as all_expend')
        ->whereDate('created_at', '<', $request->date)
        ->get();

        $total_expends=[];
        foreach($expends as $expend){
            array_push($total_expends,$expend->all_expend);
           
        }
        
        for($i=0;$i<count($incomes);$i++){
            $previous_hand=$total_incomes[$i]-$total_expends[$i];
        }
        // return $previous_hand;
        


         $Share_sonchoi_rosids= Share_sonchoi_rosid::selectRaw('sum(শেয়ার) as শেয়ার ,sum(সঞ্চয়) as সঞ্চয়,sum(ঋণ_ফেরৎ) as ঋণ_ফেরৎ,sum(সুদ) as সুদ,sum(জরিমানা) as জরিমানা,sum(ভর্তি_ফি) as ভর্তি_ফি,sum(বিক্রয়) as বিক্রয়,sum(হিসাব_খরচ) as হিসাব_খরচ,sum(বিশেষ_সঞ্চয়) as বিশেষ_সঞ্চয়,YEAR(created_at) year, MONTH(created_at) month')
        ->whereYear('created_at', '=', $year)
        ->whereMonth('created_at', '=', $month)
        ->groupby('year','month')
        ->get();

        $all_income=0;
        foreach($Share_sonchoi_rosids as $Share_sonchoi_rosid){
            $all_income=$Share_sonchoi_rosid->শেয়ার+$Share_sonchoi_rosid->সঞ্চয়+$Share_sonchoi_rosid->ঋণ_ফেরৎ+$Share_sonchoi_rosid->সুদ+$Share_sonchoi_rosid->জরিমানা+$Share_sonchoi_rosid->ভর্তি_ফি+$Share_sonchoi_rosid->বিক্রয়+$Share_sonchoi_rosid->হিসাব_খরচ+$Share_sonchoi_rosid->বিশেষ_সঞ্চয়;
        }
        
 
     

        $anusangik_khroch_amounts= Abbhontorin_check::selectRaw('sum(আনুষঙ্গিক_খরচের_পরিমাণ) as sum ,anusangik_id')
        ->whereYear('created_at', '=', $year)
       ->whereMonth('created_at', '=', $month)
       ->groupBy('anusangik_id')
       ->get();
 
        
        
         
         

       $abbhontorin_checks= Abbhontorin_check::selectRaw('sum(বিশেষ_সঞ্চয়_উত্তোলন) as বিশেষ_সঞ্চয়_উত্তোলন ,sum(সঞ্চয়_উত্তোলন) as সঞ্চয়_উত্তোলন,sum(শেয়ার_ফেরত) as শেয়ার_ফেরত,sum(ঋণ_প্রদান) as ঋণ_প্রদান,sum(আনুষঙ্গিক_খরচের_পরিমাণ) as আনুষঙ্গিক_খরচের_পরিমাণ,YEAR(created_at) year, MONTH(created_at) month')
        ->whereYear('created_at', '=', $year)
        ->whereMonth('created_at', '=', $month)
        ->groupby('year','month')
        ->get();
        $types= Anusangik_khroch::get();
 
 
        $expenditure=0;
        foreach($abbhontorin_checks as $abbhontorin_check){
            $expenditure+=$abbhontorin_check->বিশেষ_সঞ্চয়_উত্তোলন+$abbhontorin_check->সঞ্চয়_উত্তোলন+$abbhontorin_check->শেয়ার_ফেরত+$abbhontorin_check->ঋণ_প্রদান+$abbhontorin_check->আনুষঙ্গিক_খরচের_পরিমাণ;
        }
     
 
     //    echo $totalreveniw=$all_income-$expenditure; 
 
        $user_infos  =  User::get();
        return view('total-income-expenditure-month-date.index')->with('Share_sonchoi_rosids',$Share_sonchoi_rosids)->with('abbhontorin_checks',$abbhontorin_checks)->with('all_income',$all_income)->with('types',$types)->with('expenditures',$expenditure)->with('anusangik_khroch_amounts',$anusangik_khroch_amounts)->with('previous_hands',$previous_hand);

 
     }


    public function total_income_expenditure_year(Request $request){

       $Share_sonchoi_rosids= Share_sonchoi_rosid::selectRaw('sum(শেয়ার) as শেয়ার ,sum(সঞ্চয়) as সঞ্চয়,sum(ঋণ_ফেরৎ) as ঋণ_ফেরৎ,sum(সুদ) as সুদ,sum(জরিমানা) as জরিমানা,sum(ভর্তি_ফি) as ভর্তি_ফি,sum(বিক্রয়) as বিক্রয়,sum(হিসাব_খরচ) as হিসাব_খরচ,sum(বিশেষ_সঞ্চয়) as বিশেষ_সঞ্চয়')
        ->whereDate('created_at', '>=', $request->form_date)
        ->whereDate('created_at', '<=', $request->to_date)
        ->get();
       

       $all_income=0;
       foreach($Share_sonchoi_rosids as $Share_sonchoi_rosid){
           $all_income=$Share_sonchoi_rosid->শেয়ার+$Share_sonchoi_rosid->সঞ্চয়+$Share_sonchoi_rosid->ঋণ_ফেরৎ+$Share_sonchoi_rosid->সুদ+$Share_sonchoi_rosid->জরিমানা+$Share_sonchoi_rosid->ভর্তি_ফি+$Share_sonchoi_rosid->বিক্রয়+$Share_sonchoi_rosid->হিসাব_খরচ+$Share_sonchoi_rosid->বিশেষ_সঞ্চয়;
       }

       $abbhontorin_checks= Abbhontorin_check::selectRaw('sum(বিশেষ_সঞ্চয়_উত্তোলন) as বিশেষ_সঞ্চয়_উত্তোলন ,sum(সঞ্চয়_উত্তোলন) as সঞ্চয়_উত্তোলন,sum(শেয়ার_ফেরত) as শেয়ার_ফেরত,sum(ঋণ_প্রদান) as ঋণ_প্রদান,sum(আনুষঙ্গিক_খরচের_পরিমাণ) as আনুষঙ্গিক_খরচের_পরিমাণ')
       ->whereDate('created_at', '>=', $request->form_date)
       ->whereDate('created_at', '<=', $request->to_date)
       ->get();

       $expenditure=0;
       foreach($abbhontorin_checks as $abbhontorin_check){
           $expenditure+=$abbhontorin_check->বিশেষ_সঞ্চয়_উত্তোলন+$abbhontorin_check->সঞ্চয়_উত্তোলন+$abbhontorin_check->শেয়ার_ফেরত+$abbhontorin_check->ঋণ_প্রদান+$abbhontorin_check->আনুষঙ্গিক_খরচের_পরিমাণ;
       }

        $anusangik_khroch_amounts= Abbhontorin_check::selectRaw('sum(আনুষঙ্গিক_খরচের_পরিমাণ) as sum ,anusangik_id')
        ->whereDate('created_at', '>=', $request->form_date)
        ->whereDate('created_at', '<=', $request->to_date)
        ->groupBy('anusangik_id')
        ->get();

        $types= Anusangik_khroch::get();
        $user_infos  =  User::get();

       
        // return $request->form_date;
        // return $request->form_date;
        // $year =  Carbon::createFromFormat('Y-m-d', $request->date)->year;
        // $month =  Carbon::createFromFormat('Y-m-d', $request->date)->format('m');
         $incomes= Share_sonchoi_rosid::selectRaw('sum(শেয়ার)+sum(সঞ্চয়)+sum(ঋণ_ফেরৎ)+sum(সুদ)+sum(জরিমানা)+sum(ভর্তি_ফি)+sum(বিক্রয়)+sum(হিসাব_খরচ)+sum(বিশেষ_সঞ্চয়)as all_income')
        ->whereDate('created_at', '<', $request->form_date)
        // ->whereDate('created_at', '<=', $request->to_date)
        ->get();

      
        $total_incomes=[];
        foreach($incomes as $income){
            array_push($total_incomes,$income->all_income);
            

        }
        
        $expends= Abbhontorin_check::selectRaw('sum(বিশেষ_সঞ্চয়_উত্তোলন)+sum(সঞ্চয়_উত্তোলন)+sum(শেয়ার_ফেরত)+sum(ঋণ_প্রদান)+sum(আনুষঙ্গিক_খরচের_পরিমাণ) as all_expend')
        ->whereDate('created_at', '<', $request->form_date)
        // ->whereDate('created_at', '<=', $request->to_date)
        ->get();

        $total_expends=[];
        foreach($expends as $expend){
            array_push($total_expends,$expend->all_expend);
           
        }
        
        for($i=0;$i<count($incomes);$i++){
            $previous_hand=$total_incomes[$i]-$total_expends[$i];
        }
        // return $previous_hand;

        
        return view('total-income-expenditure-month-date.index')->with('Share_sonchoi_rosids',$Share_sonchoi_rosids)->with('abbhontorin_checks',$abbhontorin_checks)->with('all_income',$all_income)->with('types',$types)->with('expenditures',$expenditure)->with('anusangik_khroch_amounts',$anusangik_khroch_amounts)->with('previous_hands',$previous_hand);

 
     }



     public function total_share(){
         $share= Share_sonchoi_rosid::selectRaw('sum(শেয়ার) as শেয়ার ,YEAR(created_at) AS year,MONTH(created_at) AS month')
         ->groupBy('year', 'month')
         ->get();

         $share_ferot= Abbhontorin_check::selectRaw('sum(শেয়ার_ফেরত) as শেয়ার_ফেরত, YEAR(created_at) AS year, 
         MONTH(created_at) AS month')
        ->groupBy('year', 'month')
        ->get();
      
         $rijab_funds  = Rijab_fund::selectRaw('sum(শেয়ার) as রিজার্ভ_শেয়ার,YEAR(created_at) AS year')

        ->groupby('year')
        
        ->orderBy('year', 'DESC')
        ->get();

        $share_infos = array_merge($share->toArray(), $share_ferot->toArray(),$rijab_funds->toArray());
        usort($share_infos, function($a, $b)
        {
            return $a['year'] > $b['year'];
        });

        // return $share_infos;
   
      return view('total-share.index')->with('share_infos',$share_infos);
     }


     public function balane_shite(Request $request){

        // return $request->to_date;
        $shares= Share_sonchoi_rosid::selectRaw('sum(শেয়ার) as শেয়ার')
        ->whereDate('created_at', '<=', $request->form_date) 
        ->get();

        $shares_ferot= Abbhontorin_check::selectRaw('sum(শেয়ার_ফেরত) as শেয়ার_ফেরত ')
        ->whereDate('created_at', '<=', $request->form_date)
        ->get();
        $shar=0;
         foreach($shares as $share){
            $shar=$share->শেয়ার;
         }
        $shar_fer=0;
         foreach($shares_ferot as $share_ferot){
            $shar_fer=$share_ferot->শেয়ার_ফেরত;
         }
        //  return $purbojer= $shar -$shar_fer;
     

       

         $cholti= Share_sonchoi_rosid::selectRaw('sum(শেয়ার) as শেয়ার')
         ->whereDate('created_at', '>=', $request->form_date)
         ->whereDate('created_at', '<=', $request->to_date) 
         ->get();

         $rejab= Abbhontorin_check::selectRaw('sum(শেয়ার_ফেরত) as শেয়ার_ফেরত ')
         ->whereDate('created_at', '>=', $request->form_date)
         ->whereDate('created_at', '<=', $request->to_date)
        ->get();
      

       
     }
     public function rijab_fund($id){
        $user_infos  =  User::where('id', $id)->firstOrFail();

       $particuler_user_all_info = User::join('share_sonchoi_rosids', 'share_sonchoi_rosids.user_id', '=', 'users.id' )->where('share_sonchoi_rosids.user_id', '=', $id)->orderBy('users.created_at', 'DESC')
        ->get();

        $anusangik_khroch_amounts= Abbhontorin_check::where('হিসাব_নং', '=', $user_infos->সদস্য_নং)
        ->orderBy('created_at', 'DESC')
        ->get();

       $user_all_infos = array_merge($particuler_user_all_info->toArray(), $anusangik_khroch_amounts->toArray());
       usort($user_all_infos, function($a, $b)
       {
           
           return $a['created_at'] < $b['created_at'];
       });

       $total_share=0;
       $total_Saving=0;
       $total_Special_Saving=0;
       $total_rin=0;
       $total_rin_ferot=0;
       $total_rin_prodan=0;

       foreach($user_all_infos as $user_all_info){
        if(isset($user_all_info['user_id'])){
            $total_share+=$user_all_info['শেয়ার'];
            $total_Saving+=$user_all_info['সঞ্চয়'];
            $total_Special_Saving+=$user_all_info['বিশেষ_সঞ্চয়'];
            $total_rin-=$user_all_info['ঋণ_ফেরৎ'];
        }elseif(isset($user_all_info['হিসাব_নং'])){
            $total_share-=$user_all_info['শেয়ার_ফেরত'];
            $total_Saving-=$user_all_info['সঞ্চয়_উত্তোলন'];
            $total_Special_Saving-=$user_all_info['বিশেষ_সঞ্চয়_উত্তোলন'];
            $total_rin+=$user_all_info['ঋণ_প্রদান'];
        }
       }
       
       $store= Rijab_fund::create([
        'ব্যক্তির_নাম' =>$user_infos->সদস্য_নাম_মি_মিসেস_মিস,
        'শেয়ার' =>$total_share,
        'সঞ্চয়' => $total_Saving,
        'বিশেষ_সঞ্চয়_উত্তোলন' => $total_Special_Saving,
        'ঋণ' => $total_rin,
        ]);

        if($store){
            return redirect('/total-rijab-fund-talika');

        }else{
             return;
        } 

     }


     public function total_rijab_fund_talika(){
        $rijab_funds  =  Rijab_fund::get();
        return view('total-rijab-fund-talika.index')->with('rijab_funds',$rijab_funds);
     }

     public function total_rijab_fund_talika_year(Request $request){
         $rijab_funds= Rijab_fund::
         whereDate('created_at', '>=', $request->form_date)
        ->whereDate('created_at', '<=', $request->to_date)
        ->get();

        return view('total-rijab-fund-talika.index')->with('rijab_funds',$rijab_funds);
    
     }



     public function rijab_fund_uttolon($id){

       $rijab_funds  =  Rijab_fund::where('id', $id)->firstOrFail();

       
       $store= Rijab_fund_uttolon::create([
        'ব্যক্তির_নাম' =>$rijab_funds->ব্যক্তির_নাম,
        'শেয়ার' =>$rijab_funds->শেয়ার,
        'সঞ্চয়' => $rijab_funds->সঞ্চয়,
        'বিশেষ_সঞ্চয়_উত্তোলন' => $rijab_funds->বিশেষ_সঞ্চয়_উত্তোলন,
        'ঋণ' => $rijab_funds->বিশেষ_সঞ্চয়_উত্তোলন,
        ]);

        if($store){
            return redirect('/total-rijab-fund-talika');

        }else{
             return;
        } 

     }

     public function total_fund_share(){
         $rijab_funds  = Rijab_fund::selectRaw('sum(শেয়ার) as রিজার্ভ_শেয়ার,YEAR(created_at) AS year,MONTH(created_at) AS month')
        ->groupby('year','month')
        ->orderBy('year', 'DESC')
        ->get();
        $Rijab_fund_uttolons  =  Rijab_fund_uttolon::selectRaw('শেয়ার , ব্যক্তির_নাম ,YEAR(created_at) AS year,MONTH(created_at) AS month')
        ->orderBy('year', 'DESC')
        ->get();

        

        $share_found_infos = array_merge($Rijab_fund_uttolons->toArray(), $rijab_funds->toArray());
        usort($share_found_infos, function($a, $b)
        {
            
            return $a['year'] > $b['year'];
        });
        // return $user_all_infos;
        return view('total-fund-share.index')->with('share_found_infos',$share_found_infos);
     }


   


}


