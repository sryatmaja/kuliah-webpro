<html>
    <head>
        <title>coba coba library table</title>
        <!-- ini bagian load bootstrap css file -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
        <!-- selesai load bootstrap css file -->
    </head>
    <body>
        <h1>coba library table</h1>
    <?php
    // pemanggilan salah satu function yang ada di library table
    $this -> table -> set_heading($data['heading']);
    
    // isi table dari row1
    // $this -> table -> add_row($data['row1']);
    
    // sama tpi pake looping
    for ($row = 1; $row <= 10; $row++) {
        $this -> table -> add_row($data['row'.$row]);
      }

    echo $this->table->generate();
    ?>
    
    <!-- ini bagian load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- ini bagianload bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <!-- selesai load bootstrap css file -->

    </body>
</html>
