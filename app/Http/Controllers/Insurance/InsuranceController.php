<?php

namespace App\Http\Controllers\Insurance;


use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\InsCategory;
use App\Models\InsUserSession;
use App\Models\Package;
use App\Models\Page;
use App\Models\Post;
use App\Models\Team;
use App\Models\Testimonial;
use App\Utilities\Overrider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class InsuranceController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        if (env('APP_INSTALLED', true) == true) {
            date_default_timezone_set(get_option('timezone', 'Asia/Dhaka'));
            $this->middleware(function ($request, $next) {
                if (isset($_GET['language'])) {
                    session(['language' => $_GET['language']]);
                    return back();
                }
                if (get_option('website_enable', 1) == 0) {
                    return redirect()->route('login');
                }
                return $next($request);
            });
        }
    }

    /**
     * Display website's home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = '') {
        $data = array();

        if ($slug != '') {
            $page = Page::where('slug', $slug)->where('status', 1)->first();
            if (!$page) {
                abort(404);
            }
            return view('website.page', compact('page'));
        }

        $data['pageData']  = json_decode(get_trans_option('home_page'));
        $data['pageMedia'] = json_decode(get_trans_option('home_page_media'));
        if (isset($data['pageData']->title)) {
            $data['page_title'] = $data['pageData']->title;
        }
        $data['features']     = Feature::active()->get();
        $data['packages']     = Package::active()->get();
        $data['blog_posts']   = Post::active()->limit(3)->orderBy('id', 'desc')->get();
        $data['testimonials'] = Testimonial::all();

        return view('website.index', $data);
    }

    public function about() {
        $data              = array();
        $data['pageData']  = json_decode(get_trans_option('about_page'));
        $data['pageMedia'] = json_decode(get_trans_option('about_page_media'));
        $data['page_title'] = isset($data['pageData']->title) ? $data['pageData']->title : '';

        $data['team_members'] = Team::all();
        return view('website.about', $data);
    }

    public function InsuranceStart($slug=''){
        if ($slug != ''){
            $page = InsCategory::where('slug', $slug)->where('is_active', 1)->first();
            if (!$page){
                abort(404);
            }
            return view('website.insurance.ins-start', compact('page'));
        }
    }

    public function InsuranceSessionStore(Request $request){
        $this->validate($request, [
            'phone'    => 'required|min:11|numeric'
        ]);
        $page = InsCategory::where('slug', $request->input('slug'))->where('is_active', 1)->first();

        $sessionUser = InsUserSession::create([
           'mobile'=> $request->input('phone'),
           'ins_slug'=> $request->input('slug'),
           'otp'=> rand(1000, 9999)
        ]);
        return view('website.insurance.ins-otp-check', compact('page','sessionUser'));
    }

    public function InsuranceOtpCheck(Request $request){
        $page = InsCategory::where('slug', $request->input('slug'))->where('is_active', 1)->first();
        $sessionUser = InsUserSession::where(['id'=>$request->input('session_id')])->first();
        if ($sessionUser->otp == $request->input('otp')){
            $code = bin2hex(openssl_random_pseudo_bytes(5));
            $sessionUser->update([
                'code'=>$code,
                'otp'=>null
            ]);
            return redirect()->route('ins_insurance_query',[$sessionUser->ins_slug,$code]);
        }else{
            $wrongOtp = true;
            return view('website.insurance.ins-otp-check', compact('page','sessionUser','wrongOtp'));
        }
    }

    public function InsuranceQuery($slug,$session){
        $sessionUser = InsUserSession::where('code',$session)->first();
        $page = InsCategory::where('slug', $slug)->where('is_active', 1)->first();
        if ('health-insurance' == $slug){
            return view('website.insurance.health.query-form', compact('page','sessionUser'));
        }
    }

}
