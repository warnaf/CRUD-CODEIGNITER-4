<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title><?= $judul ?></title>
</head>

<body>
  <?= $this->include('/components/navbar') ?>
  <div class="container">
    <div class="row">
      <div class="col-9 m-5">
        <h2 class="m-auto">Table Karyawan</h2>
        <?= $this->include('components/flash_notification') ?>
        <a href="<?= base_url('/create') ?>">
          <button class="my-2 btn btn-primary">Tambah Data</button>
        </a>
        <div id="read" class="table-responsive">
          <table class="table table-sm table-striped table-hover table-primary table-bordered" id="myTable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Divisi</th>
                <th scope="col">Nama</th>
                <th scope="col">jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $key => $item) : ?>
                <tr>
                  <td><?= ++$key ?></td>
                  <td><?= $item['nik'] ?></td>
                  <td><?= $item['divisi'] ?></td>
                  <td><?= $item['nama'] ?></td>
                  <td><?= $item['jenkel'] ?></td>
                  <td><?= $item['tempat_lahir'] ?></td>
                  <td><?= $item['tgl_lahir'] ?></td>
                  <td><?= $item['alamat'] ?></td>
                  <td class="p-3 d-flex flex-row justify-content-ceneter">
                    <a href="<?= base_url('/edit/' . $item['nik']) ?>">
                      <button class="btn btn-success">Edit</button>
                    </a>
                    <a href="<?= base_url('/delete/' . $item['nik']) ?>">
                      <button class="btn btn-danger ms-2">Delete</button>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>