<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wilaya;
use App\Models\Activity;
use App\Models\Formation;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $wilayas = Wilaya::all() ;
        $activities = Activity::all() ;
        $formations = Formation::all() ;
        return view('auth.register'  , compact( 'wilayas' , 'formations' , 'activities' ) );
    }

     
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
       $validate =  $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'pnom' => ['required', 'string', 'max:255'],
            'activite' => ['required', 'numeric', 'max:50' , 'exists:activities,id' ],
            'wilaya' => ['required', 'numeric', 'max:255' , 'exists:wilayas,id' ],
            'tlf' => ['required', 'regex:/^[0-9]{9,13}$/' ],
            'formation' => ['required', 'numeric', 'max:255' , 'exists:formations,id' ],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);



        $user = User::create([
            'name' => $request->name,
            'pnom' => $request->pnom,
            'activity_id' => $request->activite,
            'wilaya_id' => $request->wilaya,
            'tlf' => $request->tlf,
            'formation_id' => $request->formation,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

       
            event(new Registered($user));

            Auth::login($user);
    
            return redirect(route('dashboard', absolute: false));
       
       
    }
}
