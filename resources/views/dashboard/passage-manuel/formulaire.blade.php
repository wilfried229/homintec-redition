
<div class="row">

    <input type="hidden" name="passageManuel_id" value="{{ $passageManuel->id }}" id="dysfonctionnement_id" >

    <div class="col-lg-6 col-md-6">
        <label for="">Date </label>
        <input type="date" name="date" id="date"
            value="{{ $passageManuel->date??"" }}"
            data-msg="Veuillez choisir une date" class="form-control" required>
    </div>
    <div class="col-lg-6 col-md-6">
        <label for=""> Voie</label>

        <select name="voie" id="voie"
            class="form-control" data-msg="Veuillez choisir une voie" required>
            <option value="" selected>----------------- Selectionnez---------------</option>
            @foreach ($voies as $voie )
            <option
            @if ($voie->id  == $passageManuel->voie_id)

            selected
            @endif
            value="{{$voie->id}}">{{$voie->nom}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-6 col-md-6">
        <label for=""> Vacation</label>
        <select name="vacations_id" id="vacations_id" class="form-control" data-msg="Veuillez choisir une vacation"  required>
            <option value=""  selected>----------------- Selectionnez---------------</option>
            @foreach ($vacations as $vacation )
            <option

            @if ($vacation->id  == $passageManuel->vacation_id)

            selected
            @endif
            value="{{$vacation->id}}">{{$vacation->type}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-lg-6 col-md-6">
        <label for="">Percepteur</label>

        <select name="percepteurs_id" id="percepteurs_id"  data-msg="Veuillez choisir le percepteur" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" style="height: 50px;widht:50px" required>

            <option  value="" selected> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;    &nbsp; -------- Selectionnez--------</option>

            @foreach ($percepteurs as $percepteur )
            <option
            @if ($percepteur->id  == $passageManuel->percepteur_id)

            selected
            @endif

            value="{{$percepteur->id}}">   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;    &nbsp;                 {{$percepteur->nom}}</option>

            @endforeach
        </select>
    </div>

</div>

<div class="row">

    <label for="">Point trafic informatisé avant démarrage du mode manuel </label>
    <br>
    <div class="col-lg-4 col-md-4">
        <label for="">Point trafic informatisé avant démarrage du mode manuel </label>
        <input  type="number" name="trafic_mode_avant_manuel"
        value="{{ $passageManuel->trafic_mode_avant_manuel ??"" }}"

        data-msg="Veuillez renseigner le Point trafic informatisé avant démarrage du mode manuel "  class="form-control" required>
    </div>
    <div class="col-lg-4 col-md-4">
        <label for="">Solde recette informatisée avant démarrage du mode manuel</label>
        <input  type="number" name="trafic_mode_avant_manuel"
        value="{{ $passageManuel->trafic_mode_avant_manuel ??"" }}"
        data-msg="Veuillez renseigner le Solde recette informatisée avant démarrage du mode manuel"  class="form-control" required>
    </div>

    <div class="col-lg-4 col-md-4">
        <label for="">Heure debut</label>
        <input type="time" name="heure_debut" id="heure_debut"
            data-msg="Veuillez choisir une heure de debut"
            value="{{ $passageManuel->heure_debut ??"" }}" class="form-control"
            required>

    </div>
    <div class="col-lg-4 col-md-4">
        <label for="">Heure fin</label>
        <input type="time" name="heure_fin" id="heure_fin" class="form-control"
            data-msg="Veuillez choisir une l'heur de fin "
            value="{{ $passageManuel->heure_fin ??"" }}" required>
    </div>
</div>

<div class="row">
    <label for="">RESULTAT ISSU DU COMPTAGE MANUEL </label>
    <div class="col-lg-4 col-md-4">
        <label for="">Trafic compté manuellement</label>
        <input  type="number" name="trafic_compte_nanuel"
        value="{{ $passageManuel->trafic_compte_nanuel ??"" }}"
        data-msg="Veuillez renseigner le Trafic compté manuellement"  class="form-control" required>
    </div>

    <div class="col-lg-4 col-md-4">
        <label for="">Equivalent recette en FCFA  </label>
        <input  type="number" name="equip_recette"
        value="{{ $passageManuel->equip_recette ??"" }}"
        data-msg="Veuillez renseigner ce champs Equivalent recette en FCFA  "  class="form-control" required>
    </div>
</div>

<div class="row">
    <label for="">ETAT DONNEES INFORMATISEES ENREGISTREES APRES PASSAGES EN MODE MANUEL </label>
    <div class="col-lg-4 col-md-4">
        <label for="">Trafic Informatisé </label>
        <input  type="number" name="trafic_mode_apres_manuel"
        value="{{ $passageManuel->trafic_mode_apres_manuel ??"" }}"
        data-msg="Veuillez renseigner le Trafic compté manuellement"  class="form-control" required>
    </div>

    <div class="col-lg-4 col-md-4">
        <label for="">Recette Informatisée  </label>
        <input  type="number" name="recette_mode_apres_manuel"
        value="{{ $passageManuel->recette_mode_apres_manuel ??"" }}"
        data-msg="Veuillez renseigner ce champs Recette Informatisée  "  class="form-control" required>
    </div>
</div>
<div class="row">


    <div class="col-lg-6 col-md-6">
        <label for="">observation</label>
        <textarea name="observation" id="observation" cols="30" class="form-control"
            data-msg="Veuillez remplier le champ  observation"
            rows="10">{{ $passageManuel->observation ??"" }}</textarea>

    </div>



    <div class="col-md-12">
        <input type="submit"  @if (!$passageManuel)
        value="Enregistrer"
        @else
        value="Modifier"
        @endif  class="btn btn-success">
    </div>
</div>
