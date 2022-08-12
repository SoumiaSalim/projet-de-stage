<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.All Prescriptions')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<?php endif; ?>

<div class="card shadow mb-4">
   <div class="card-header py-3">
      <div class="row">
         <div class="col-8">
            <h6 class="m-0 font-weight-bold text-primary w-75 p-2">Toutes les ordonnances</h6>
         </div>
         <div class="col-4">
            <a href="<?php echo e(route('prescription.create')); ?>" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Nouvelle ordonnance</a>
         </div>
      </div>
   </div>

   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>ID</th>
                  <th><?php echo e(__('sentence.Patient')); ?></th>
                  <th class="text-center">Créer</th>
                  <th class="text-center">Contenu</th>
                  <th class="text-center">Actions</th>
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $prescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($prescription->id); ?></td>
                  <td><a href="<?php echo e(url('patient/view/'.$prescription->user_id)); ?>"> <?php echo e($prescription->User->name); ?> </a></td>
                  <td class="text-center"><?php echo e($prescription->created_at->format('d M Y H:i')); ?></td>
                  <td class="text-center"> 
                     <label class="badge badge-primary-soft">
                        <?php echo e(count($prescription->Drug)); ?> Drugs
                     </label>
                     <label class="badge badge-primary-soft">
                        <?php echo e(count($prescription->Test)); ?> Tests
                     </label> 
                  </td>
                 
                  <td class="text-center">
                     <a href="<?php echo e(url('prescription/view/'.$prescription->id)); ?>" class="btn btn-outline-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                     <a href="<?php echo e(url('prescription/pdf/'.$prescription->id)); ?>" class="btn btn-outline-primary btn-circle btn-sm"><i class="fas fa-print"></i></a>
                     <a href="<?php echo e(url('prescription/edit/'.$prescription->id)); ?>" class="btn btn-outline-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
                     <a class="btn btn-outline-danger btn-circle btn-sm" data-toggle="modal" data-target="#DeleteModal" href="<?php echo e(url('prescription/delete/'.$prescription->id)); ?>"><i class="fas fa-trash"></i></a>
                  </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
         <span class="float-right mt-3"><?php echo e($prescriptions->links()); ?></span>
        
      </div>
   </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp1\htdocs\doc\doctorino\resources\views/prescription/all.blade.php ENDPATH**/ ?>