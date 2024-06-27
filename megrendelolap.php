<?php
include ("includes/header.php");
?>

<div class="d-flex justify-content-center align-items-center w-100 mb-5">
  <form class="text-white mt-2 w-50 " method="post" action="megrendelessql.php">
    <div class="row g-3">
      <div class="m-3">
        <a href="index.php">Vissza a főoldalra</a>
      </div>
      <div class="form-group ">
        <label for="nev">Név:</label>
        <input type="text" name="nev" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail cím:</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="telefonszam">Telefonszám:</label>
        <input type="text" name="telefonszam" class="form-control" maxlength="20" required>
      </div>
      <div class="form-group">
        <label for="honnan">Honnan?</label>
        <input type="text" name="honnan" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="hova">Hova?</label>
        <input type="text" name="hova" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="datum">Mikor?</label>
        <input type="date" name="datum" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="uzenet" class="form-label">Üzenet:</label>
        <textarea class="form-control" name="uzenet" rows="3" required></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary mt-3">Küldés</button>
    </div>
  </form>
</div>
<?php
include ("includes/footer.php")
  ?>