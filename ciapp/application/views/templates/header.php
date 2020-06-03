<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

<!-- My CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <title><?php echo $judul; ?></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"> CI App </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= base_url(); ?>">Home<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
                <a class="nav-item nav-link" href="<?= base_url(); ?>peoples">Peoples</a>
                <a class="nav-item nav-link" href="#">About</a>
            </div>
         </div>
     </div>
</nav>
