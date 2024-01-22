<div class="row">
    <input type="hidden" value="<?php echo e($categorieDysfonctionnemts->id); ?>" name="categorieDysfonctionnemts_id">
    <div class="col-md-12">
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="libelle" value="<?php echo e($categorieDysfonctionnemts->libelle); ?>"  class="form-control">
    </div>

    <div class="col-md-12">
        <input type="submit"
        <?php if(!$categorieDysfonctionnemts): ?>
        value="Enregistrer"
        <?php else: ?>
        value="Modifier"
        <?php endif; ?>
        class="btn btn-success">
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/categorieDysfonctionnements/formulaire.blade.php ENDPATH**/ ?>