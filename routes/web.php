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
Route::get('doctors-patient-details', function () {
    return view('doctor.appointments.doctors-patient-details');
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
Route::get('edit-doctor', function () {
    return view('admin.doctors.edit-doctor');
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
Route::get('patients', function () {
    return view('admin.patient.patients');
});
Route::get('edit-patient', function () {
    return view('admin.patient.edit-patient');
});
Route::get('patient-details', function () {
    return view('admin.patient.patient-details');
});
Route::get('create-patient', function () {
    return view('admin.patient.create-patient');
});
Route::get('locations', function () {
    return view('admin.locations.locations');
});
Route::get('services', function () {
    return view('admin.services.services');
});
Route::get('specializations', function () {
    return view('admin.specializations.specializations');
});
Route::get('assetss', function () {
    return view('admin.assets.assets');
});
Route::get('activities', function () {
    return view('admin.activities.activities');
});
Route::get('messages', function () {
    return view('admin.messages.messages');
});
Route::get('staffs', function () {
    return view('admin.staffs.staffs');
});
Route::get('hrm-departments', function () {
    return view('admin.departments.hrm-departments');
});
Route::get('designation', function () {
    return view('admin.designations.designation');
});
Route::get('attendance', function () {
    return view('admin.attendance.attendance');
});
Route::get('leaves', function () {
    return view('admin.leaves.leaves');
});
Route::get('leave-type', function () {
    return view('admin.leaves.leave-type');
});
Route::get('holidays', function () {
    return view('admin.holidays.holidays');
});
Route::get('payroll', function () {
    return view('admin.payroll.payroll');
});
Route::get('payroll-2', function () {
    return view('admin.payroll.payroll-2');
});
Route::get('expenses', function () {
    return view('admin.expenses.expenses');
});
Route::get('expense-category', function () {
    return view('admin.expenses.expense-category');
});
Route::get('income', function () {
    return view('admin.income.income');
});
Route::get('invoices', function () {
    return view('admin.invoices.invoice');
});
Route::get('add-invoices', function () {
    return view('admin.invoices.add-invoices');
});
Route::get('edit-invoices', function () {
    return view('admin.invoices.edit-invoices');
});
Route::get('invoices-details', function () {
    return view('admin.invoices.invoices-details');
});
Route::get('payments', function () {
    return view('admin.payments.payments');
});
Route::get('transactions', function () {
    return view('admin.transactions.transactions');
});
Route::get('roles-and-permissions', function () {
    return view('admin.roles.roles-and-permissions');
});
Route::get('permissions', function () {
    return view('admin.roles.permissions');
});
Route::get('delete-account-request', function () {
    return view('admin.roles.delete-account-request');
});
Route::get('income-report', function () {
    return view('admin.reports.income-report');
});
Route::get('expense-report', function () {
    return view('admin.reports.expense-report');
});
Route::get('profit-and-loss', function () {
    return view('admin.reports.profit-and-loss');
});
Route::get('appointment-report', function () {
    return view('admin.reports.appointment-report');
});
Route::get('patient-report', function () {
    return view('admin.reports.patient-report');
});
Route::get('blogs', function () {
    return view('admin.blogs.blogs');
});
Route::get('add-blog', function () {
    return view('admin.blogs.add-blog');
});
Route::get('edit-blog', function () {
    return view('admin.blogs.edit-blog');
});
Route::get('blog-details', function () {
    return view('admin.blogs.blog-details');
});
Route::get('blog-categories', function () {
    return view('admin.blogs.blog-categories');
});
Route::get('blog-comments', function () {
    return view('admin.blogs.blog-comments');
});
Route::get('countries', function () {
    return view('admin.countries.countries');
});
Route::get('states', function () {
    return view('admin.countries.states');
});
Route::get('cities', function () {
    return view('admin.countries.cities');
});
Route::get('testimonials', function () {
    return view('admin.testimonials.testimonials');
});
Route::get('faq', function () {
    return view('admin.faq.faq');
});
Route::get('contact-messages', function () {
    return view('admin.messages.contact-messages');
});
Route::get('tickets', function () {
    return view('admin.tickets.tickets');
});
Route::get('ticket-details', function () {
    return view('admin.tickets.ticket-details');
});
Route::get('announcements', function () {
    return view('admin.announcements.announcements');
});
Route::get('newsletters', function () {
    return view('admin.newsletters.newsletters');
});
Route::get('privacy-policy', function () {
    return view('admin.terms.privacy-policy');
});
Route::get('terms-and-conditions', function () {
    return view('admin.terms.terms-and-conditions');
});
Route::get('profile-settings', function () {
    return view('admin.settings.account.profile-settings');
});
Route::get('security-settings', function () {
    return view('admin.settings.account.security-settings');
});
Route::get('notifications-settings', function () {
    return view('admin.settings.account.notifications-settings');
});
Route::get('integrations-settings', function () {
    return view('admin.settings.account.integrations-settings');
});
Route::get('organization-settings', function () {
    return view('admin.settings.web.organization-settings');
});
Route::get('localization-settings', function () {
    return view('admin.settings.web.localization-settings');
});
Route::get('prefixes-settings', function () {
    return view('admin.settings.web.prefixes-settings');
});
Route::get('seo-setup-settings', function () {
    return view('admin.settings.web.seo-setup-settings');
});
Route::get('language-settings', function () {
    return view('admin.settings.web.language-settings');
});
Route::get('appointment-settings', function () {
    return view('admin.settings.clinic.appointment-settings');
});
Route::get('working-hours-settings', function () {
    return view('admin.settings.clinic.working-hours-settings');
});
Route::get('cancellation-reason-settings', function () {
    return view('admin.settings.clinic.cancellation-reason-settings');
});
Route::get('invoice-settings', function () {
    return view('admin.settings.apps.invoice-settings');
});
Route::get('invoice-templates-settings', function () {
    return view('admin.settings.apps.invoice-templates-settings');
});
Route::get('signatures-settings', function () {
    return view('admin.settings.apps.signatures-settings');
});
Route::get('email-settings', function () {
    return view('admin.settings.systeme.email-settings');
});
Route::get('email-templates-settings', function () {
    return view('admin.settings.systeme.email-templates-settings');
});
Route::get('sms-gateways-settings', function () {
    return view('admin.settings.systeme.sms-gateways-settings');
});
Route::get('sms-templates-settings', function () {
    return view('admin.settings.systeme.sms-templates-settings');
});
Route::get('payment-methods-settings', function () {
    return view('admin.settings.payment.payment-methods-settings');
});
Route::get('bank-accounts-settings', function () {
    return view('admin.settings.payment.bank-accounts-settings');
});
Route::get('tax-rates-settings', function () {
    return view('admin.settings.payment.tax-rates-settings');
});
Route::get('currencies-settings', function () {
    return view('admin.settings.payment.currencies-settings');
});
