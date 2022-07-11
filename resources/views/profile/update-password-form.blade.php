{{-- <x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section> --}}


@extends('frontend.frontend_master')
@section('content')
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-8  rounded  ">
              <div class="card p-3">
                <div class="contact_form_container">
                    <h3 class="contact_form_title text-center">User Password Update</div>

                    <form method="POST" action="{{ route('userpassword.update') }}">
                        @csrf
                            <div class="form-group">
                              <label for="">Cureent Password</label>
                              <input type="password" name="oldpassword" id="cureent_password" class="form-control" placeholder="Enter Old Password">
                              @error('oldpassword')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="">New Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter new Password">
                                @error('password')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="">Confirm  Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter Confirm Password" required="">
                                @error('password')
                                <div class="alert text-danger">{{ $message }}</div>
                             @enderror
                             
                              </div>


                        <div class="contact_form_button">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
              </div>

                </div>
            <div class="col-md-4" >
                <div class="card ">
                    <img src="{{ asset('backend/logo/logo.png') }}" alt="" class="card-img-top rounded" style="height: 90px; width:90px; margin-left:34%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ Auth::user()->name }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ route('userpassword.change') }}">Password Change</a></li>
                            <li class="list-group-item">line 1</li>
                            <li class="list-group-item">line 1</li>
                        </ul>
                        <div class="card-body">
                            <a href="{{ route('logout') }}" class="btn btn-sm btn-block btn-danger">Logout</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection


