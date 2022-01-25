<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ItemBound;

class PageController extends Controller
{
	// Index
    public function index()
    {
    	return view('dashboard.index');
    }
    // Dashboard
    public function dashboard( Request $request )
    {
    	if(!Auth::check()){
    		return redirect('/login');
    	}

        $revenue = DB::table('item_bounds')
        ->leftJoin('items', 'item_bounds.item', '=', 'items.id')
        ->select(DB::raw("
            SUM(items.price*item_bounds.qty) AS total,
            (SELECT SUM(m_items.price*m_bounds.qty) FROM item_bounds AS m_bounds INNER JOIN items AS m_items on m_bounds.item = m_items.id WHERE MONTH(m_bounds.created_at) = '".date('m')."' AND m_bounds.type='outbound') AS monthly,
            (SELECT SUM(w_items.price*w_bounds.qty) FROM item_bounds AS w_bounds INNER JOIN items AS w_items on w_bounds.item = w_items.id WHERE WEEK(w_bounds.created_at) = '".abs(date('W'))."' AND w_bounds.type='outbound') AS weekly,
            (SELECT SUM(d_items.price*d_bounds.qty) FROM item_bounds AS d_bounds INNER JOIN items AS d_items on d_bounds.item = d_items.id WHERE CAST(d_bounds.created_at AS DATE) = CAST('".date('Y-m-d')."' AS DATE) AND d_bounds.type='outbound') AS daily
        "))
        ->whereRaw("item_bounds.type = 'outbound'")
        ->first();

    	return view('dashboard.dashboard', [
            'revenue' => $revenue,
        ]);
    }

    // registration
	public function register()
	{
		return view('dashboard.register');
	}

    // Login
    public function login()
    {
        if(Auth::check()){
            return redirect('dashboard');
        }
    	return view('dashboard.login');
    }
}
