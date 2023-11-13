@include('nav')
{{-- @section('contenu') --}}
    <form>
        <div class="container"></div>
        <div class="row"></div>
        <fieldset>
            <legend>ajout eleve</legend>

            <div class="form-group">
                <label for="matricule" class="form-label mt-4">matricule</label>
                <input type="text" class="form-control" id="matricule" aria-describedby="emailHelp"
                    placeholder="Enter le matricule">
                <small id="matricule" class="form-text text-muted">entrez le matricule</small>
            </div>
            <div class="form-group">
                <label for="nom" class="form-label mt-4">nom</label>
                <input type="text" class="form-control" id="nom" placeholder="nom" autocomplete="off">
                <small id="matricule" class="form-text text-muted">entrez le nom</small>
            </div>
            <div class="form-group">
                <label for="prenom" class="form-label mt-4">prenom</label>
                <input type="text" class="form-control" id="prenom" placeholder="prenom" autocomplete="off">
                <small id="matricule" class="form-text text-muted">entrez le prenom</small>
            </div>
            <div class="form-group">
                <label for="date de naissance" class="form-label mt-4">date de naissance</label>
                <input type="date" class="form-control" id="date_naissance" placeholder="date de naissance"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label for="classe" class="form-label mt-4">classe</label>
                <input type="text" class="form-control" id="classe" placeholder="classe" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="sexe" class="form-label mt-4">sexe</label>
                <select class="form-select" id="sexe">
                    <option>fille</option>
                    <option>garcon</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">ajouter</button>
        </fieldset>
    </form>

