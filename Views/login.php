<form action="index.php?controller=membre&action=connexion" method="POST">
  <div class="container mt-5 col-3 border bg-dark text-white  rounded p-3 shadow">
  <div class="mt-3 m-auto">
    <input type='hidden' class='form-control' name='id' id='id'>
    <label for="email" class="form-label">E-mail</label>
    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mt-3 m-auto">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" id="mdp">
  </div>
  <div class="mt-3 m-auto form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
  </div>
  <div class="mt-3 m-auto">
  <button type="submit" name="connexion" id="connexion" class="btn btn-info">Me connecter</button>
</form>
<p class="mt-3"> Pas encore de compte ?<a href="index.php?controller=inscription&action=creation"> Je crée mon compte</a>
</div>
</div>