<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('cdn.php')
    ?>
    <script src="jsfiles/findcost.js"></script>
      <script src="jsfiles/gettype.js"></script>
      <script src="jsfiles/gettype1.js"></script>
      <script src="jsfiles/genqr.js"></script>
      <script src="jsfiles/qrcode.min.js"></script>
      <script src="jsfiles/insert.js"></script>
</head>
<body>
<?php include('navbar.php');
include('hero.php');
include('cost.php');
include('type.php');
    ?>
<div class="flex flex-col justify-center items-center w-full">
    <?php include('form.php'); 
    include('team.php');
    ?>

</div>

<?php include('footer.php'); ?>



<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>