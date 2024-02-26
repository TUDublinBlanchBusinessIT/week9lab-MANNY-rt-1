<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use \App\Models\Customer as Customer; 

class CustomerController extends Controller 
{ 
    public function new() 
    { 
        return view('customers.new'); 
    } 

}
?>    