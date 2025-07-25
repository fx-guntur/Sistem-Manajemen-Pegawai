<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with(['position', 'contract'])->latest()->paginate(10);
        $positions = Position::all();
        $contracts = Contract::all();
        return view('employee.index', compact('employees', 'positions', 'contracts'));
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
            'name' => 'required|string|max:100',
            'contract_id' => 'required|exists:contracts,id',
            'position_id' => 'required|exists:positions,id',
        ]);

        $employee = Employee::create([
            'name' => $request->name,
            'contract_id' => $request->contract_id,
            'position_id' => $request->position_id,
        ]);

        return response()->json(['success' => true, 'employee' => $employee]);
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
            'name' => 'required|string|max:100',
            'contract_id' => 'required|exists:contracts,id',
            'position_id' => 'required|exists:positions,id',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update([
            'name' => $request->name,
            'contract_id' => $request->contract_id,
            'position_id' => $request->position_id,
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
