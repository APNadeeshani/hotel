<?php

namespace App\Http\Controllers;
use App\hotel; 
use App\destination; 
use App\wedding; 
use App\room; 
use App\client; 
use App\advanceseach;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class hotelcontroller extends Controller
{
    public function loardindexx(){
        $destinationdata = destination::destinationloard();
        $clientdata = client::clientload();
        $hoteldata = hotel::loardhome();
        return view('frontend.index', compact('destinationdata', 'clientdata','hoteldata'));
    }

    //hotelinfopage
    public function hotelinfopage(){
        $destinationdata = destination::destinationloard();
        return view('backend.hotelifo', compact('destinationdata'));
    }

    //WEDDING HALLS
    public function weddinghall(){
        $destinationdata = destination::destinationloard();
       $wedding = wedding::wedding();
        return view('frontend.weddinghall', compact('wedding','destinationdata'));
    }

    

    //create dayouting
    public function dayouting(){
        $hoteldata = hotel::loarddayouting();
        return view('frontend.hotelsearch', compact('hoteldata'));
    }

    
    //create hotels backend
    public function hotelshome(){
         $hotels = hotel::loardhome();
         return view('backend.hotels.index', compact('hotels'));
     }

    //create hotels backend
    public function hotelregistration(){
       // $hoteldata = hotel::loardhotels();
        return view('backend.hotels.new');
    }

    


    //load hotels
    public function loardindex(){
        $hoteldata = hotel::loardhotels();
        return view('frontend.hotelsearch', compact('hoteldata'));
    }
    
    //load hotels 
    public function loardtype($id){
       // $hoteldata = hotel::loardhotels($any);
        $hoteldata = hotel::typehotels($id);
        return view('frontend.hotelsearchtype', compact('hoteldata'));
    }

    //load hotels loarddestinationshotel
    public function loarddestinationshotel($id){
        // $hoteldata = hotel::loardhotels($any);
            $hoteldata = hotel::destihotels($id);
            return view('frontend.hotelsearchdestination', compact('hoteldata'));
        }
    


    //save new budget
    public function requestsend(Request $request){
         $hotel = new hotel;
         $hotel->name=$request->hotel;
         $hotel->description='0';
         $hotel->destination='0';
         $hotel->customer=$request->name;
         $hotel->img='0';
         $hotel->star='0';
         $hotel->phone=$request->phone;
         $hotel->email=$request->email;
         $hotel->status='2';
         try {
 
             $hotel->save();
             return redirect()->back()->with('success', 'Hotel Registration Request Successfuly sent ..! Our Agent will contact with you soon.');
 
         } catch (Exception $e) {
 
             return redirect()->back()->with('error', 'Request Sending Error ..! Please contact with our agent');
         }
     }

    //save new hotel infomation
    public function savehotelinfo(Request $request){
        $hotel = new hotel; 
        $hotel->name=$request->prpname;
        $hotel->description=$request->description;
        $hotel->destination=$request->destination; 
        $hotel->customer=$request->ownername;
        $hotel->star=$request->star; 
        $hotel->phone=$request->phone;
        $hotel->email=$request->email;
        $hotel->type=$request->type;
        $hotel->address=$request->address; 
        $hotel->dayout=$request->dayouting; 
        $hotel->ownermobile=$request->mobile;
        $hotel->seconname=$request->seconname;
        $hotel->seconmobile=$request->seconmobile;
        $hotel->seconemail=$request->seconemail;
        $hotel->seconDesignation=$request->seconDesignation;
        $hotel->status='0';
        $hotel->save();

        
        $standard = new room;
        $standard->hotelid=$hotel->id;
        $standard->name=$request->stndname;  
        $standard->countroom=$request->stndrooms; 
        $standard->bedtype=$request->standbedtype; 
        $standard->roomsize=$request->standroomsize; 
        $standard->type='Standard';
        $standard->description=$request->standdescription;
        $standard->sts='1';
        $standard->save();

        $superior = new room;
        $superior->hotelid=$hotel->id;
        $superior->name=$request->supername;  
        $superior->countroom=$request->supercount; 
        $superior->bedtype=$request->supertype; 
        $superior->roomsize=$request->supersize; 
        $superior->type='Superior';
        $superior->description=$request->superdescription;
        $superior->sts='1';
        $superior->save();

        $deluxe = new room;
        $deluxe->hotelid=$hotel->id;
        $deluxe->name=$request->deluxname;  
        $deluxe->countroom=$request->deluxcount; 
        $deluxe->bedtype=$request->deluxbedtype; 
        $deluxe->roomsize=$request->deluxroomsize; 
        $deluxe->type='Deluxe';
        $deluxe->description=$request->deluxdescription;
        $deluxe->sts='1';
        $deluxe->save();

        $subtandard = new room;
        $subtandard->hotelid=$hotel->id;
        $subtandard->name=$request->substnname;  
        $subtandard->countroom=$request->substandcount; 
        $subtandard->bedtype=$request->substandtype; 
        $subtandard->roomsize=$request->substandsize; 
        $subtandard->type='Sub-Standard';
        $subtandard->description=$request->substanddescript;
        $subtandard->sts='1';
        $subtandard->save();

        $subsuperior = new room;
        $subsuperior->hotelid=$hotel->id;
        $subsuperior->name=$request->subsupriorname;  
        $subsuperior->countroom=$request->subsupirorooms; 
        $subsuperior->bedtype=$request->subsupiriotype; 
        $subsuperior->roomsize=$request->subsupiriosize; 
        $subsuperior->type='Sub-Superior';
        $subsuperior->description=$request->subsupiriodescrip;
        $subsuperior->sts='1';
        $subsuperior->save();

        $subdelux = new room;
        $subdelux->hotelid=$hotel->id;
        $subdelux->name=$request->subdeluxname;  
        $subdelux->countroom=$request->subdeluxrooms; 
        $subdelux->bedtype=$request->subdeluxbed; 
        $subdelux->roomsize=$request->subdulaxsize; 
        $subdelux->type='Sub-Deluxe';
        $subdelux->description=$request->subdeluxdescrit;
        $subdelux->sts='1';
        $subdelux->save();

        if($request->pool==1){$pool=1;}else{$pool=0;}
        if($request->privatebathroom==1){$privatebathroom=1;}else{$privatebathroom=0;}
        if($request->beachfront==1){$beachfront=1;}else{$beachfront=0;}
        if($request->ac==1){$ac=1;}else{$ac=0;}
        if($request->apartments==1){$apartments=1;}else{$apartments=0;}
        if($request->breakfastdinner==1){$breakfastdinner=1;}else{$breakfastdinner=0;}
        if($request->seaview==1){$seaview=1;}else{$seaview=0;}
        if($request->bath==1){$bath=1;}else{$bath=0;}
        if($request->balcony==1){$balcony=1;}else{$balcony=0;}
        if($request->spabath==1){$spabath=1;}else{$spabath=0;}
        if($request->kitchen==1){$kitchen=1;}else{$kitchen=0;}
        if($request->breakfastlunch==1){$breakfastlunch=1;}else{$breakfastlunch=0;}
        if($request->spawellness==1){$spawellness=1;}else{$spawellness=0;}
        if($request->pets==1){$pets=1;}else{$pets=0;}
        if($request->electric==1){$electric=1;}else{$electric=0;}
        if($request->cooking==1){$cooking=1;}else{$cooking=0;}
        if($request->free==1){$free=1;}else{$free=0;}
        if($request->bookwithoutcreadit==1){$bookwithoutcreadit=1;}else{$bookwithoutcreadit=0;}
        if($request->nopayment==1){$nopayment=1;}else{$nopayment=0;}
        if($request->hottub==1){$hottub=1;}else{$hottub=0;}
        if($request->freewifi==1){$freewifi=1;}else{$freewifi=0;}
        if($request->hiking==1){$hiking=1;}else{$hiking=0;}
        if($request->walking==1){$walking=1;}else{$walking=0;}
        if($request->bicyclerental==1){$bicyclerental=1;}else{$bicyclerental=0;}
        if($request->tourorclz==1){$tourorclz=1;}else{$tourorclz=0;}
        if($request->coffeemachine==1){$coffeemachine=1;}else{$coffeemachine=0;}
        if($request->terrence==1){$terrence=1;}else{$terrence=0;}
        if($request->flat==1){$flat=1;}else{$flat=0;}
        if($request->washingmachine==1){$washingmachine=1;}else{$washingmachine=0;}
        if($request->coffeemaker==1){$coffeemaker=1;}else{$coffeemaker=0;}
        if($request->airportshuttle==1){$airportshuttle=1;}else{$airportshuttle=0;}
        if($request->parking==1){$parking=1;}else{$parking=0;}
        if($request->nonsmorking==1){$nonsmorking=1;}else{$nonsmorking=0;}
        if($request->familyroom==1){$familyroom=1;}else{$familyroom=0;}
        if($request->fitness==1){$fitness=1;}else{$fitness=0;}
        if($request->selfcatering==1){$selfcatering=1;}else{$selfcatering=0;}
        if($request->mealinclude==1){$mealinclude=1;}else{$mealinclude=0;}
        if($request->allinclusive==1){$allinclusive=1;}else{$allinclusive=0;}
        if($request->beds==1){$beds=1;}else{$beds=0;}
        


        $advanceseach = new advanceseach;
        $advanceseach->hotelid=$hotel->id;
        $advanceseach->pool=$pool;
        $advanceseach->breakfast=$pool;  
        $advanceseach->bathroom=$privatebathroom;  
        $advanceseach->beachfront=$beachfront;  
        $advanceseach->airconditioning=$ac;  
        $advanceseach->apartments=$apartments;  
        $advanceseach->breakfastdinner=$breakfastdinner;  
        $advanceseach->seaview=$seaview;  
        $advanceseach->bath=$bath; 
        $advanceseach->balcony=$balcony;
        $advanceseach->spabath=$spabath;
        $advanceseach->twinbeds=$beds;
        $advanceseach->kitchen=$kitchen;
        $advanceseach->freewiFi=$pool;
        $advanceseach->destinationkm=$pool;
        $advanceseach->hiking=$pool;
        $advanceseach->walking=$pool;
        $advanceseach->bicyclerental=$pool;
        $advanceseach->localculture=$pool;
        $advanceseach->cookingclz=$cooking;
        $advanceseach->withoutcredit=$pool;
        $advanceseach->prepayment=$pool;
        $advanceseach->allmeals=$pool;
        $advanceseach->inclusive=$pool;
        $advanceseach->breakfastlunch=$breakfastlunch;
        $advanceseach->selfcatering=$pool;
        $advanceseach->airportshuttle=$pool;
        $advanceseach->nonsmoking=$pool;
        $advanceseach->familyrooms=$pool;
        $advanceseach->wellnesscenter=$spawellness;
        $advanceseach->petsallowed=$pets;
        $advanceseach->electricvehiclecharg=$pool;
        $advanceseach->kettle=$pool;
        $advanceseach->teamaker=$pool;
        $advanceseach->fitnesscenter=$pool;
        $advanceseach->parking=$pool;
        $advanceseach->privatepool=$pool;
        $advanceseach->terrace=$pool;
        $advanceseach->sts='1';
        $advanceseach->save();

        $users = new User;
        $users->hotelid=$hotel->id;
        $users->usertype='1';  
        $users->sts='1'; 
        $users->name=$request->ownername;
        $users->email=$request->email; 
        $users->password=Hash::make($request->password);
        $users->save();

        try {
            return redirect()->back()->with('success', 'Hotel Registration Request Successfuly sent ..!');

           
        } catch (Exception $e) {

            
            return redirect()->back()->with('error', 'Request Sending Error ..! Please contact with our agent');
        }
    }
}
