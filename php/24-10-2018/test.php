<?php
  $data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];
?>
<!Doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
<div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Made in</th>
      <th scope="col">Made by</th>
    </tr>
  </thead>
  <tbody>
  <?php
for ($i=0;$i<2;$i++){

?>
    <tr>
    <th scope="row"><?php echo $i+1 ?></th>
    <td><?php echo $data[$i]['type'] ?></td>
    <td><?php echo $data[$i]['property']['price'] ?></td>
    <td><?php echo $data[$i]['property']['made']['in']?></td>
    <td><?php echo $data[$i]['property']['made']['by']?></td>
</tr>
<?php
}
?>
</tbody>
    </table>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <!-- // $ten = "Huynh Thai Huy";
// $tuoi= 21;
// echo "<h1 style='color:blue;'>$ten</h1>";
// echo "<h1 style='color:red;'>$tuoi</h1>";
// $x = 5  + 15  + 5;
// echo $x;
// $color = "red";
// echo "My car is " . $color . "<br>";
// echo "My house is " . $color . "<br>";
// echo "My boat is " . $color . "<br>"; -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>
