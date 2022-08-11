@extends('layouts.master')

@section('title')
{{ __('sentence.All Tests') }}
@endsection

@section('content')


<div class="card shadow mb-4">
   <div class="card-header py-3">
      <div class="row">
         <div class="col-8">
            <h6 class="m-0 font-weight-bold text-primary w-75 p-2">Tous les tests de diagnostic</h6>
         </div>
         <div class="col-4">
            <a href="{{ route('test.create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Ajouter un nouveau test</a>
         </div>
      </div>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Nom du test</th>
                  <th>Description</th>
                  <th class="text-center">Utilisation totale</th>
                  <th class="text-center">Actions</th>
               </tr>
            </thead>
            <tbody>
               @foreach($tests as $test)
               <tr>
                  <td>{{ $test->id }}</td>
                  <td>{{ $test->test_name }}</td>
                  <td> {{ $test->comment }} </td>
                  <td align="center">{{ __('sentence.In Prescription') }} : {{ $test->Prescription->count() }} {{ __('sentence.time use') }}</td>
                  <td class="text-center">
                     <a href="{{ url('test/edit/'.$test->id) }}" class="btn btn-outline-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                     <a class="btn btn-outline-danger btn-circle btn-sm" data-toggle="modal" data-target="#DeleteModal" href="{{ url('test/delete/'.$test->id) }}"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection