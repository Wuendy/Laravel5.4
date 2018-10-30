<?php $__env->startSection('content'); ?>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image:url(<?php echo e(url('uploads/12.jpg')); ?>)">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="<?php echo e(route('profesor.store')); ?>">
        
          <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Profesor

            <?php if($errors->any()): ?>
    
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
<?php endif; ?>
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="nombre" placeholder="Nombre">
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="apellido" placeholder="Apellido">
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="number" name="cedula" placeholder="Cedula">
            <span class="focus-input100" data-placeholder=""></span>
          </div>
<div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="number" name="tlf" placeholder="Telefono">
            <span class="focus-input100" data-placeholder=""></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="email" name="email" placeholder="Email">
            <span class="focus-input100" data-placeholder=""></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
           <select class="input100" name="id_mat" >
           <option value="1"> Materia  </option>
  
              <?php $__currentLoopData = $materia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($materia->id); ?>"> <?php echo e($materia->materia); ?>  </option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
               
          
           </select>
            
          </div>

          
 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  
          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" value="submit">
              Registrar
            </button>
          </div>


         
  

    </form>
      </div>
    </div>
  </div>
  </body>
</html>

                   
<?php $__env->stopSection(); ?>

    
                   
<?php echo $__env->make('layouts.m', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>