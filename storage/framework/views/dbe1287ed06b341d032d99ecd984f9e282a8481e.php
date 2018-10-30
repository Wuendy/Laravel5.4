<?php $__env->startSection('content'); ?>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image:url(<?php echo e(url('uploads/12.jpg')); ?>)">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="<?php echo e(route('profesor.update', $id)); ?>">
       
 
        <input name="_method" type="hidden" value="PATCH">
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
            <input class="input100" type="text" name="nombre" placeholder="Nombre" value="<?php echo e($profesor->nombre); ?>" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="apellido" placeholder="Apellido" value="<?php echo e($profesor->apellido); ?>" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="number" name="cedula" placeholder="Cedula" value="<?php echo e($profesor->cedula); ?>" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>
<div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="number" name="tlf" placeholder="Telefono" value="<?php echo e($profesor->tlf); ?>" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="email" name="email" placeholder="Email" value="<?php echo e($profesor->email); ?>" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>
          
 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  
          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" value="Actualizar">
              Actualizar
            </button>
          </div>


         
  

    </form>
    <div style="text-align:right"><a href="<?php echo e(route('profesor.index')); ?>">Atrás</a></div>

      </div>
    </div>
  </div>
  </body>
</html>

                   
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.m', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>