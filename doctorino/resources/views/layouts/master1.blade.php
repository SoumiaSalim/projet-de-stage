<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="Digit93Team">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
      <title>octorino - @yield('title') </title>
      <!-- Custom styles for this template-->
    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/gijgo.min.css') }}" rel="stylesheet">
    <script>
             "use strict";
               const SITE_URL              = "{{ url('/') }}";             
        </script>
   @yield('header')
   </head>
   <body id="page-top">
      <div id="app">
         <!-- Page Wrapper -->
         <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
               <!-- Sidebar - Brand -->
               <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                  <div class="sidebar-brand-icon rotate-n-15">
                     <i class="fas fa-user-md"></i>
                  </div>
                  <div class="sidebar-brand-text mx-3">Doctorino <sup>3.0</sup></div>
               </a>
               <!-- Divider -->
               <hr class="sidebar-divider my-0">
               <!-- Nav Item - Dashboard -->
               <li class="nav-item active">
                  <a class="nav-link" href="{{ route('home') }}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>{{ __('sentence.Dashboard') }}</span></a>
               </li>
               <!-- Divider -->
               <hr class="sidebar-divider">
               <!-- Heading -->
               <div class="sidebar-heading">
                  {{ __('sentence.Patients') }}
               </div>
               <!-- Nav Item - Pages Collapse Menu -->
               <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePatient" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-users"></i>
                  <span>{{ __('sentence.Patients') }}</span>
                  </a>
                  <div id="collapsePatient" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('patient.create') }}">{{ __('sentence.New Patient') }}</a>
                        <a class="collapse-item" href="{{ route('patient.all') }}">{{ __('sentence.All Patients') }}</a>
                     </div>
                  </div>
               </li>
               <!-- Divider -->
               <hr class="sidebar-divider">
               <!-- Heading -->
               <div class="sidebar-heading">
                  {{ __('sentence.Appointment') }}
               </div>
               <!-- Nav Item - Pages Collapse Menu -->
               <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAppointment" aria-expanded="true" aria-controls="collapseAppointment">
                  <i class="fas fa-fw fa-calendar-plus"></i>
                  <span>{{ __('sentence.Appointment') }}</span>
                  </a>
                  <div id="collapseAppointment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('appointment.create') }}">{{ __('sentence.New Appointment') }}</a>
                        <a class="collapse-item" href="{{ route('appointment.pending') }}">{{ __('sentence.Pending Appointments') }}</a>
                        <a class="collapse-item" href="{{ route('appointment.all') }}">{{ __('sentence.All Appointments') }}</a>
                     </div>
                  </div>
               </li>
               <!-- Divider -->
               <hr class="sidebar-divider">
               <!-- Heading -->
               <div class="sidebar-heading">
                  {{ __('sentence.Prescriptions') }}
               </div>
               <!-- Nav Item - Pages Collapse Menu -->
               <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-prescription"></i>
                  <span>{{ __('sentence.Prescriptions') }}</span>
                  </a>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('prescription.create') }}">{{ __('sentence.New Prescription') }}</a>
                        <a class="collapse-item" href="{{ route('prescription.all') }}">{{ __('sentence.All Prescriptions') }}</a>
                     </div>
                  </div>
               </li>
               <!-- Nav Item - Pages Collapse Menu -->
               <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                  <i class="fas fa-fw fa-pills"></i>
                  <span>{{ __('sentence.Drugs') }}</span>
                  </a>
                  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('drug.create') }}">{{ __('sentence.Add Drug') }}</a>
                        <a class="collapse-item" href="{{ route('drug.all') }}">{{ __('sentence.All Drugs') }}</a>
                     </div>
                  </div>
               </li>
               <!-- Nav Item - Pages Collapse Menu -->
               <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTests" aria-expanded="true" aria-controls="collapseTests">
                  <i class="fas fa-fw fa-heartbeat"></i>
                  <span>{{ __('sentence.Tests') }}</span>
                  </a>
                  <div id="collapseTests" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('test.create') }}">{{ __('sentence.Add Test') }}</a>
                        <a class="collapse-item" href="{{ route('test.all') }}">{{ __('sentence.All Tests') }}</a>
                     </div>
                  </div>
               </li>
               <!-- Divider -->
               <hr class="sidebar-divider">
               <!-- Heading -->
               <div class="sidebar-heading">
                  {{ __('sentence.Billing') }}
               </div>
               <!-- Nav Item - Utilities Collapse Menu -->
               <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                  <i class="fas fa-fw fa-dollar-sign"></i>
                  <span>{{ __('sentence.Billing') }}</span>
                  </a>
                  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('billing.create') }}">{{ __('sentence.Create Invoice') }}</a>
                        <a class="collapse-item" href="{{ route('billing.all') }}">{{ __('sentence.Billing List') }}</a>
                     </div>
                  </div>
               </li>
               <!-- Divider -->
               <hr class="sidebar-divider">
               <!-- Heading -->
               <div class="sidebar-heading">
                  {{ __('sentence.Settings') }}
               </div>
               <!-- Nav Item - Pages Collapse Menu -->
               <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
                  <i class="fas fa-fw fa-cogs"></i>
                  <span>{{ __('sentence.Settings') }}</span>
                  </a>
                  <div id="collapseSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('doctorino_settings.edit') }}">{{ __('sentence.Doctorino Settings') }}</a>
                        <a class="collapse-item" href="{{ route('prescription_settings.edit') }}">{{ __('sentence.Prescription Settings') }}</a>
                        <a class="collapse-item" href="{{ route('sms_settings.edit') }}">{{ __('sentence.SMS Gateway Setup') }}</a>
                     </div>
                  </div>
               </li>
               <!-- Divider -->
               <hr class="sidebar-divider d-none d-md-block">
               <!-- Sidebar Toggler (Sidebar) -->
               <div class="text-center d-none d-md-inline">
                  <button class="rounded-circle border-0" id="sidebarToggle"></button>
               </div>
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
               <!-- Main Content -->
               <div id="content">
                  <!-- Topbar -->
                  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                     <!-- Sidebar Toggle (Topbar) -->
                     <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                     <i class="fa fa-bars"></i>
                     </button>
                     <div class="dropdown shortcut-menu mr-4">
                       <button type="button" class="btn btn-primary brd-20 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                         Create as new</button>
                       <div class="dropdown-menu shadow">
                              <a class="dropdown-item" href="{{ route('prescription.create') }}">Prescription</a>
                              <a class="dropdown-item" href="{{ route('patient.create') }}">Patient</a>
                              <a class="dropdown-item" href="{{ route('appointment.create') }}">Appointment</a>
                              <a class="dropdown-item" href="{{ route('billing.create') }}">Invoice</a>
                              <a class="dropdown-item" href="{{ route('drug.create') }}">Drug</a>
                              <a class="dropdown-item" href="{{ route('test.create') }}">Diagnosis Test</a>
                       </div>
                     </div>
                     <!-- Topbar Navbar -->
                     <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                           <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                           <img class="img-profile rounded-circle" src="{{ asset('img/favicon.png') }}">
                           </a>
                           <!-- Dropdown - User Information -->
                           <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="{{ route('doctorino_settings.edit') }}">
                              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                              {{ __('sentence.Settings') }}
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              {{ __('sentence.Logout') }}
                              </a>
                           </div>
                        </li>
                     </ul>
                  </nav>
                  <!-- End of Topbar -->
                  <!-- Begin Page Content -->
                  <div class="container-fluid">

                        <div class="row">
                           <div class="col">
                              @if ($errors->any())
                              <div class="alert alert-danger">
                                 <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                 </ul>
                              </div>
                              @endif
                           </div>
                        </div>
                     @yield('content')
                     <!-- Page Heading -->
                  </div>
                  <!-- /.container-fluid -->
               </div>
               <!-- End of Main Content -->
               <!-- Footer -->
               <footer class="sticky-footer bg-white">
                  <div class="container my-auto">
                     <div class="copyright my-auto">
                        <span>Copyright &copy; Created by <a href="https://getdoctorino.papasimo.online/"> Digit94Team</a> {{ date('Y') }}</span>
                        <span style="float: right;">Version 2.0</span>
                     </div>
                  </div>
               </footer>
               <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
         </div>
         <!-- End of Page Wrapper -->
      </div>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{ __('sentence.Ready to Leave') }}</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">{{ __('sentence.Ready to Leave Msg') }}</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __('sentence.Cancel') }}</button>
                  <a class="btn btn-primary" href="{{ route('logout') }}" 
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('sentence.Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                  </form>
               </div>
            </div>
         </div>
      </div>


      <!-- Delete Modal-->
      <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{ __('sentence.Delete') }}</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">{{ __('sentence.Delete Alert') }}</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __('sentence.Cancel') }}</button>
                  <a class="btn btn-danger" id="delete_link">{{ __('sentence.Delete') }}</a>
               </div>
            </div>
         </div>
      </div>
      
   <script src="{{ asset('dashboard/js/vue.js') }}"></script>
   <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>

      <!-- Bootstrap core JavaScript-->
   <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

      <script src="{{ asset('dashboard/js/gijgo.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('dashboard/js/jquery.repeatable.js') }}" type="text/javascript"></script>
       <script src="{{ asset('dashboard/js/bootstrap-notify.min.js') }}"></script>

      <script src="{{ asset('js/custom.js') }}"></script>

            @if (session('success'))
                <script type="text/javascript">
                    $.notify({
                                    message: "<?php echo session('success'); ?>"
                                },{
                                    type: "success",
                                    delay:5000,                                    
                                });
                </script>
            @endif

            @if (session('danger'))
            <script type="text/javascript">
                    $.notify({
                                    message: "<?php echo session('danger'); ?>"
                                },{
                                    type: "danger",
                                    delay:5000,                                    
                                });
                </script>
            @endif
            
            @if (session('warning'))
                  <script type="text/javascript">
                    $.notify({
                                    message: "<?php echo session('warning'); ?>"
                                },{
                                    type: "warning",
                                    delay:5000,                                    
                                });
                </script>
            @endif

      @yield('footer')
   </body>
</html>