<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\PremiereConsultation;
use App\Models\Specialisations;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctors::join('specialisations', 'doctors.specialisation_id', '=', 'specialisations.id_specialisation')
            ->select('doctors.*', 'specialisations.nom_specialisation', 'specialisations.description_specialisation')
            ->get();
        $doctorsCount = Doctors::count();
        return view('admin.doctors.doctors', compact('doctors', 'doctorsCount'));
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
        $rules = [
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required|unique:doctors,phone',
            'email' => 'required|unique:doctors,email',
            'taille' => 'nullable',
            'poids' => 'nullable',
            'password' => 'required',
            'date' => 'required',
            'nationnalite' => 'required',
            'annee_experience' => 'required',
            'specialisation' => 'required',
            'sanguin' => 'nullable',
            'langue' => 'nullable',
            'biographie' => 'nullable',
            'lieu' => 'required',
            'licence' => 'required',
            'genre' => 'required',
        ];

        $messages = [
            'nom.required' => "Son nom est obligatoire",
            'prenom.required' => "Son prénom est obligatoire",
            'telephone.required' => "Son numéro de téléphone est obligatoire",
            'telephone.unique' => "Le numéro de téléphone est déjà utilisé, veuillez utiliser un autre.",
            'email.required' => "Son email est obligatoire.",
            'email.unique' => "L'email est déjà utilisé, veuillez utiliser un autre.",
            'nationnalite.required' => "Sa nationnalité est obligatoire.",
            'date.required' => "Sa date de naissance est obligatoire.",
            'designation.required' => "Sélectionnez sa désignation (son poste qu'il occupe).",
            'annee_experience.required' => "Son année d'expérience est obligatoire.",
            'specialisation.required' => "Sa spécialisation est obligatoire.",
            'password.required' => "Son mot de passe est obligatoire.",
            'lieu' => 'Son lieu d\'emplacement est obligatoire',
            'licence' => 'Sa licence médicale est obligatoire',
            'genre' => 'Sélectionner son genre',
        ];

        $request->validate($rules, $messages);

        $timestamp = Carbon::now()->format('Ymd_His');

        // Photo
        if ($request->file('photo') !== null) {
            $diplome = $request->file('photo');
            $diplomeName = 'doctors_' . $timestamp . '.' . $diplome->getClientOriginalExtension();
            $diplome->move(public_path('doctors'), $diplomeName);
            $diplomePath = url('admin/public/doctors/' . $diplomeName);
        }

        $doctor = new Doctors();
        $doctor->name = $request->nom;
        $doctor->last_name = $request->prenom;
        $doctor->birth_date = $request->date;
        $doctor->experience_an = $request->annee_experience;
        $doctor->licence_medicale = $request->licence;
        $doctor->language = $request->langue;
        $doctor->sanguin = $request->sanguin;
        $doctor->genre = $request->genre;
        $doctor->phone = $request->telephone;
        $doctor->emplacement = $request->lieu;
        $doctor->nationalite = $request->nationnalite;
        $doctor->taille = $request->taille;
        $doctor->poids = $request->poids;
        $doctor->biographie = $request->biographie;
        $doctor->specialisation_id = $request->specialisation;
        $doctor->status = 'approved';
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $doctor->photo = $diplomePath ?? "";
        if ($doctor->save()) {
            return back()->with('succes',  "Vous avez ajouter Dr. " . $request->nom);
        } else {
            return back()->withErrors(["Impossible d'ajouter Dr. " . $request->nom . ". Veuillez réessayer!!"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor = Doctors::findOrFail($id);
        return view('admin.doctors.doctor-details', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctors::findOrFail($id);
        $specialisations = Specialisations::all();
        return view('admin.doctors.edit-doctor', compact('doctor', 'specialisations'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $doctor = Doctors::findOrFail($id);

        /* VALIDATION */
        $validated = $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',

            'telephone' => [
                'required',
                Rule::unique('doctors', 'phone')->ignore($doctor->id_doctor, 'id_doctor'),
            ],

            'email' => [
                'required',
                'email',
                Rule::unique('doctors', 'email')->ignore($doctor->id_doctor, 'id_doctor'),
            ],

            'date' => 'required|date',
            'nationnalite' => 'required|string',
            'annee_experience' => 'required|integer|min:0',
            'specialisation' => 'required|exists:specialisations,id_specialisation',
            'lieu' => 'required|string',
            'licence' => 'required|string',
            'genre' => 'required',
            'statut' => 'required',

            'taille' => 'nullable',
            'poids' => 'nullable',
            'sanguin' => 'nullable',
            'langue' => 'nullable',
            'biographie' => 'nullable|string',

            'password' => 'nullable|min:6',
        ], [
            'nom.required' => "Son nom est obligatoire",
            'prenom.required' => "Son prénom est obligatoire",
            'telephone.required' => "Son numéro de téléphone est obligatoire",
            'telephone.unique' => "Le numéro de téléphone est déjà utilisé",
            'email.required' => "Son email est obligatoire",
            'email.unique' => "L'email est déjà utilisé",
            'date.required' => "Sa date de naissance est obligatoire",
            'nationnalite.required' => "Sa nationalité est obligatoire",
            'annee_experience.required' => "Son année d'expérience est obligatoire",
            'specialisation.required' => "Sa spécialisation est obligatoire",
            'lieu.required' => "Son lieu d'emplacement est obligatoire",
            'licence.required' => "Sa licence médicale est obligatoire",
            'genre.required' => "Sélectionnez son genre",
            'statut.required' => "Sélectionnez son statut",
        ]);

        /* UPLOAD PHOTO */
        if ($request->hasFile('photo')) {
            $timestamp = Carbon::now()->format('Ymd_His');
            $photo = $request->file('photo');

            $photoName = 'doctor_' . $timestamp . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('doctors'), $photoName);

            $doctor->photo = url('admin/public/doctors/' . $photoName);
        }

        /* MISE À JOUR DES DONNÉES */
        $doctor->fill([
            'name' => $validated['nom'],
            'last_name' => $validated['prenom'],
            'birth_date' => $validated['date'],
            'experience_an' => $validated['annee_experience'],
            'licence_medicale' => $validated['licence'],
            'language' => $validated['langue'] ?? null,
            'sanguin' => $validated['sanguin'] ?? null,
            'genre' => $validated['genre'],
            'phone' => $validated['telephone'],
            'emplacement' => $validated['lieu'],
            'nationalite' => $validated['nationnalite'],
            'taille' => $validated['taille'] ?? null,
            'poids' => $validated['poids'] ?? null,
            'biographie' => $validated['biographie'] ?? null,
            'specialisation_id' => $validated['specialisation'],
            'status' => $validated['statut'],
            'email' => $validated['email'],
        ]);

        /* MOT DE PASSE (OPTIONNEL) */
        if (!empty($validated['password'])) {
            $doctor->password = Hash::make($validated['password']);
        }

        $doctor->save();

        return back()->with('succes', "Modification effectuée avec succès ✅");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Le docteur est utilisé → on le rejette
        Doctors::where('id_doctor', $id)
            ->update([
                'status' => 'rejected'
            ]);


        return back()->with('succes',  "Suppression faite");
    }
}
