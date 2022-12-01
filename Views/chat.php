<?php
$this->connexion = new PDO("localhost","root","root");
?>
<h5>Chat Room</h5>
<div class="container mt-5 col-5 border bg-dark text-white  rounded p-3 shadow">
  <div class="mt-3 m-auto">
    <h5>ChatRoom</h5>
    <div class="chatroom">
    <?php
    $allmsg = $this->connexion->query('SELECT * FROM chat ORDER BY id DESC LIMIT 31');
    while($msg= $allmsg->fetch()){
    ?>
    <?php
    date_default_timezone_set('Europe/Paris');
    $msg['heure'] = explode(" ",$msg['heure']);
    echo "<small>".$msg['heure'][1]."</small>"."  <b>"."<span class='pseudo'>".$msg['pseudo']."</span>";?> : </b>
    <?php echo $msg['message'];?><br>
    <?php
}
?>
    </div>
  </div>
</div>
<div class="container col-5 border bg-dark text-white  rounded p-3 shadow">
<form action="index.php?controller=membre&action=chat" method="POST">
<div class="mt-3 m-auto">
    <input type="text" class="form-control" name="pseudo" id="pseudo" required placeholder="Pseudo" <?php
    if(isset($tableauchat->pseudo)){
    echo "value =$tableauchat->pseudo";}?>>
</div>
<div class="mt-3 m-auto">
    <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
</div>
<div class="mt-1 m-auto ">
    <input type="submit" class="form-control bg-info" name="send" value="Envoyer">
</div>
</form>
  </div>
