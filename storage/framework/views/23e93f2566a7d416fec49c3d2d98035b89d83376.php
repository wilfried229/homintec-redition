---
<?php echo $frontmatter; ?>

---
<!-- START_INFO -->
<?php echo $infoText; ?>

<!-- END_INFO -->
<?php echo $prependMd; ?>

<?php $__currentLoopData = $parsedRoutes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupName => $routes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
#<?php echo $groupName; ?>


<?php echo \Illuminate\Support\Arr::first($routes, function ($route) { return $route['metadata']['groupDescription'] !== ''; })['metadata']['groupDescription'] ?? ''; ?>

<?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parsedRoute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($writeCompareFile === true): ?>
<?php echo $parsedRoute['output']; ?>

<?php else: ?>
<?php echo isset($parsedRoute['modified_output']) ? $parsedRoute['modified_output'] : $parsedRoute['output']; ?>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php echo $appendMd; ?>

<?php /**PATH /Applications/MAMP/htdocs/homintec-redition/vendor/mpociot/laravel-apidoc-generator/src/../resources/views//documentarian.blade.php ENDPATH**/ ?>