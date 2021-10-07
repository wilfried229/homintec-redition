<form action="{{route('users.store')}}" method="post" class="form" >
    @csrf

    <div class="row">
        <div class="col-lg-12 col-md-4">
            <label for="">Nom</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">
            <label for=""> Email</label>

            <input type="email" name="email" id="email" class="form-control">
        </div>
     </div>
    <div class="row">
        <div class="col-lg-12 col-md-4">
            <label for="">Role</label>

            <select name="role" id="role" class="form-control">
                <option value="ADMIN">ADMIN</option>
                <option value="TECHNICIEN">TECHNICIEN</option>
                <option value="CM">CM</option>

            </select>
        </div>


        <div class="col-md-12">
            <label for="">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>


        <div class="col-md-12">
            <label for="">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
    </div>
    <br>



    <div class="row">

        <div class="col-md-12">
            <input type="submit" value="Ajouter" class="btn btn-success">

        </div>
    </div>
</form>
