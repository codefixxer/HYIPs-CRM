<?php
// app/Http/Controllers/Admin/BankController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        // Display all banks
        $banks = Bank::all(); 
        return view('admin.pages.banks.index', compact('banks')); 
    }

    public function create($id = null)
    {
        return view('admin.pages.banks.create'); // Pass the bank data to view for editing
    }

    public function edit($id)
    {
        $bank = Bank::findOrFail($id) ; 
        return view('admin.pages.banks.create', compact('bank')); // Pass the bank data to view for editing
    }

    public function update(Request $request, $id)
{
    // Validate the data
    $request->validate([
        'bank_name' => 'required|string|max:255',
        'account_number' => 'required|string|max:255',
    ]);

    // Find the bank by id and update
    $bank = Bank::findOrFail($id);
    $bank->update([
        'bank_name' => $request->bank_name,
        'account_number' => $request->account_number,
    ]);

    return redirect()->route('admin.bank.index')->with('success', 'Bank details updated successfully');
}


    public function store(Request $request, $id = null)
    {
        // Validate the incoming data
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
        ]);

        // If editing, update the record
        if ($id) {
            $bank = Bank::findOrFail($id);
            $bank->update([
                'bank_name' => $request->bank_name,
                'account_number' => $request->account_number,
                'status' => $request->status,
            ]);
        } else {
            // If creating a new record
            Bank::create([
                'bank_name' => $request->bank_name,
                'account_number' => $request->account_number,
                'status' => 'active', // Default to active status
            ]);
        }

        return redirect()->route('admin.bank.index')->with('success', 'Bank details saved successfully!');
    }

    public function destroy($id)
    {
        // Delete the bank record
        $bank = Bank::findOrFail($id);
        $bank->delete();
        return redirect()->route('admin.bank.index')->with('success', 'Bank record deleted successfully!');
    }

    public function changeStatus($id)
    {
        // Change the status of the bank record
        $bank = Bank::findOrFail($id);
        $bank->status = ($bank->status == 'active') ? 'inactive' : 'active'; // Toggle the status
        $bank->save();

        return redirect()->route('admin.bank.index')->with('success', 'Bank status updated successfully!');
    }
}
