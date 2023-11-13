@include('nav')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <form>
        <div class="contenair"></div>
        <div class="row"></div>
        <fieldset>
            <legend>ajout notes</legend>

            <div class="form-group">
                <label for="matricule" class="form-label mt-4">matricule</label>
                <input type="text" class="form-control" id="matricule" aria-describedby="emailHelp"
                    placeholder="Enter le matricule">
                <small id="matricule" class="form-text text-muted">entrez le matricule</small>
            </div>
            <div class="form-group">
                <label for="matiere" class="form-label mt-4">matiere</label>
                <input type="text" class="form-control" id="matiere" placeholder="nom" autocomplete="off">
                <small id="matiere" class="form-text text-muted">entrez le matiere</small>
            </div>

            <div class="form-group">
                <label for="sexe" class="form-label mt-4">sexe</label>
                <select class="form-select" id="sexe">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">ajouter</button>
        </fieldset>
    </form>
</body>

</html>
