<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Zen+Dots&display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Poppins:wght@400;500&family=Prosto+One&family=Zen+Dots&display=swap" rel="stylesheet">
  <!-- ICONS -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/58c375ca00.js" crossorigin="anonymous"></script>

  <title><?php echo SITENAME; ?></title>

  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    /* width */
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: white;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: rgb(249 115 22);
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: rgb(234 88 12);
    }
  </style>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/css/style.css" />
</head>

<body class="h-screen ">
  <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>

  <?php require APPROOT . '/views/includes/navbar.php'; ?>