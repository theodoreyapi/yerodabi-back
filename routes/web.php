<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login-cover');
});
Route::get('register', function () {
    return view('auth.register-cover');
});
Route::get('forgot', function () {
    return view('auth.forgot-password-cover');
});
Route::get('two-step', function () {
    return view('auth.two-step-verification-cover');
});
Route::get('reset', function () {
    return view('auth.reset-password-cover');
});
Route::get('change', function () {
    return view('auth.success-cover');
});


Route::get('privacy', function () {
    return view('terms.privacy-policy');
});
Route::get('terms', function () {
    return view('terms.terms-and-conditions');
});

// Tableau de bord
Route::get('index', function () {
    return view('admin.dashboard.index');
});
Route::get('doctor', function () {
    return view('doctor.dashboard.doctor-dashboard');
});
Route::get('patient', function () {
    return view('patient.dashboard.patient-dashboard');
});

// Doctor
Route::get('doctors-appointments', function () {
    return view('doctor.appointments.doctors-appointments');
});
Route::get('online-consultations', function () {
    return view('doctor.appointments.online-consultations');
});
Route::get('doctors-schedules', function () {
    return view('doctor.doctors-schedules');
});
Route::get('doctors-prescriptions', function () {
    return view('doctor.doctors-prescriptions');
});
Route::get('doctors-prescription-details', function () {
    return view('doctor.doctors-prescription-details');
});
Route::get('doctors-leaves', function () {
    return view('doctor.doctors-leaves');
});
Route::get('doctors-reviews', function () {
    return view('doctor.doctors-reviews');
});
Route::get('doctors-profile-settings', function () {
    return view('doctor.settings.doctors-profile-settings');
});
Route::get('doctors-password-settings', function () {
    return view('doctor.settings.doctors-password-settings');
});
Route::get('doctors-notification-settings', function () {
    return view('doctor.settings.doctors-notification-settings');
});

// Patient
Route::get('patient-appointments', function () {
    return view('patient.patient-appointments');
});
Route::get('patient-doctors', function () {
    return view('patient.patient-doctors');
});
Route::get('patient-appointment-details', function () {
    return view('patient.patient-appointment-details');
});
Route::get('patients-doctor-details', function () {
    return view('patient.patients-doctor-details');
});
Route::get('patient-prescriptions', function () {
    return view('patient.patient-prescriptions');
});
Route::get('patient-prescription-details', function () {
    return view('patient.patient-prescription-details');
});
Route::get('patient-notifications-settings', function () {
    return view('patient.settings.patient-notifications-settings');
});
Route::get('patient-profile-settings', function () {
    return view('patient.settings.patient-profile-settings');
});
Route::get('patient-password-settings', function () {
    return view('patient.settings.patient-password-settings');
});
Route::get('patient-invoices', function () {
    return view('patient.patient-invoices');
});
Route::get('patient-invoice-details', function () {
    return view('patient.patient-invoice-details');
});

// Admin
Route::get('doctors', function () {
    return view('admin.doctors.doctors');
});
Route::get('add-doctor', function () {
    return view('admin.doctors.add-doctor');
});
Route::get('doctor-details', function () {
    return view('admin.doctors.doctor-details');
});
Route::get('doctor-schedule', function () {
    return view('admin.doctors.doctor-schedule');
});
Route::get('appointment-calendar', function () {
    return view('admin.appointment.appointment-calendar');
});
Route::get('appointments', function () {
    return view('admin.appointment.appointments');
});
Route::get('new-appointment', function () {
    return view('admin.appointment.new-appointment');
});
