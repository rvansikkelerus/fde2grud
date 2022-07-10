@extends('layout')
@section('content')


    <div id='wrapper'>
        <div id='page' class='container'>
            <h1 class='has-text-weight-bold is-size-4'>Patiënt aanmelden</h1>

            <form method='POST' action="/registration">
                @csrf

                <div class='field'>
                    <label class='label' for='voornaam'>Voornaam</label>

                    <div class='control'>
                        <input
                            class='input @error('voornaam') is-danger @enderror'
                            type='text'
                            name='voornaam'
                            id='voornaam'
                            placeholder='bijv. Harold'
                            value='{{old('voornaam')}}'>

                        @error('voornaam')
                        <p class="help is-danger">{{$errors->first('voornaam')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='achternaam'>Achternaam</label>

                    <div class='control'>
                        <input
                            class='input @error('achternaam') is-danger @enderror'
                            type='text'
                            name='achternaam'
                            id='achternaam'
                            placeholder='bijv. Klaassen'
                            value='{{old('achternaam')}}'>

                        @error('achternaam')
                        <p class="help is-danger">{{$errors->first('achternaam')}}</p>
                        @enderror
                    </div>
                </div>


                <div class='field'>
                    <label class='label' for='geslacht'>Geslacht</label>

                    <div class='control'>
                        <input
                            class='input @error('geslacht') is-danger @enderror'
                            type='text'
                            name='geslacht'
                            id='geslacht'
                            placeholder='bijv. man'
                            value='{{old('geslacht')}}'>

                        @error('geslacht')
                        <p class="help is-danger">{{$errors->first('geslacht')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='postcode'>Postcode</label>

                    <div class='control'>
                        <input
                            class='input @error('postcode') is-danger @enderror'
                            type='text'
                            name='postcode'
                            id='postcode'
                            placeholder='bijv. 9000DC'
                            value='{{old('postcode')}}'>

                        @error('postcode')
                        <p class="help is-danger">{{$errors->first('postcode')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='adres'>Adres</label>

                    <div class='control'>
                        <input
                            class='input @error('adres') is-danger @enderror'
                            type='text'
                            name='adres'
                            id='adres'
                            placeholder='bijv. Pintelaan 1'
                            value='{{old('adres')}}'>

                        @error('adres')
                        <p class="help is-danger">{{$errors->first('adres')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='stad'>Stad</label>

                    <div class='control'>
                        <input
                            class='input @error('stad') is-danger @enderror'
                            type='text'
                            name='stad'
                            id='stad'
                            placeholder='bijv. Middelburg'
                            value='{{old('stad')}}'>

                        @error('stad')
                        <p class="help is-danger">{{$errors->first('stad')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='verwijzer'>Verwijzer</label>

                    <div class='control'>
                        <input
                            class='input @error('verwijzer') is-danger @enderror'
                            type='text'
                            name='verwijzer'
                            id='verwijzer'
                            placeholder=' bijv. Dr. Jakobsen'
                            value='{{old('verwijzer')}}'>

                        @error('verwijzer')
                        <p class="help is-danger">{{$errors->first('verwijzer')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='email'>E-mail</label>

                    <div class='control'>
                        <input
                            class='input @error('email') is-danger @enderror'
                            type='text'
                            name='email'
                            id='email'
                            placeholder='bijv. e-mail@adres.nl'
                            value='{{old('email')}}'>


                        @error('email')
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field is-grouped'>
                    <div class="control">
                        <button class='button is-link' type='submit'>Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
