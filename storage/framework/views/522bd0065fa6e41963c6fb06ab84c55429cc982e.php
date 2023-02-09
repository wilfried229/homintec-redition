
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo e(env('APP_NAME')); ?> - <?php echo $__env->yieldContent("title"); ?></title>
    <?php echo $__env->make("pdf.partials.style", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent("css"); ?>

</head>
<body>
<script type="text/php">
        if (isset($pdf) ) {
            $y = $pdf->get_height() - 100;
            $x = $pdf->get_width() - 150 - 200;
            $pdf->page_text($x, $y, "Page : {PAGE_NUM} / {PAGE_COUNT}", '', 9, array(0,0,0));
        }
    </script>

<main>
    <?php echo $__env->yieldContent("content"); ?>
</main>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/pdf/layout.blade.php ENDPATH**/ ?>