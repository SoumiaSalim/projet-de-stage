<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use App\Prescription;
use App\Appointment;
use App\Billing;
use App\Document;
use App\History;

use Illuminate\Support\Facades\Hash;
use Redirect;
use Illuminate\Validation\Rule;

class PatientController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	$patients = User::where('role', 'patient')->OrderBy('id','DESC')->paginate(10);

    	return view('prescription.patient.all', ['patients' => $patients]);

    }

    public function create(){
    	return view('prescription.patient.create');
    }

    public function edit($id){
    	$patient = User::find($id);
    	return view('prescription.patient.edit',['patient' => $patient]);
    }

        public function store_edit(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'email' => [
		        'required', 'email', 'max:255',
		        Rule::unique('users')->ignore($request->user_id),
		    ],
            'birthday' => ['required'],
            'gender' => ['required'],

    	]);

    	$user = User::find($request->user_id);
		$user->email = $request->email;
		$user->name = $request->name;
		$user->update();


		$patient = Patient::where('user_id', $request->user_id)
		         			->update(['birthday' => $request->birthday,
										'phone' => $request->phone,
										'gender' => $request->gender,
										'blood' => $request->blood,
										'adress' => $request->adress,
										'weight' => $request->weight,
										'height' => $request->height]);

		
		
   
		return Redirect()->back()->with('success', __('sentence.Patient Updated Successfully'));

    }

    public function store(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'birthday' => ['required'],
            'gender' => ['required'],

    	]);

    	$user = new User();
		$user->password = Hash::make('doctorino123');
		$user->email = $request->email;
		$user->name = $request->name;
		$user->save();


		$patient = new Patient();
		$patient->user_id = $user->id;
		$patient->birthday = $request->birthday;
		$patient->phone = $request->phone;
		$patient->gender = $request->gender;
		$patient->blood = $request->blood;
		$patient->adress = $request->adress;
		$patient->weight = $request->weight;
		$patient->height = $request->height;
		$patient->save();

		return Redirect()->back()::route('patient.all')->with('success', __('sentence.Patient Created Successfully'));

    }


    public function view($id){

    	$patient = User::findOrfail($id);
        $prescriptions = Prescription::where('user_id' ,$id)->OrderBy('id','Desc')->get();
        $appointments = Appointment::where('user_id' ,$id)->OrderBy('id','Desc')->get();
        $documents = Document::where('user_id' ,$id)->OrderBy('id','Desc')->get();
        $invoices = Billing::where('user_id' ,$id)->OrderBy('id','Desc')->get();
        $historys = History::where('user_id' ,$id)->OrderBy('id','Desc')->get();

    	return view('prescription.patient.view', [
    		'patient' => $patient, 
    		'prescriptions' => $prescriptions, 
    		'appointments' => $appointments, 
    		'invoices' => $invoices,
    		'documents' => $documents,
    		'historys' => $historys
    	]);

    }


}
