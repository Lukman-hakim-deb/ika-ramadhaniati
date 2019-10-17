<?php include('assets/header.php') ?>

<div class="container">
  <div class="row">

    <div class="col-12">
      <h1 class="display-4 mt-3">Kalkulator Dengan PHP OOP Sederhana</h1>
    </div>

    <div class="col-4">

      <form action="assets/hasil.php" method="POST">

        <div class="form-group mt-3">
          <input type="text" name="first_number" placeholder="First Number" class="form-control" required>
        </div>
        <div class="form-group mt-3">
          <input type="text" name="second_number" placeholder="Second Number" class="form-control" required>
        </div>

        <select name="operation" class="custom-select">
          <option value="Ditambah">Tambah</option>
          <option value="Dikurang">Kurang</option>
          <option value="Dikali">Kali</option>
          <option value="Dibagi">Bagi</option>
        </select>

        <button type="submit" class="btn btn-primary mt-3">Hitung</button>

      </form>

    </div>

  </div>
</div>

<?php include('assets/footer.php'); ?>