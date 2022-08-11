@extends('layouts.master')

@section('title')
{{ __('sentence.New Appointment') }}
@endsection

@section('content')

<div class="row justify-content-center">
   <div class="col-md-10">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nouveau Rendez-vous</h6>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-4 col-sm-12">
                  <div class="form-group">
                     <label for="patient_name">{{ __('sentence.Patient') }} </label>
                     <select class="form-control patient_name multiselect-doctorino"  id="patient_name">
                        <option value="0">Sélectionnez un patient</option>
                        @foreach($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->name }} (ID : {{ $patient->id }})</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="rdvdate">{{ __('sentence.Date') }}</label>
                     <input type="text" class="form-control target" readonly="readonly" id="rdvdate">
                     <small id="emailHelp" class="form-text text-muted">Sélectionnez la date pour voir les plages horaires disponibles</small>

                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sms">
                    <label class="form-check-label" for="sms">
                    Avertir le patient par SMS
                    </label>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12">
                  <label for="date">Créneau horaire disponible</label> 
                  <hr>
                  <div class="row mb-2 myorders"></div>
                  <div class="alert alert-danger text-center" role="alert" id="help-block">
                     <img src="{{ asset('img/calendar.png') }}"><br>
                     <b>Aucune date sélectionnée</b>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Appointment Modal-->
<div class="modal fade" id="RDVModalSubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ __('sentence.Are you sure of the date') }}</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
               <p><b>{{ __('sentence.Patient') }} :</b> <span id="patient_name"></span></p>
               <p><b>{{ __('sentence.Date') }} :</b> <label class="badge badge-primary-soft" id="rdv_date"></label></p>
               <p><b>{{ __('sentence.Time Slot') }} :</b> <label class="badge badge-primary-soft" id="rdv_time"></span></label></p>
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __('sentence.Cancel') }}</button>
            <a class="btn btn-primary text-white"
               onclick="event.preventDefault();
               document.getElementById('rdv-form').submit();">{{ __('sentence.Save') }}</a>
            <form id="rdv-form" action="{{ route('appointment.store') }}" method="POST" class="d-none">
               <input type="hidden" name="patient" id="patient_input">
               <input type="hidden" name="rdv_time_date" id="rdv_date_input">
               <input type="hidden" name="rdv_time_start" id="rdv_time_start_input">
               <input type="hidden" name="rdv_time_end" id="rdv_time_end_input">
               <input type="hidden" name="send_sms" id="send_sms">
               @csrf
            </form>
         </div>
      </div>
   </div>
</div>
@endsection

@section('header')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('footer')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.multiselect-doctorino').select2();
});
</script>
@endsection