<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="icNumber" :value="__('IC')" />
            <x-text-input id="icNumber" name="icNumber" type="text" class="mt-1 block w-full" :value="old('icNumber', $user->icNumber)" required autofocus autocomplete="icNumber" />
            <x-input-error class="mt-2" :messages="$errors->get('icNumber')" />
        </div>

        <div>
            <x-input-label for="phone" :value="__('Telefon')" />
            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" required autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div>
            <x-input-label for="currentAddress" :value="__('Alamat')" />
            <x-text-input id="currentAddress" name="currentAddress" type="text" class="mt-1 block w-full" :value="old('currentAddress', $user->currentAddress)" required autofocus autocomplete="currentAddress" />
            <x-input-error class="mt-2" :messages="$errors->get('currentAddress')" />
        </div>

        <div>
            <x-input-label for="jobPhone" :value="__('No. Tel. Kerja')" />
            <x-text-input id="jobPhone" name="jobPhone" type="text" class="mt-1 block w-full" :value="old('jobPhone', $user->jobPhone)" required autofocus autocomplete="jobPhone" />
            <x-input-error class="mt-2" :messages="$errors->get('jobPhone')" />
        </div>

        <div>
            <x-input-label for="jobAddress" :value="__('Alamat Kerja')" />
            <x-text-input id="jobAddress" name="jobAddress" type="text" class="mt-1 block w-full" :value="old('jobAddress', $user->jobAddress)" required autofocus autocomplete="jobAddress" />
            <x-input-error class="mt-2" :messages="$errors->get('jobAddress')" />
        </div>

        <div>
            <x-input-label for="job" :value="__('Pekerjaan')" />
            <x-text-input id="job" name="job" type="text" class="mt-1 block w-full" :value="old('job', $user->job)" required autofocus autocomplete="job" />
            <x-input-error class="mt-2" :messages="$errors->get('job')" />
        </div>
        
        <div>
            <x-input-label for="education" :value="__('Taraf Pendidikan')" />
            <x-text-input id="education" name="education" type="text" class="mt-1 block w-full" :value="old('education', $user->education)" required autofocus autocomplete="education" />
            <x-input-error class="mt-2" :messages="$errors->get('education')" />
        </div>

        <div>
            <x-input-label for="nationality" :value="__('Warganegara')" />
            <x-text-input id="nationality" name="nationality" type="text" class="mt-1 block w-full" :value="old('nationality', $user->nationality)" required autofocus autocomplete="nationality" />
            <x-input-error class="mt-2" :messages="$errors->get('nationality')" />
        </div>

        <div>
            <x-input-label for="race" :value="__('Bangsa')" />
            <x-text-input id="race" name="race" type="text" class="mt-1 block w-full" :value="old('race', $user->race)" required autofocus autocomplete="race" />
            <x-input-error class="mt-2" :messages="$errors->get('race')" />
        </div>

        <div>
            <x-input-label for="maritalStatus" :value="__('Status')" />
            <x-text-input id="maritalStatus" name="maritalStatus" type="text" class="mt-1 block w-full" :value="old('maritalStatus', $user->maritalStatus)" required autofocus autocomplete="maritalStatus" />
            <x-input-error class="mt-2" :messages="$errors->get('maritalStatus')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
