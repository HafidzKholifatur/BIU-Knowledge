<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BIU Knowledge | <?= $title; ?></title>
    <!-- plugin css for this page -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script> -->

    <link rel="stylesheet" href="<?= base_url('assets/frontend1/vendors/mdi/css/materialdesignicons.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend1/vendors/aos/dist/aos.css/aos.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend1/vendors/owl.carousel/dist/assets/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend1/vendors/owl.carousel/dist/assets/owl.theme.default.min.css') ?>" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?= base_url('assets/frontend1/images/favicon.png') ?>" />
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend1/css/style.css') ?>">

    <!-- datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.css" />

    <!-- endinject -->

    <!-- icon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/logo1.svg') ?>" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/images/logo/logo1.svg') ?>" type="image/x-icon">


    <!-- <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->

    <!-- bs css -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<style>
    .cari:hover {
        background-color: #4CAF50;
        color: white;
    }

    .pt-4 p img {
        /* width: ; */
        display: block;
        margin: auto;
        max-width: 700px;
        height: auto;
        min-width: 100px;
    }

    @media only screen and (max-width: 600px) {
        .youtube {
            height: 300px;
            width: 100%;
        }

        .pt-4 p img {
            /* width: ; */
            max-width: 100%;
            height: auto;
        }
    }

    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        margin: 0px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {
        background-color: #4CAF50;
        color: white;
    }

    .carousel-content a:hover {
        text-decoration: none;
        /* text-shadow: 2px 2px 6px #000; */
    }

    /* .image-hover:hover .thumb-title {
        background-color: #4CAF50;
        background-color: #3e8177;
    } */
</style>