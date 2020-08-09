<?php

namespace App\Http\Controllers;

use App\feedback;
use App\Http\Controllers\Controller;

use App\game;
use App\Http\Requests\ContactRequest;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GameShopController extends Controller
{
    public function index()
    {
        $new_product = game::orderByDesc('created_at')->limit(10)->get();
        $sale_product = game::whereRaw('SALE <> 0', array(10))->get();
        $top10Product = game::join(DB::raw(
            '(SELECT A.GAME_ID, sum(A.GAME_QUANTITY)
             FROM cart_item A join cart B on A.CART_ID = B.ID join game C on A.GAME_ID = C.ID
             GROUP BY A.GAME_ID
             ORDER BY sum(A.GAME_QUANTITY) desc
             limit 10) TopProduct')
            , function ($join) {
                $join->on('game.Id', '=', 'TopProduct.GAME_ID');
            })->get();

        return view('client.index')->with(['newProduct' => $new_product, 'saleProduct' => $sale_product, 'topProduct' => $top10Product]);
    }

    public function login()
    {
        return view('security.login');
    }

    public function register()
    {
        return view('security.register');
    }

    public function products()
    {
        $products = game::all();
        return view('client.products', ['products' => $products]);
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function postMessage(ContactRequest $request){
        $message = $request->all();
        $feedback = new feedback();
        $feedback->NAME = $message['name'];
        $feedback->EMAIL = $message['email'];
        $feedback->SUBJECT = $message['subject'];
        $feedback->MESSAGE = $message['message'];
        $feedback->save();
        return redirect('contact')->with('success','Your message was sent success');
    }

    public function support(){
        return view('client.support');
    }

    public function viewAbout()
    {
        return view('client/About');
    }
    public function viewProductdetail($id)
    {
        $game = game::find($id);
        return view('client/productDetail')->with(["game" => $game]);
    }

    public function myAccount(Request $request)
    {
        $user = $request->session()->get('user');
        if ($user->TYPE == 2) {
            $client = user::where('ID', $user->ID)->first();
            return view('client/myAccount')->with(["user" => $client]);
        } else if ($user->TYPE == 1) {
            return redirect("admin/products/home");
        } else {
            return redirect("supervisor/member/home");
        }

        // // User Info
    }

    public function myAccountUpdate(Request $request)
    {
        $user = $request->session()->get('user');
        return view('client/myAccountUpdate')->with(["user" => $user]);
    }

    public function postAccountUpdate(Request $request)
    {
        // noted - user instance of client...
        $id = $request->session()->get('user')->ID;

        $mb = user::where('ID', $id);
        $mb->update([
            'FNAME' => $request['FNAME'],
            'LNAME' => $request['LNAME'],
            'ADDRESS' => $request['ADDRESS'],
            'PHONE' => $request['PHONE'],
        ]);

        $user = DB::table('user')->where('ID', $id)->first();

        $request->session()->forget('client');
        $request->session()->put('client', $user);

        return redirect()->action('GameShopController@myAccount');
    }

    public function changePassword(Request $request)
    {
        $user = $request->session()->get('user');

        return view('client.changePassword')->with(["user" => $user]);
    }

    public function postChangePassword(Request $request)
    {
        $curPass = $request->input('txtPassword');
        $newPass = $request->input('txtNewPassword');
        $conPass = $request->input('txtConPassword');

        $id = $request->input('txtId');
        $customer = DB::table('user')->where('ID', $id)->first();

        $check = Hash::check($curPass, $customer->PASSWORD);
        if (!$check) {
            return redirect()->back()->with('wrongPass', '*Wrong password!');
        }
        if ($newPass == $curPass) {
            return redirect()->back()->with('samePass', '*Your new password is the same as current passoword, please change different password!');
        }
        if ($newPass != $conPass) {
            return redirect()->back()->with('wrongConfirm', '*Your confirm password is not meet!');
        }
        DB::table('user')->where('ID', $id)->update([
            'PASSWORD' => Hash::make($newPass),
        ]);
        return redirect()->action('GameShopController@myAccount');
    }

    public function orderHistory(Request $request)
    {
        $user = $request->session()->get('user');
    
            $orders = DB::table('cart')->where('USER_ID', $user->ID)->get();
            return view('client/orderHistory')->with(["orders" => $orders]);
    }

    public function orderDetail($id)
    {
        $details = DB::table('cart_item')->where('CART_ID', $id)->get();

        $orderLines = [];

        foreach ($details as $detail) {
            $game = DB::table('game')->where('ID', $detail->GAME_ID)->first();
            $orderLine = (['GName' => $game->NAME,
                'GPrice' => $game->PRICE,
                'Quantity' => $detail->GAME_QUANTITY,
                'Discount' => $detail->DISCOUNT]);
            array_push($orderLines, $orderLine);
        }

        return view('client/orderDetail')->with(["orderLines" => $orderLines]);
    }

}
