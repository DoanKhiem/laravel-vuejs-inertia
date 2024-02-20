<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function index() {
        return Inertia::render('index', [
            'customers' => Customer::all()->map(function ($customer) {
                return [
                    'id' => $customer->id,
                    'name' => $customer->name,
                ];
            })
        ]);
    }
    public function create() {
        return inertia::render('create');
    }
    public function store(Request $request) {
        // Validate the request...
       $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|unique:customers|max:14|min:10',
        ]);
        Customer::create($validated);

        return Redirect::route('customer.index');
    }
}
