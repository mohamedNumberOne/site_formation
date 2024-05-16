<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- 1 --}}
        <div class="row mt-sm-4">

            <!-- Name -->
            <div class="col-md-4 col-sm-12">
                <x-input-label for="name" :value="__('Nom de famille*')" class="mt-sm-1" />
                <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name"
                    required autofocus autocomplete="name" minlength="3" maxlength="30"   value="{{ old('name') }}" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- prénom  -->
            <div class="col-md-4  col-sm-12 ">
                <x-input-label for="pnom" :value="__('Prénom*')" class="mt-sm-1" />
                <x-text-input wire:model="pnom" id="pnom" class="block mt-1 w-full" type="text" name="pnom"  value="{{ old('pnom') }}" 
                    required autocomplete="pnom" minlength="3" maxlength="30" />
                <x-input-error :messages="$errors->get('pnom')" class="mt-2" />
            </div>


            <!-- activité  -->
            <div class="col-md-4  col-sm-12 ">
                <x-input-label for="activite" :value="__('Activité*')" class="mt-sm-1" />
                <select name="activite" id="activite" required   value="{{ old('activite') }}" 
                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm
                        w-100 mt-1">
                    <option value=""></option>
                    @foreach ($activities as $activity)
                        <option value="{{ $activity->id }}">
                            {{ $activity->name }}  
                        </option>
                    @endforeach

                </select>


                <x-input-error :messages="$errors->get('activite')" class="mt-2" />
            </div>

        </div>



        {{-- 2 --}}
        <div class="row mt-sm-4">

            <!-- wilaya -->
            <div class="col-md-4  col-sm-12 ">
                <x-input-label for="wilaya" :value="__('Wilaya*')" class="mt-sm-1" />

                <select name="wilaya" id="wilaya"   value="{{ old('wilaya') }}" 
                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-100">
                    <option value=""></option>
                    @foreach ($wilayas as $wilaya)
                        <option value="{{ $wilaya->id }}">
                            {{ $wilaya->name }} -
                            {{ $wilaya->code_w }}
                        </option>
                    @endforeach

                </select>

                <x-input-error :messages="$errors->get('wilaya')" class="mt-2" />
            </div>


            <!-- tlf  -->
            <div class="col-md-4  col-sm-12 ">
                <x-input-label for="tlf" :value="__('Téléphone')" class="mt-sm-1" />
                <x-text-input wire:model="tlf" id="tlf" class="block mt-1 w-full" type="number" name="tlf"  value="{{ old('tlf') }}" 
                    required autocomplete="tlf" placeholder="0..." />
                <x-input-error :messages="$errors->get('tlf')" class="mt-2" />
            </div>


            <!-- Formation  -->
            <div class="col-md-4  col-sm-12 ">
                <x-input-label for="formation" :value="__('Formation*')" class="mt-sm-1" />
                <select name="formation" id="formation" required  value="{{ old('formation') }}" 
                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm
                                    w-100 mt-1">
                    <option value=""></option>
                    @foreach ($formations as $formation)
                    <option value="{{ $formation -> id }}"> {{ $formation -> name }} </option>
                    @endforeach
                     
                </select>
                <x-input-error :messages="$errors->get('formation')" class="mt-2" />
            </div>

        </div>




        {{-- 4 --}}
        <div class="row mt-sm-4 ">

            <!-- Email Address 3 -->
            <div class="col-md-4 col-sm-12">
                <x-input-label for="email" :value="__('Email*')" class="mt-sm-1" />
                <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"  value="{{ old('email') }}" 
                    required autocomplete="username" minlength="5" maxlength="70" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="col-md-4 col-sm-12">
                <x-input-label for="password" :value="__('Mot de passe*')" class="mt-sm-1" />

                <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password"
                    name="password" required autocomplete="new-password" minlength="6"      />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="col-md-4 col-sm-12">
                <x-input-label for="password_confirmation" :value="__('Confirmation:Mot de passe*')" class="mt-sm-1" />
                <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                    type="password" name="password_confirmation" required autocomplete="new-password"
                    minlength="6"     />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Se connecter') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('S\'inscrire') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
