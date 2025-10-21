<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" wire:submit="register" class="flex flex-col gap-6">
        <!-- First Name -->
        <flux:input
            wire:model="first_name"
            :label="__('Primer Nombre')"
            type="text"
            required
            autofocus
            autocomplete="primer nombre"
            :placeholder="__('Primer nombre')"
        />

        <!-- middle Name -->
        <flux:input
            wire:model="middle_name"
            :label="__('Segundo Nombre')"
            type="text"
            required
            autofocus
            autocomplete="segundo nombre"
            :placeholder="__('Segundo nombre')"
        />

        <!-- First Surname -->
        <flux:input
            wire:model="first_surname"
            :label="__('Primer Apellido')"
            type="text"
            required
            autofocus
            autocomplete="primer apellido"
            :placeholder="__('Primer apellido')"
        />

        <!-- middle Surname -->
        <flux:input
            wire:model="middle_surname"
            :label="__('Segundo Apellido')"
            type="text"
            required
            autofocus
            autocomplete="segundo apellido"
            :placeholder="__('Segundo apellido')"
        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
            viewable
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
            viewable
        />

        {{-- Select para el tipo de documento --}}
        <flux:label> Tipo De Documento</flux:label>
        <flux:select wire:model="type_document" placeholder="Tipo De Documento...">
            <flux:select.option value="tarjeta_identidad">Tarjeta Identidad</flux:select.option>
            <flux:select.option value="cedula_ciudadana">Cedula Ciudadana</flux:select.option>
            <flux:select.option value="registro_civil">Registro Civil</flux:select.option>
            <flux:select.option value="pasaporte">Pasaporte</flux:select.option>
            <flux:select.option value="cedula_extrangera">Cedula Extrangera</flux:select.option>
        </flux:select>

        <!-- numero de documento -->
        <flux:input
            wire:model="number_document"
            :label="__('Numero De Documento')"
            type="number"
            required
            autofocus
            :placeholder="__('Numero de documento')"
        />

        <!-- numero de celular -->
        <flux:input
            wire:model="number_phone"
            :label="__('Numero De Celular')"
            type="number"
            required
            autofocus
            :placeholder="__('Numero de celular')"
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        <span>{{ __('Already have an account?') }}</span>
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div>
