<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\TypeHandicap' => 'App\Policies\TypeHandicapPolicy',
        'App\Models\Service' => 'App\Policies\ServicePolicy',
        'App\Models\CouvertureMedical' => 'App\Policies\CouvertureMedicalPolicy',
        'App\Models\Employe' => 'App\Policies\EmployePolicy',
        'App\Models\NiveauScolaire' => 'App\Policies\NiveauScolairePolicy',
        'App\Models\EtatCivil' => 'App\Policies\EtatCivilPolicy',
        'App\Models\DossierPatient' => 'App\Policies\DossierPatientPolicy',
        'App\Models\Tuteur' => 'App\Policies\TuteurPolicy',
        'App\Models\Patient' => 'App\Policies\PatientPolicy',
        'App\Models\Consultation' => 'App\Policies\ConsultationPolicy',
        'App\Models\RendezVous' => 'App\Policies\RendezVousPolicy',

        

        



    ];

    /**
     * Register any authentication / authorization services.
     */
  

    public function boot()
    {
       // 
    }
}
