<div class="row">
    <input type="hidden" value="{{ $categorieDysfonctionnemts->id }}" name="categorieDysfonctionnemts_id">
    <div class="col-md-12">
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="libelle" value="{{ $categorieDysfonctionnemts->libelle }}"  class="form-control">
    </div>

    <div class="col-md-12">
        <input type="submit"
        @if (!$categorieDysfonctionnemts)
        value="Enregistrer"
        @else
        value="Modifier"
        @endif
        class="btn btn-success">
    </div>
</div>
