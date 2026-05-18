<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use App\Models\Pays;
use App\Models\Ville;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patients::join('pays', 'patients.pays_id', '=', 'pays.id_pays')
            ->join('ville', 'patients.ville_id', '=', 'ville.id_ville')
            ->select('patients.*', 'pays.name as pays_name', 'pays.phone_code', 'ville.name as ville_name')
            ->get();
        $patientsCount = Patients::count();
        return view('admin.patient.patients', compact('patients', 'patientsCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getByPays($id_pays)
    {
        return Ville::where('pays_id', $id_pays)
            ->orderBy('name')
            ->get(['id_ville', 'name']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required|unique:patients,phone',
            'email' => 'required|unique:patients,email',
            'taille' => 'nullable',
            'poids' => 'nullable',
            'password' => 'required',
            'date' => 'required',
            'nationnalite' => 'required',
            'ville' => 'required',
            'code_postal' => 'required',
            'sanguin' => 'required',
            'adresse' => 'required',
            'pays' => 'required',
            'genre' => 'required',
        ];

        $messages = [
            'nom.required' => "Son nom est obligatoire",
            'prenom.required' => "Son prénom est obligatoire",
            'phone.required' => "Son numéro de téléphone est obligatoire",
            'phone.unique' => "Le numéro de téléphone est déjà utilisé, veuillez utiliser un autre.",
            'email.required' => "Son email est obligatoire.",
            'email.unique' => "L'email est déjà utilisé, veuillez utiliser un autre.",
            'nationnalite.required' => "Sa nationnalité est obligatoire.",
            'date.required' => "Sa date de naissance est obligatoire.",
            'ville.required' => "Sa ville est obligatoire.",
            'password.required' => "Son mot de passe est obligatoire.",
            'adresse' => 'Son adresse est obligatoire',
            'pays' => 'Son pays est obligatoire',
            'genre' => 'Sélectionner son genre',
            'code_postal' => 'Définir son code postal',
            'sanguin' => 'Sélectionner son groupe sanguin',
        ];

        $request->validate($rules, $messages);

        $timestamp = Carbon::now()->format('Ymd_His');

        // Photo
        if ($request->file('photo') !== null) {
            $diplome = $request->file('photo');
            $diplomeName = 'patients_' . $timestamp . '.' . $diplome->getClientOriginalExtension();
            $diplome->move(public_path('patients'), $diplomeName);
            $diplomePath = url('admin/public/patients/' . $diplomeName);
        }

        $doctor = new Patients();
        $doctor->name = $request->nom;
        $doctor->last_name = $request->prenom;
        $doctor->birth_date = $request->date;
        $doctor->sanguin = $request->sanguin;
        $doctor->genre = $request->genre;
        $doctor->phone = $request->phone;
        $doctor->emplacement = $request->adresse;
        $doctor->nationalite = $request->nationnalite;
        $doctor->taille = $request->taille;
        $doctor->poids = $request->poids;
        $doctor->postal_code = $request->code_postal;
        $doctor->pays_id = $request->pays;
        $doctor->ville_id = $request->ville;
        $doctor->status = 'approved';
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $doctor->photo = $diplomePath ?? "";
        if ($doctor->save()) {
            return back()->with('succes',  "Vous avez ajouter le patient. " . $request->nom);
        } else {
            return back()->withErrors(["Impossible d'ajouter le patient. " . $request->nom . ". Veuillez réessayer!!"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patients = Patients::join('pays', 'patients.pays_id', '=', 'pays.id_pays')
            ->join('ville', 'patients.ville_id', '=', 'ville.id_ville')
            ->select('patients.*', 'pays.name as pays_name', 'pays.phone_code', 'ville.name as ville_name')
            ->where('patients.id_patient', '=', $id)
            ->first();
        return view('admin.patient.patient-details', compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patients = Patients::join('pays', 'patients.pays_id', '=', 'pays.id_pays')
            ->join('ville', 'patients.ville_id', '=', 'ville.id_ville')
            ->select('patients.*', 'pays.name as pays_name', 'pays.phone_code', 'ville.name as ville_name')
            ->where('patients.id_patient', '=', $id)
            ->first();

        $pays = Pays::all();

        return view('admin.patient.edit-patient', compact('patients', 'pays'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = Patients::findOrFail($id);

        /* VALIDATION */
        $validated = $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',

            'phone' => [
                'required',
                Rule::unique('patients', 'phone')->ignore($patient->id_patient, 'id_patient'),
            ],

            'email' => [
                'required',
                'email',
                Rule::unique('patients', 'email')->ignore($patient->id_patient, 'id_patient'),
            ],

            'taille' => 'nullable',
            'poids' => 'nullable',
            'password' => 'nullable',
            'date' => 'required',
            'nationnalite' => 'required',
            'ville' => 'required',
            'code_postal' => 'required',
            'sanguin' => 'required',
            'adresse' => 'required',
            'pays' => 'required',
            'genre' => 'required',

            'statut' => 'required',

        ], [
            'nom.required' => "Son nom est obligatoire",
            'prenom.required' => "Son prénom est obligatoire",
            'phone.required' => "Son numéro de téléphone est obligatoire",
            'phone.unique' => "Le numéro de téléphone est déjà utilisé, veuillez utiliser un autre.",
            'email.required' => "Son email est obligatoire.",
            'email.unique' => "L'email est déjà utilisé, veuillez utiliser un autre.",
            'nationnalite.required' => "Sa nationnalité est obligatoire.",
            'date.required' => "Sa date de naissance est obligatoire.",
            'ville.required' => "Sa ville est obligatoire.",
            'adresse' => 'Son adresse est obligatoire',
            'pays' => 'Son pays est obligatoire',
            'genre' => 'Sélectionner son genre',
            'sanguin' => 'Sélectionner son groupe sanguin',
            'code_postal' => 'Définir son code postal',
            'statut.required' => "Sélectionnez son statut",
        ]);

        /* UPLOAD PHOTO */
        if ($request->hasFile('photo')) {
            $timestamp = Carbon::now()->format('Ymd_His');
            $photo = $request->file('photo');

            $photoName = 'patients_' . $timestamp . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('patients'), $photoName);

            $patient->photo = url('admin/public/patients/' . $photoName);
        }

        /* MISE À JOUR DES DONNÉES */
        $patient->fill([
            'name' => $validated['nom'],
            'last_name' => $validated['prenom'],
            'birth_date' => $validated['date'],
            'sanguin' => $validated['sanguin'] ?? '',
            'genre' => $validated['genre'],
            'phone' => $validated['phone'],
            'emplacement' => $validated['adresse'],
            'nationalite' => $validated['nationnalite'],
            'taille' => $validated['taille'] ?? '',
            'poids' => $validated['poids'] ?? '',
            'postal_code' => $validated['code_postal'] ?? '',
            'pays_id' => $validated['pays'],
            'ville_id' => $validated['ville'],
            'status' => $validated['statut'],
            'email' => $validated['email'],
        ]);

        /* MOT DE PASSE (OPTIONNEL) */
        if (!empty($validated['password'])) {
            $patient->password = Hash::make($validated['password']);
        }

        $patient->save();

        return back()->with('succes', "Modification effectuée avec succès ✅");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Le patient est utilisé → on le rejette
        Patients::where('id_patient', $id)
            ->update([
                'status' => 'rejected'
            ]);

        return back()->with('succes',  "Suppression faite");
    }
}
