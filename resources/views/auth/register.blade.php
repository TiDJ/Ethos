@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center backcolor">
        <div class="col-md-12">
            <h1>S'INSCRIRE</h1>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Nom -->
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right"></label>

                        <div class="col-md-8">
                            <input id="name" placeholder="Nom de compte*" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label text-md-right"></label>

                        <div class="col-md-8">
                            <input id="email" type="email" placeholder="Adresse Email*" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label text-md-right">

                        </label>

                        <div class="col-md-4">
                            <input id="password" placeholder="Mot de passe*" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>




                        <div class="col-md-4">
                            <input id="password-confirm" placeholder="Confirmation de mot de passe*" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bio" class="col-md-2 col-form-label text-md-right">

                        </label>
                        <div class="col-md-8">
                            <textarea id="bio" placeholder="Biographie" class="form-control" name="bio"></textarea>
                            @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                        <label for="main_name" class="col-md-2 col-form-label text-md-right"></label>

                        <div class="col-md-8">
                            <input id="main_name" placeholder="[Main] Nom du personnage principal*" type="text" class="form-control @error('main_name') is-invalid @enderror" name="main_name" value="{{ old('main_name') }}" required>

                            @error('main_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="main_class" class="col-md-2 col-form-label text-md-right"></label>
                        <div class="col-md-4">
                            <select class="form-control @error('main_class') is-invalid @enderror" name="main_class">
                                <option value="Mage">Mage</option>
                                <option value="Guerrier">Guerrier</option>
                                <option value="Chasseur">Chasseur</option>
                                <option value="Demoniste">Démoniste</option>
                                <option value="Druide">Druide</option>
                                <option value="Paladin">Paladin</option>
                                <option value="Pretre">Prêtre</option>
                                <option value="Voleur">Voleur</option>

                            </select>
                            @error('main_class')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <select class="form-control @error('main_role') is-invalid @enderror" name="main_role">
                                <option value="Heal">Heal</option>
                                <option value="Dps">Dps</option>
                                <option value="Tank">Tank</option>
                            </select>
                            @error('main_role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="reroll_name" class="col-md-2 col-form-label text-md-right"></label>

                        <div class="col-md-8">
                            <input type="text" placeholder="[Reroll] Nom du personnage secondaire" class="form-control @error('reroll_name') is-invalid @enderror" name="reroll_name" value="{{ old('reroll_name') }}">

                            @error('reroll_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="reroll_class" class="col-md-2 col-form-label text-md-right"></label>
                        <div class="col-md-4">
                            <select class="form-control @error('reroll_class') is-invalid @enderror" name="reroll_class" id="reroll_class">
                                <option value="Mage">Mage</option>
                                <option value="Guerrier">Guerrier</option>
                                <option value="Chasseur">Chasseur</option>
                                <option value="Demoniste">Démoniste</option>
                                <option value="Druide">Druide</option>
                                <option value="Paladin">Paladin</option>
                                <option value="Pretre">Prêtre</option>
                                <option value="Voleur">Voleur</option>
                            </select>
                            @error('reroll_class')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <select class="form-control @error('reroll_role') is-invalid @enderror" name="reroll_role" id="reroll_role">
                                <option value="Heal">Heal</option>
                                <option value="Dps">Dps</option>
                                <option value="Tank">Tank</option>
                            </select>
                            @error('reroll_role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-5">
                            <button type="submit" class="btn btn-primary">
                                S'enregistrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
