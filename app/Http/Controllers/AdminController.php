<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Session;
use Auth;
use Hash;
use Route;
use App\Models\Admin;
use App\Models\User;
use App\Models\News;
use App\Models\Services;
use App\Models\Faqs;
use App\Models\Testimonials;
use App\Models\Team;
use App\Models\Prices;
use App\Models\Pages;
use App\Models\Partners;
use App\Models\Options;
use App\Models\Headline;
use App\Models\ServerStatus;
use App\Models\Currencies;

class AdminController extends Controller
{

    public function dashboard () {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    public function profile () {
        $d = Admin::where('id', auth()->id())->first();
        $title = 'My Profile';
        return view('admin.profile', [
            'd' => $d,
            'title' => $title,
        ]);
    }

    public function changePassword () {
        $id = auth()->id();
        $d = User::where('id', auth()->id())->first();
        $title = ' Change Password';
        return view('admin.change-password', [
            'd' => $d,
            'title' => $title,
        ]);
    }

    public function savePassword (Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        return redirect()->back()->with("error","Your current password that you entered does not match...");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        return redirect()->back()->with("error","New password must not be the same as the current one....");
        }
        if(!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0){
            return redirect()->back()->with("error","Your new password that you entered does not match...");
        }
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Your password has been changed successfully...");
    }

    public function userIndex () {
        $title = 'User Manager';
        $data = User::orderBy('id', 'desc')->paginate(20);
        return view('admin.user-index', [
            'data'  => $data,
            'title' => $title,
        ]);
    }

    public function userEdit ($id)
    {
        $User = User::find($id);
        return response()->json([
          'data' => $User
        ]);
    }

    public function userUpdate (Request $request)
    {
        $update = User::where('id',$request->id)
            ->update([
                'name'      => $request->name,
                'email'     => $request->email,
                'phone'     => $request->phone,
                'status'    => $request->status,
            ]);
        return redirect ('admin/users')->with("success","Data updated successfully...");
    }

    public function userDelete (Request $request) {
        $Users = User::where('id', $request->id)->get();
        if (!$Users) {
            return redirect ('admin/users')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = User::where('id', $request->id)->delete();
            return redirect ('admin/users')->with("success","Data deleted successfully...");
        }
    }

    public function newsIndex () {
        $title = 'News';
        $data = News::orderBy('id', 'desc')->paginate(20);
        return view('admin.news-index', [
            'data'  => $data,
            'title' => $title,
        ]);
    }

    public function newsAdd () {
        $title = 'Add News';
        return view('admin.news-add', [
            'title' => $title,
        ]);
    }

