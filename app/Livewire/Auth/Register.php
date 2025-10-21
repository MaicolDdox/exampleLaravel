<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $first_name = '';

    public string $middle_name = '';

    public string $first_surname = '';

    public string $middle_surname = '';

    public string $rol = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public string $type_document = '';

    public string $number_document = '';

    public string $number_phone = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['string', 'max:255'],
            'first_surname' => ['required', 'string', 'max:255'],
            'middle_surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'type_document' => ['required', 'string', 'max:255'],
            'number_document' => ['required', 'string', 'max:255'],
            'number_phone' => ['required', 'string', 'max:255'],
        ]);

        event(new Registered(($user = User::create($validated))));

        $validated['rol'] = 'user_payer';

        $user->assingRole('user_payer');

        Auth::login($user);

        Session::regenerate();

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}
