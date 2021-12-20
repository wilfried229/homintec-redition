 <!-- Modal -->
<div class="modal fade" id="actionModalremoveRecette{{$recette->id}}" tabindex="-1" role="dialog" aria-labelledby="actionModalAddOrRemoveTop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Confirmation
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment supprimmer cette recette ? <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Non</button>
                <button type="button" class="btn btn-sm @if($recette->id) btn-danger @else btn-success @endif" data-dismiss="modal"
                onclick="document.getElementById('retirer-a-form-{{$recette->id}}').submit()">Oui</button>
            </div>
        </div>
    </div>
    <form id="retirer-a-form-{{$recette->id}}" action="{{route('recette.destroy',['id'=>$recette->id])}}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
</div>
