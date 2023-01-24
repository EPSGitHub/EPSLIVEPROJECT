<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\post;
use App\Models\event;
use App\Models\career;
use App\Models\career_cat;
use App\Models\category;
use App\Models\fullTextSearch;
use App\Models\pressrelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontendViewManagement extends Controller
{
    public function HomePage(){
        return view('frontend.index');
    }
    public function ErrorPage(){
        return view('errors.404');
    }


    public function ContactUs(){
        return view('frontend.contact');
    }

    public function AboutUs(){
        return view('frontend.about');
    }
    public function Sitemap(){
        return view('frontend.sitemap');
    }

    //Blog Section

    public function Blog(){
        $btype1 = post::where('status','1')->orderBy('id', 'DESC')->latest()->paginate(6);
        $rpost = post::where('status','1')->where('editable','1')->orderBy('views','ASC')->take(3)->get();
        $blogCat = category::all();
        return view('frontend.blog',[
           'ptype1' =>$btype1,
/*            'ptype2' =>$btype2,
           'ptype3' =>$btype3,
           'ptype4' =>$btype4,
           'ptype5' =>$btype5, */
           'rposts' =>$rpost,
           'blogcat' =>$blogCat,
        ]);
    }
    public function BlogSingle(post $cid){

       post::find($cid->id)->increment('views',1);

        return view('frontend.blog_single',[
            'posts' => $cid,
        ]);
    }


    public function BlogCategorySearch($slug){
      $cat= category::where('slug',$slug)->first();
      $rpost = post::where('status','1')->where('editable','1')->orderBy('views','ASC')->take(3)->get();
      $blogCat = category::all();

       return view('frontend.blog-cat-search',[
            'all_post' => $cat->posts,
            'rposts' =>$rpost,
           'blogcat' =>$blogCat,
      ]);
    }


    //Career

    public function Career(){

        $car = career::where('status','1')->latest()->paginate(6);
        $car_cat = career_cat::where('status','1')->get();
        return view('frontend.career',[
            'career' => $car,
            'career_cat' => $car_cat,
        ]);
    }

    public function CareerDetailsPage(career $cid){


        return view('frontend.career_single',[
            'careers' => $cid,
        ]);

    }

    //Event

    public function Event(){
        $evnt = event::where('status','1')->latest()->paginate(6);
        return view('frontend.event',[
            'event' => $evnt,

        ]);
    }
    public function EventDetails(event $cid){
        return view('frontend.event_details',[
            'events' => $cid,
        ]);
    }




    //Service

    public function Service(){
        return view('frontend.service');
    }
    public function ServiceSingle(){
        return view('frontend.service_single');
    }
    public function ServiceSingleDetails(){
        return view('frontend.service_single_details');
    }
    public function FundTransfer(){
        return view('frontend.services.fund_transfer');
    }
    public function PaymentGateway(){
        return view('frontend.services.payment_gateway');
    }
    public function BillPay(){
        return view('frontend.services.bill_pay');
    }
    public function MobileRecharge(){
        return view('frontend.services.mobile_recharge');
    }
    public function CorporateService(){
        return view('frontend.services.corporate');
    }
    public function CorporateClientReg(){
        return view('frontend.services.corporate_reg');
    }
    public function TerrifCalculator(){
        return view('frontend.services.terrif');
    }
    public function SupportDetails(){
        return view('frontend.support');
    }


    //PartnerDetails

    public function PartnerDetails(){
        return view('frontend.partner');
    }
    public function PartnerSingleDetails(){
        return view('frontend.partner_single');
    }



    //PressRelease

    public function PressRelease(){
        $presspost = pressrelease::where('status','1')->where('type','English') ->latest()->paginate(3);
        $bpresspost = pressrelease::where('status','1')->where('type','Bangla') ->latest()->paginate(3);
        $sliderpresspost = pressrelease::where('status','1')->where('type','English') ->latest()->get()->take(3);
        return view('frontend.press',[
            'press' => $presspost,
            'bpress' => $bpresspost,
             'enpressslider' => $sliderpresspost,

        ]);
    }


    public function PressReleaseSingle(pressrelease $cid){
        return view('frontend.press_details',[
            'presspost' => $cid,
        ]);
    }

    public function PressRelease1(){
        return view('frontend.pressrelease.businessdesk');
    }
    public function PressRelease2(){
        return view('frontend.pressrelease.business_standard');
    }
    public function PressRelease3(){
        return view('frontend.pressrelease.dailystar');
    }
    public function PressRelease4(){
        return view('frontend.pressrelease.jugantor');

    }



        //Faq Page
        public function FaqPage(){
            $faqs = faq::where('status','1')->orderBy('id', 'ASC')->get();
            $acfaqs = faq::where('status','1')->Where('category','=',2)->orderBy('id', 'ASC')->get();
            $gfaqs = faq::where('status','1')->Where('category','=',1)->orderBy('id', 'ASC')->get();
            $tranfaqs = faq::where('status','1')->Where('category','=',3)->orderBy('id', 'ASC')->get();
            return view('frontend.faq',[
                'faq' => $faqs,
                'acfaq' => $acfaqs,
                'gfaq' => $gfaqs,
                'tranfaq' => $tranfaqs,

            ]);
        }






    //blog post

    public function Blogpost1(){
        return view('frontend.blog.fintech');

    }
    public function Blogpost2(){
        return view('frontend.blog.post_libaration');

    }
    public function Blogpost3(){
        return view('frontend.blog.idtp');

    }
    public function Blogpost4(){
        return view('frontend.blog.beftn');

    }
    public function Blogpost5(){
        return view('frontend.blog.npsb');

    }
    public function Blogpost6(){
        return view('frontend.blog.rtgs');

    }
    public function Blogpost7(){
        return view('frontend.blog.swift');

    }

    //Offerpage

    public function OfferPage(){
        return view('frontend.offer');
    }
    public function OfferSinglePage(){
        return view('frontend.offer_single');
    }

    //Media

    public function Media(){
        return view('frontend.media');
    }
    public function MediaSingle(){
        return view('frontend.media_single');
    }
    public function MediaSingleDetails(){
        return view('frontend.media_single_details');
    }
    //Merchant

    public function Merchant(){
        return view('frontend.merchant');
    }
    public function MerchantDetails(){
        return view('frontend.marchent_single');
    }
    //App Details

    public function AppDetails(){
        return view('frontend.app-details');
    }
    public function AndroidAppDownload(){
        return view('frontend.appPages.apk');
    }
    public function IosAppDownload(){
        return view('frontend.appPages.ios');
    }








    //Single Details
    public function AboutUs_singleDetails(){
        return view('frontend.single_details');
    }
    public function AboutUs_singleDetails_Mohsin(){
        return view('frontend.single_details.mohsin');
    }
    public function AboutUs_singleDetails_shahAlam(){
        return view('frontend.single_details.shahalam');
    }
    public function AboutUs_singleDetails_nasirUddin(){
        return view('frontend.single_details.nasir');
    }
    public function AboutUs_singleDetails_Faruq(){
        return view('frontend.single_details.faruq');
    }
    public function AboutUs_singleDetails_nasimul(){
        return view('frontend.single_details.nasimul');
    }


    //End Single Details
    public function AboutUs_Team(){
        return view('frontend.team');
    }
    public function TermsAndCondition(){
        return view('frontend.terms-condition');
    }
    public function PrivacyPage(){
        return view('frontend.privacy');
    }
    public function CookiePage(){
        return view('frontend.cookie');
    }


    //Web Search

    public function websearch(Request $request){

        if(empty($request ->name)){
            $search ='';
            return view('frontend.no_result');
        }

        else{
            $search = $request->name;
            $src_result = fullTextSearch::where('title_en','LIKE','%'.$search.'%')->orwhere('des_en','LIKE','%'.$search.'%')->latest()->paginate(6);
        return view('frontend.fulltext_search',[
            'result' => $src_result,

        ]);
        // return $src_result;
        }


    }



    public function getWebSearch(Request $request){
      /*   $qury = $request->get('value');
        $data = fullTextSearch::select('title_en')->where('title_en','LIKE','%'.$qury.'%')->get();
        return response()->json($data); */

        if($request->ajax()){

            $data = fullTextSearch::where('title_en','LIKE','%'.$request->name.'%')->orwhere('des_en','LIKE','%'.$request->name.'%')->take(10)->get();
            $output='';
            if(count($data) > 0){
                $output ='<ul class="list-group" style="display:block;z-index:999999;position: absolute;
                left: 0%;
                top: 101%;
                width: 100%;">';
                foreach($data as $row){
                    $output.='<li class="list-group-item">'.$row->title_en.'</li>';
                }
                $output.='</ul>';
            }

            else{
                $output.='<li class="list-group-item" style="position: absolute;
                left: 0%;
                top: 101%;
                width: 100%;">No Data Found</li>';
            }

            return $output;
        }

        return view('frontend.layout.Menu.menu');
    }




}
