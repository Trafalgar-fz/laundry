<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Invoice.css">
    <title>Invoice</title>
  </head>
  <body>
    <div class="login-box">
        <h2>Kode Invoice</h2>
        <form method="GET" action="cek_status_final.php">
          <div class="user-box">
            <input type="text" name="transaksi_id" autocomplete="off">
            <label>Masukan Kode Invoice</label>
          </div>
            <button type="submit">Submit</button>
        </form>
      </div>
  </body>
</html>