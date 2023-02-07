
<div class="row">

    <input type="hidden" name="dysfonctionnement_id" value="<?php echo e($dysfonctionnement->id); ?>" id="dysfonctionnement_id" >

    <div class="col-lg-6 col-md-6">
        <label for="">Date recette</label>
        <input type="date" name="date" id="date"
            value="<?php echo e($dysfonctionnement->date??""); ?>"
            data-msg="Veuillez choisir une date" class="form-control" required>
    </div>

    <div class="col-lg-6 col-md-6">
        <label for=""> Categorie</label>

        <select name="categorie_dysfonctionnemt_id" id="categorie_dysfonctionnemt_id"
            class="form-control" data-msg="Veuillez choisir une categorie" required>

            <option value="" selected>----------------- Selectionnez---------------</option>

            <?php $__currentLoopData = $categorieDysfonctionnemts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <option
            <?php if($categorie->id  == $dysfonctionnnemt->categorie_dysfonctionnemt_id): ?>

            selected
            <?php endif; ?>  value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->libelle); ?></option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col-lg-6 col-md-6">
        <label for="">Localisation</label>
        <textarea name="localisation" id="localisation" class="form-control"
     cols="30"
            data-msg="Veuillez remplier le champ localisation" rows="10">
            <?php echo e($dysfonctionnement->localisation ??""); ?>

        </textarea>

    </div>
    <div class="col-lg-6 col-md-6">
        <label for="">Panne constater par la SIRAT</label>
        <textarea name="panne_sirat" id="panne_sirat" cols="30" class="form-control"
            data-msg="Veuillez remplier le champ panne constater par la SIRAT"
            rows="10"><?php echo e($dysfonctionnement->panne_sirat??""); ?></textarea>

    </div>
    <div class="col-lg-6 col-md-6">
        <label for="">Panne constater par la HOMINTEC</label>
        <textarea name="panne_homintec" id="panne_homintec" cols="30" class="form-control"
            data-msg="Veuillez remplier le champ panne constater par HOMINTEC"
            rows="10"><?php echo e($dysfonctionnement->panne_homintec??""); ?></textarea>
    </div>

    <div class="col-lg-6 col-md-6">
        <label for="">Cause</label>
        <textarea name="cause" id="cause" cols="30" class="form-control"
            data-msg="Veuillez remplier le champ cause"
            rows="10"><?php echo e($dysfonctionnement->cause ??""); ?></textarea>

    </div>


    <div class="col-lg-6 col-md-6">
        <label for="">Travaux realiser</label>
        <textarea name="travaux_realiser" id="travaux_realiser" cols="30" class="form-control"
            data-msg="Veuillez remplier le champ travaux realiser"
            rows="10"><?php echo e($dysfonctionnement->travaux_realiser ??""); ?></textarea>

    </div>

    <div class="col-lg-6 col-md-6">
        <label for="">Heure du constat</label>
        <input type="time" name="heure_constat" id="heure_constat"
            data-msg="Veuillez choisir une heure de constat"
            value="<?php echo e($dysfonctionnement->heure_constat ??""); ?>" class="form-control"
            required>

    </div>

    <div class="col-lg-6 col-md-6">
        <label for="">Heure debut</label>
        <input type="time" name="heure_debut_inter" id="heure_debut_inter"
            data-msg="Veuillez choisir une heure de debut"
            value="<?php echo e($dysfonctionnement->heure_debut_inter ??""); ?>" class="form-control"
            required>

    </div>
    <div class="col-lg-6 col-md-6">
        <label for="">Heure fin</label>
        <input type="time" name="heure_fin_inter" id="heure_fin_inter" class="form-control"
            data-msg="Veuillez choisir une l'heur de fin "
            value="<?php echo e($dysfonctionnement->heure_fin_inter ??""); ?>" required>
    </div>
    <div class="col-lg-6 col-md-6">
        <label for="">Duree panne</label>
        <input type="time" name="duree_panne" id="duree_panne" class="form-control"
            data-msg="Veuillez choisir une duree "
            value="<?php echo e($dysfonctionnement->duree_panne ??""); ?>" required>
    </div>
</div>

<div class="row">

    <div class="col-lg-6 col-md-6">

        <label for=""> Resultat obtenu</label>
        <textarea name="resultat_obtenu" id="resultat_obtenu" cols="30" class="form-control"
            data-msg="Veuillez remplier le champ   resultat obtenu"
            rows="10"><?php echo e($dysfonctionnement->resultat_obtenu ??""); ?></textarea>

    </div>


    <div class="col-lg-6 col-md-6">

        <label for="">Besoin</label>
        <textarea name="besoin" id="besoin" cols="30" class="form-control"
            data-msg="Veuillez remplier le champ  besoin"
            rows="10"><?php echo e($dysfonctionnement->besoin ??""); ?></textarea>

    </div>

</div>
<div class="row">


    <div class="col-lg-6 col-md-6">
        <label for="">Preuvre</label>
        <textarea name="preuvre" id="preuvre" cols="30"  class="form-control"
            data-msg="Veuillez remplier le champ  preuvre"
            rows="10"><?php echo e($dysfonctionnement->preuvre ??""); ?></textarea>

    </div>



    <div class="col-lg-6 col-md-6">
        <label for="">observation</label>
        <textarea name="observation" id="observation" cols="30" class="form-control"
            data-msg="Veuillez remplier le champ  observation"
            rows="10"><?php echo e($dysfonctionnement->observation ??""); ?></textarea>

    </div>



    <div class="col-md-12">
        <input type="submit"  <?php if(!$dysfonctionnnemt): ?>
        value="Enregistrer"
        <?php else: ?>
        value="Modifier"
        <?php endif; ?>  class="btn btn-success">
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/dysfonctionnements/formulaire.blade.php ENDPATH**/ ?>