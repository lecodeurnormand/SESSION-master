<div class= 'container mt-5'>
    <form class='col-4 m-auto border bg-dark text-white rounded p-3 shadow' action='index.php?controller=inscription&action=inscription' method='POST'>
        <legend> Formulaire d'inscription</legend>
            <div class='form-group'>
                    <input type='hidden' class='form-control' name='id' id='id'  readonly>
                        </div>
            <div class='form-group'>
                    <input type='text' class='form-control' name='username' id='username' required placeholder="Nom d'utilisateur">
                        </div>
            <div class='form-group mt-1'>
                    <input type='email' class='form-control' name='email' id='email' required placeholder="Email">
                        </div>
            <div class='form-group mt-1'>
                    <input type='password' class='form-control' name='mdp' id='mdp'  required placeholder="Mot de passe">
                        </div>
            <div class='form-group pt-3'>
                <button type='submit' class='btn btn-info' name='action' id='action' >Je m'inscris</button>
                        </div>
                        <p><a href="index.php">Me connecter</a></p>
    </form>
</div>