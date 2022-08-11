<div class="left-sidebar">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                      
                    </span>
                    <span>
                        <img src="<?php echo e(asset('assets/images/users/favicon.PNG')); ?>" alt="logo-large" class="logo-lg logo-light">
                        
                    </span>
                </a>
            </div>
            <div class="sidebar-user-pro media border-end">                    
                <div class="position-relative mx-auto">
                    <img src="<?php echo e(asset('assets/images/users/favicon.PNG')); ?>" alt="user" class="rounded-circle thumb-md">
                    <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                </div>
                <div class="media-body ms-2 user-detail align-self-center">
                    <h5 class="font-14 m-0 fw-bold">Doctor Cabinet </h5>  
                    <p class="opacity-50 mb-0">Doctor.Cabinet@exemple.com</p>          
                </div>                    
            </div>
            <div class="border-end">
                <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab" aria-selected="true">P<span>rincipal</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Extra" role="tab" aria-selected="false">E<span>n plus</span></a>
                    </li>
                </ul>
            </div>
            <!-- Tab panes -->
    
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <div class="menu-body navbar-vertical">
                    <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                        <!-- Navigation -->
                        <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                            <!-- Divider -->
              
                            <!-- Nav Item - Dashboard -->
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>tableau de bord</span></a>
                            </li>                
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAnalytics">
                                    <i class="ti ti-stack menu-icon"></i>
                                    <span> Patients</span>
                                </a>
                                <div class="collapse " id="sidebarAnalytics">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="<?php echo e(url('patient/create')); ?>" class="nav-link ">Nouveaux patients</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="<?php echo e(url('patient/all')); ?>" class="nav-link ">Tous les patients</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAnalytics-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCrypto">
                                    <i class="ti ti-currency-bitcoin menu-icon"></i>
                                    <span>Rendez-vous</span>
                                </a>
                                <div class="collapse " id="sidebarCrypto">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('appointment/create')); ?>">Nouveaux Rendez-vous</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('appointment/pending')); ?>">En attente de Rendez-vous</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('appointment/all')); ?>">Tous les Rendez-vous</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarCrypto-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProjects">
                                    <i class="ti ti-brand-asana menu-icon"></i>
                                    <span>Ordonnances</span>
                                </a>
                                <div class="collapse " id="sidebarProjects">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('prescription/create')); ?>">Nouveaux Ordonnances</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('prescription/all')); ?>">Tous les Ordonnances</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                         
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarProjects-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEcommerce">
                                    <i class="ti ti-shopping-cart menu-icon"></i>
                                    <span>Médicaments</span>
                                </a>
                                <div class="collapse " id="sidebarEcommerce">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('drug/create')); ?>">Ajouter un médicaments</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('drug/all')); ?>">Tous les médicaments</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEcommerce-->
                            </li><!--end nav-item-->

                           

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmail">
                                    <i class="ti ti-parachute menu-icon"></i>
                                    <span>Essais de diagnostic</span>
                                </a>
                                <div class="collapse " id="sidebarEmail">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('test/create')); ?>">Ajouter de nouveaux tests</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('test/all')); ?>">Tous les tests de diagnostic</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmail-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                            <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmail">
                                    <i class="ti ti-mail menu-icon"></i>
                                    <span>Facturation</span>
                                </a>
                                <div class="collapse " id="sidebarEmail">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('billing/create')); ?>">Créer une facture</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('billing/all')); ?>">Liste de paiement</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmail-->
                            </li><!--end nav-item-->

                           
                            </li><!--end nav-item-->
                            
                            <li class="nav-item">
                                
                                <div class="collapse " id="sidebarElements">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                         
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                         
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                         
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->                                   
                                        <li class="nav-item">
                                       
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->                                   
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->   
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->                               
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarElements-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                
                                <div class="collapse " id="sidebarAdvancedUI">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                    
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->                                  
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAdvancedUI-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarForms">
                                    <i class="ti ti-forms menu-icon"></i>
                                    <span>Paramètres</span>
                                </a>
                                <div class="collapse " id="sidebarForms">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('settings/doctorino_settings')); ?>">Paramètres du médecin</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('settings/prescription_settings')); ?>">Paramètres d'ordonnance</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('settings/sms_settings')); ?>">Configuration de la passerelle SMS</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarForms-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                               
                                <div class="collapse " id="sidebarCharts">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarCharts-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                
                                <div class="collapse " id="sidebarTables">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarTables-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                               
                                <div class="collapse " id="sidebarIcons">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarIcons-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarMaps">
                                    <i class="ti ti-map menu-icon"></i>
                                    <span>Maps</span>
                                </a>
                                <div class="collapse " id="sidebarMaps">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-google.html">Google Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-leaflet.html">Cartes dépliantes</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-vector.html">Cartes vectorielles</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarMaps-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                    <i class="ti ti-target menu-icon"></i>
                                    <span>Modèles d'emails</span>
                                </a>
                                <div class="collapse " id="sidebarEmailTemplates">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-basic.html">Email d'action de base</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-alert.html">Email d'alerte</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-billing.html">Email de facturation</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmailTemplates-->
                            </li><!--end nav-item-->
                            
                            <li class="nav-item">
                                
                                <div class="collapse " id="sidebarPages">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                       
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarPages-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAuthentication">
                                    <i class="ti ti-shield-lock menu-icon"></i>
                                    <span>Authentification</span>
                                </a>
                                <div class="collapse " id="sidebarAuthentication">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            <a class="nav-link" href="auth-login.html">Connexion</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-register.html">S'inscrire</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-recover-pw.html">Re-mot de passe</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-lock-screen.html"></a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                           
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                          
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAuthentication-->
                
                            </li><!--end nav-item-->
                    
                        </ul>
                 
                        <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                            <li>
                                <div class="update-msg text-center position-relative">
                                    <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                                    <img src="assets/images/speaker-light.png" alt="" class="" height="110">
                                    <h5 class="mt-0">Mannat Themes</h5>
                                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                                </div>
                            </li>
                        </ul><!--end navbar-nav--->
                    </div><!--end sidebarCollapse-->
                </div>
            </div>    
        </div><?php /**PATH C:\xampp\htdocs\doc\doctorino\resources\views/include/leftsidebar.blade.php ENDPATH**/ ?>