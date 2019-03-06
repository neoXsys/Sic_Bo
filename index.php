<?php
  $min=1;
  $max=6;
  $DICE_1=rand($min,$max);
  $DICE_2=rand($min,$max);
  $DICE_3=rand($min,$max);
  
  $DICE_TOTAL=$DICE_1 + $DICE_2 + $DICE_3
  
  echo "$DICE_1 | $DICE_2 | $DICE_3 | Total = $DICE_TOTAL"
?>
