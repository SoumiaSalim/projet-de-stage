@extends('layouts.master')

@section('title')
{{ __('sentence.New Patient') }}
@endsection

@section('content')

    <div class="row justify-content-center">
                  
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Nouveau patient</h6>
                </div>
                <div class="card-body">
                 <form method="post" action="{{ route('patient.create') }}">
                    <div class="form-group row">
                      <label for="Name" class="col-sm-3 col-form-label">Nom et prénom*<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="Name" name="name">
                        {{ csrf_field() }}
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Email" class="col-sm-3 col-form-label">Adresse email*<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="Email" name="email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="birthday" class="col-sm-3 col-form-label">Date d'anniversaire*<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" id="Birthday" name="birthday" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Phone" class="col-sm-3 col-form-label">Téléphone</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="Phone" name="phone">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Gender" class="col-sm-3 col-form-label">Genre<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <select class="form-control" name="gender" id="Gender">
                          <option value="Male">Masculin</option>
                          <option value="Female">Féminin</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Blood" class="col-sm-3 col-form-label">Groupe sanguin</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="blood" id="Blood">
                                            <option value="Unknown">Inconnue</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Address" class="col-sm-3 col-form-label">Adresse</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="Address" name="adress">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="weight" class="col-sm-3 col-form-label">Poids du patient</label>
                      <div class="col-sm-9">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="weight" name="weight">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Kg</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="Height" class="col-sm-3 col-form-label">Taille du patient</label>
                      <div class="col-sm-9">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="Height" name="height">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Cm</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            
        </div>

    </div>

@endsection

@section('header')

@endsection

@section('footer')

@endsection
