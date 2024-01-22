<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Surcharges
        <small><a href="" target="_blank"> </a></small>
    </h2>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Surcharges  <?php echo e($type? 'ANNULLE' : "NORMAL "); ?>     / <?php echo e($site->nom??''); ?> / <?php echo e($date ?? ""); ?>

                </h2>
                <br>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sucharge', ['date' => $date,'site'=>$site,'type'=>$type,'date_debut'=>$date_debut,'date_fin'=>$date_fin,'site_id'=>$site_id])->html();
} elseif ($_instance->childHasBeenRendered('oePTw2H')) {
    $componentId = $_instance->getRenderedChildComponentId('oePTw2H');
    $componentTag = $_instance->getRenderedChildComponentTagName('oePTw2H');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oePTw2H');
} else {
    $response = \Livewire\Livewire::mount('sucharge', ['date' => $date,'site'=>$site,'type'=>$type,'date_debut'=>$date_debut,'date_fin'=>$date_fin,'site_id'=>$site_id]);
    $html = $response->html();
    $_instance->logRenderedChild('oePTw2H', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>
    $(document).ready(function(){

        var span = 1;
        var preTD= "";
        var preTDVal = '';

        $("#listExpor tr td:first-child").each(function () {



           var  $this = $(this)
            if ($this.text()==preTDVal) {
                span ++;

                if (preTD!= "") {
                    preTD.attr("rowspan",span);
                    $this.remove();

                }


            } else {

                preTD = $this;
                preTDVal = $this.text();
                span = 1;
            }
        })


    })

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.export', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/surcharges/bysite.blade.php ENDPATH**/ ?>