    public function newsStore (Request $request) {
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);
        $file = $request->file('thumbnail');
        $imageName1 = time().'-'.$file->getClientOriginalName();
        $imageName2 = Str::lower($imageName1);
        $imageName3 = preg_replace('/\s+/', '', $imageName2);
        $img = $request->thumbnail->move(public_path('storage/images'), $imageName3);
        $slug = Str::lower($string = str_replace(' ', '-', $request->title));
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);

        $News = new News;
        $News->title        = $request->title;
        $News->slug         = $slug;
        $News->thumbnail    = $imageName3;
        $News->content      = $request->content;
        $News->status       = $request->status;
        $News->save();
        return redirect ('admin/news')->with("success","Data created successfully...");
    }


    public function newsEdit ($id) {
        $data = News::where('id',$id)->first();
        return view('admin.news-edit', [
            'data' => $data,
            'title' => 'Edit News',
        ]);
    }

    public function newsUpdate (Request $request)
    {
        $update = News::where('id',$request->id)
            ->update([
                'title'     => $request->title,
                'content'   => $request->content,
                //'thumbnail' => $request->thumbnail,
                'status'    => $request->status,
            ]);
        return redirect ('admin/news')->with("success","Data updated successfully...");
    }

    public function newsDelete (Request $request) {
        $News = News::where('id', $request->id)->get();
        if (!$News) {
            return redirect ('admin/news')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = News::where('id', $request->id)->delete();
            return redirect ('admin/news')->with("success","Data deleted successfully...");
        }
    }

    public function servicesIndex () {
        $title = 'Services';
        $data = Services::orderBy('id', 'desc')->paginate(20);
        $headline = Headline::where('key','services')->first();
        return view('admin.services-index', [
            'title'     => $title,
            'data'      => $data,
            'headline'  => $headline,
        ]);
    }

    public function servicesAdd () {
        $title = 'Add Services';
        return view('admin.services-add', [
            'title' => $title,
        ]);
    }

    public function servicesStore (Request $request) {
        $Services = new Services;
        $Services->icon     = $request->icon;
        $Services->title    = $request->title;
        $Services->content  = $request->content;
        $Services->save();
        return redirect ('admin/services')->with("success","Data created successfully...");
    }

    public function servicesEdit ($id) {
        $data = Services::where('id',$id)->first();
        return view('admin.services-edit', [
            'data' => $data,
            'title' => 'Edit Services',
        ]);
    }

    public function servicesUpdate (Request $request)
    {
        $update = Services::where('id',$request->id)
            ->update([
                'icon'      => $request->icon,
                'title'     => $request->title,
                'content'   => $request->content,
            ]);
        return redirect ('admin/services')->with("success","Data updated successfully...");
    }

    public function servicesDelete (Request $request) {
        $Services = Services::where('id', $request->id)->get();
        if (!$Services) {
            return redirect ('admin/services')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = Services::where('id', $request->id)->delete();
            return redirect ('admin/services')->with("success","Data deleted successfully...");
        }
    }

    public function servicesHeadline (Request $request)
    {
        $update = Headline::where('key','services')
            ->update([
                'content'   => $request->content,
            ]);
        return redirect ('admin/services')->with("success","Data updated successfully...");
    }

    public function faqIndex () {
        $title = 'FAQ';
        $data = Faqs::orderBy('id', 'desc')->paginate(20);
        return view('admin.faq-index', [
            'data'  => $data,
            'title' => $title,
        ]);
    }

    public function faqAdd () {
        $title = 'Add FAQ';
        return view('admin.faq-add', [
            'title' => $title,
        ]);
    }

    public function faqStore (Request $request) {
        $Faqs = new Faqs;
        $Faqs->title    = $request->title;
        $Faqs->content  = $request->content;
        $Faqs->save();
        return redirect ('admin/faqs')->with("success","Data created successfully...");
    }

    public function faqEdit ($id) {
        $data = Faqs::where('id',$id)->first();
        return view('admin.faq-edit', [
            'data' => $data,
            'title' => 'Edit FAQ',
        ]);
    }

    public function faqUpdate (Request $request)
    {
        $update = Faqs::where('id',$request->id)
            ->update([
                'title'     => $request->title,
                'content'   => $request->content,
            ]);
        return redirect ('admin/faqs')->with("success","Data updated successfully...");
    }

    public function faqDelete (Request $request) {
        $Faqs = Faqs::where('id', $request->id)->get();
        if (!$Faqs) {
            return redirect ('admin/faqs')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = Faqs::where('id', $request->id)->delete();
            return redirect ('admin/faqs')->with("success","Data deleted successfully...");
        }
    }

    public function teamIndex () {
        $title = 'Team';
        $data = Team::orderBy('id', 'desc')->paginate(20);
        $headline = Headline::where('key','team')->first();
        return view('admin.team-index', [
            'title'     => $title,
            'data'      => $data,
            'headline'  => $headline,
        ]);
    }

    public function teamAdd () {
        $title = 'Add Team';
        return view('admin.team-add', [
            'title' => $title,
        ]);
    }

    public function teamStore (Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);
        $file = $request->file('image');
        $imageName1 = time().'-'.$file->getClientOriginalName();
        $imageName2 = Str::lower($imageName1);
        $imageName3 = preg_replace('/\s+/', '', $imageName2);
        $img = $request->image->move(public_path('storage/images'), $imageName3);

        $Team = new Team;
        $Team->name     = $request->name;
        $Team->position = $request->position;
        $Team->image    = $imageName3;
        $Team->save();
        return redirect ('admin/team')->with("success","Data created successfully...");
    }

    public function teamEdit ($id) {
        $data = Team::where('id',$id)->first();
        return view('admin.team-edit', [
            'data' => $data,
            'title' => 'Edit Team',
        ]);
    }

    public function teamUpdate (Request $request)
    {
        $update = Team::where('id',$request->id)
            ->update([
                'name'      => $request->name,
                'position'  => $request->position,
                //'image'     => $request->image,
            ]);
        return redirect ('admin/team')->with("success","Data updated successfully...");
    }

    public function teamDelete (Request $request) {
        $Team = Team::where('id', $request->id)->get();
        if (!$Team) {
            return redirect ('admin/team')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = Team::where('id', $request->id)->delete();
            return redirect ('admin/team')->with("success","Data deleted successfully...");
        }
    }

    public function teamHeadline (Request $request)
    {
        $update = Headline::where('key','team')
            ->update([
                'content'   => $request->content,
            ]);
        return redirect ('admin/team')->with("success","Data updated successfully...");
    }

    public function priceIndex () {
        $title = 'Price';
        $data = Prices::orderBy('id', 'desc')->paginate(20);
        $headline = Headline::where('key','price')->first();
        return view('admin.price-index', [
            'title'     => $title,
            'data'      => $data,
            'headline'  => $headline,
        ]);
    }

    public function priceAdd () {
        $title = 'Add Price';
        return view('admin.price-add', [
            'title' => $title,
        ]);
    }

    public function priceStore (Request $request) {
        $Prices = new Prices;
        $Prices->title      = $request->title;
        $Prices->content    = $request->content;
        $Prices->price      = $request->price;
        $Prices->notes      = $request->notes;
        $Prices->button     = $request->button;
        $Prices->save();
        return redirect ('admin/price')->with("success","Data created successfully...");
    }

    public function priceEdit ($id) {
        $data = Prices::where('id',$id)->first();
        return view('admin.price-edit', [
            'data' => $data,
            'title' => 'Edit Price',
        ]);
    }

    public function priceUpdate (Request $request)
    {
        $update = Prices::where('id',$request->id)
            ->update([
                'title'     => $request->title,
                'content'   => $request->content,
                'price'     => $request->price,
                'notes'     => $request->notes,
                'button'    => $request->button,
            ]);
        return redirect ('admin/price')->with("success","Data updated successfully...");
    }

    public function priceDelete (Request $request) {
        $Prices = Prices::where('id', $request->id)->get();
        if (!$Prices) {
            return redirect ('admin/price')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = Prices::where('id', $request->id)->delete();
            return redirect ('admin/price')->with("success","Data deleted successfully...");
        }
    }

    public function priceHeadline (Request $request)
    {
        $update = Headline::where('key','price')
            ->update([
                'content'   => $request->content,
            ]);
        return redirect ('admin/price')->with("success","Data updated successfully...");
    }

    public function pagesIndex () {
        $title = 'Pages';
        $data = Pages::orderBy('id', 'desc')->paginate(20);
        return view('admin.page-index', [
            'data'  => $data,
            'title' => $title,
        ]);
    }

    public function pagesAdd () {
        $title = 'Add Page';
        return view('admin.page-add', [
            'title' => $title,
        ]);
    }

    public function pagesStore (Request $request) {
        $slug = Str::lower($string = str_replace(' ', '-', $request->title));
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);

        $Pages = new Pages;
        $Pages->title       = $request->title;
        $Pages->slug        = $slug;
        $Pages->content     = $request->content;
        $Pages->save();
        return redirect ('admin/pages')->with("success","Data created successfully...");
    }

    public function pagesEdit ($id) {
        $data = Pages::where('id',$id)->first();
        return view('admin.page-edit', [
            'data' => $data,
            'title' => 'Edit Page',
        ]);
    }

    public function pagesUpdate (Request $request)
    {
        $update = Pages::where('id',$request->id)
            ->update([
                'title'     => $request->title,
                'slug'      => $request->slug,
                'content'   => $request->content,
            ]);
        return redirect ('admin/pages')->with("success","Data updated successfully...");
    }

    public function pagesDelete (Request $request) {
        $Pages = Pages::where('id', $request->id)->get();
        if (!$Pages) {
            return redirect ('admin/pages')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = Pages::where('id', $request->id)->delete();
            return redirect ('admin/pages')->with("success","Data deleted successfully...");
        }
    }

    public function partnersIndex () {
        $title = 'Partners';
        $data = Partners::orderBy('id', 'desc')->paginate(20);
        return view('admin.partner-index', [
            'data'  => $data,
            'title' => $title,
        ]);
    }

    public function partnersAdd () {
        $title = 'Add Partner';
        return view('admin.partner-add', [
            'title' => $title,
        ]);
    }

    public function partnersStore (Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);
        $file = $request->file('image');
        $imageName1 = time().'-'.$file->getClientOriginalName();
        $imageName2 = Str::lower($imageName1);
        $imageName3 = preg_replace('/\s+/', '', $imageName2);
        $img = $request->image->move(public_path('storage/images'), $imageName3);

        $Partners = new Partners;
        $Partners->title    = $request->title;
        $Partners->image    = $imageName3;
        $Partners->link     = $request->link;   
        $Partners->save();
        return redirect ('admin/partners')->with("success","Data created successfully...");
    }

    public function partnersEdit ($id) {
        $data = Partners::where('id',$id)->first();
        return view('admin.partner-edit', [
            'data' => $data,
            'title' => 'Edit Partner',
        ]);
    }

    public function partnersUpdate (Request $request)
    {
        $update = Partners::where('id',$request->id)
            ->update([
                'title'     => $request->title,
                //'image'   => $request->image,
                'link'      => $request->link,
            ]);
        return redirect ('admin/partners')->with("success","Data updated successfully...");
    }

    public function partnersDelete (Request $request) {
        $Partners = Partners::where('id', $request->id)->get();
        if (!$Partners) {
            return redirect ('admin/partners')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = Partners::where('id', $request->id)->delete();
            return redirect ('admin/partners')->with("success","Data deleted successfully...");
        }
    }

    public function optionsIndex () {
        $title = 'Options';
        $data = Options::orderBy('id', 'asc')->paginate(20);
        return view('admin.options-index', [
            'data'  => $data,
            'title' => $title,
        ]);
    }

    public function optionsEdit ($id) {
        $data = Options::where('id',$id)->first();
        return view('admin.options-edit', [
            'data' => $data,
            'title' => 'Edit Options',
        ]);
    }

    public function optionsUpdate (Request $request)
    {
        $update = Options::where('id',$request->id)
            ->update([
                'value' => $request->value,
            ]);
        return redirect ('admin/options')->with("success","Web Options updated successfully...");
    }

    public function serverIndex () {
        $title = 'Server Status';
        $data = ServerStatus::orderBy('id', 'desc')->paginate(20);
        return view('admin.server-status', [
            'title' => $title,
            'data'  => $data,
        ]);
    }

    public function serverAdd (Request $request)
    {
        $serv = new ServerStatus;
        $serv->title    = $request->title;
        $serv->status   = $request->status;
        $serv->save();
        return redirect ('admin/server-status')->with("success","Data created successfully...");
    }

    public function serverEdit ($id)
    {
        $ServerStatus = ServerStatus::find($id);
        return response()->json([
          'data' => $ServerStatus
        ]);
    }

    public function serverUpdate (Request $request)
    {
        $update = ServerStatus::where('id',$request->id)
            ->update([
                'title'     => $request->title,
                'status'    => $request->status,
            ]);
        return redirect ('admin/server-status')->with("success","Data updated successfully...");
    }

    public function serverDelete (Request $request) {
        $Servers = ServerStatus::where('id', $request->id)->get();
        if (!$Servers) {
            return redirect ('admin/server-status')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = ServerStatus::where('id', $request->id)->delete();
            return redirect ('admin/server-status')->with("success","Data deleted successfully...");
        }
    }

    public function currenciesIndex () {
        $title = 'Currencies';
        $data = Currencies::orderBy('id', 'desc')->paginate(20);
        $headline = Headline::where('key','currencies')->first();
        return view('admin.currencies', [
            'title'     => $title,
            'data'      => $data,
            'headline'  => $headline,
        ]);
    }

    public function currenciesAdd (Request $request)
    {
        $serv = new Currencies;
        $serv->icon     = $request->icon;
        $serv->name     = $request->name;
        $serv->price    = $request->price;
        $serv->save();
        return redirect ('admin/currencies')->with("success","Data created successfully...");
    }

    public function currenciesEdit ($id)
    {
        $Currencies = Currencies::find($id);
        return response()->json([
          'data' => $Currencies
        ]);
    }

    public function currenciesUpdate (Request $request)
    {
        $update = Currencies::where('id',$request->id)
            ->update([
                'icon'  => $request->icon,
                'name'  => $request->name,
                'price' => $request->price,
            ]);
        return redirect ('admin/currencies')->with("success","Data updated successfully...");
    }

    public function currenciesDelete (Request $request) {
        $Currencies = Currencies::where('id', $request->id)->get();
        if (!$Currencies) {
            return redirect ('admin/currencies')->with("error","Ups! Something wrong...");
        }
        else{
            $Delete = Currencies::where('id', $request->id)->delete();
            return redirect ('admin/currencies')->with("success","Data deleted successfully...");
        }
    }

    public function currenciesHeadline (Request $request)
    {
        $update = Headline::where('key','currencies')
            ->update([
                'content'   => $request->content,
            ]);
        return redirect ('admin/currencies')->with("success","Data updated successfully...");
    }

    public function homepageIndex () {
        $title = 'Homepage';
        $data = Currencies::orderBy('id', 'desc')->paginate(20);
        $headline = Headline::where('key','homepage')->first();
        return view('admin.homepage', [
            'title'     => $title,
            'data'      => $data,
            'headline'  => $headline,
        ]);
    }

    public function homepageHeadline (Request $request)
    {
        $update = Headline::where('key','homepage')
            ->update([
                'content'   => $request->content,
                'title'     => $request->title,
            ]);
        return redirect ('admin/homepage')->with("success","Data updated successfully...");
    }

}