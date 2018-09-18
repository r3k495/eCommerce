<?php foreach($res as $row){?>
<div>
    <?php echo $row->price;
          echo "\r\n";
          echo $row->discount;
          echo "\r\n";
          echo $row->item_name;
    ?>
</div>
<?php } ?>