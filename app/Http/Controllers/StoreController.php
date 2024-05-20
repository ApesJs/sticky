<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('stores.index', [
            'stores' => Store::query()->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stores.form',[
            'store' => new Store(),
            'page_meta' => [
                'title' => 'Create User',
                'description' => 'You can create your stores.',
                'method' => 'post',
                'url' => route('stores.store'),
                'submit_text' => 'Create'
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
//        slug di generate di dalam StoreObserver
        $request->user()->stores()->create([
            ...$request->validated(),
            ...['logo' => $request->file('logo')->store('images/stores')]
        ]);

        return redirect()->route('stores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        return view('stores.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Store $store)
    {
        Gate::authorize('update', $store);

        return view('stores.form', [
            'store' => $store,
            'page_meta' => [
                'title' => 'Update User',
                'description' => 'You can edit your stores.',
                'method' => 'put',
                'url' => route('stores.update', $store),
                'submit_text' => 'Update'
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Store $store)
    {
        $store->update([
            ...$request->validated(),
        ]);

        return redirect()->route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        return "DESTROY";
    }
}
