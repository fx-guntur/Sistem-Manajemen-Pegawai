<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts = Contract::latest()->paginate(10);
        return view('contract.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'contract_type' => 'required|string|max:100',
        ]);

        $contract = Contract::create([
            'contract_type' => $request->contract_type,
        ]);

        return response()->json(['success' => true, 'contract' => $contract]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'contract_type' => 'required|string|max:100',
        ]);

        $contract = Contract::findOrFail($id);
        $contract->update([
            'contract_type' => $request->contract_type,
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contract = Contract::findOrFail($id);
        $contract->delete();

        return redirect()->route('contracts.index')->with('success', 'Kontrak berhasil dihapus.');
    }
}
