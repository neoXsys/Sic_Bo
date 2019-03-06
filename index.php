<?php
  $min=1;
  $max=6;
  sleep(0.10);
  $DICE_1=rand($min,$max);
  sleep(0.30);
  $DICE_2=rand($min,$max);
  sleep(0.50);
  $DICE_3=rand($min,$max);

  $DICE_TOTAL=$DICE_1 + $DICE_2 + $DICE_3;

  if ( $DICE_TOTAL & 1 ) {
        $NUM_TYPE="ODD";
} else {
        $NUM_TYPE="EVEN";
}

if ( $DICE_1 == $DICE_2 and $DICE_1 == $DICE_3 ) {
        $JACKPOT="You Hit The Jack Pot";
        print("$DICE_1 | $DICE_2 | $DICE_3 | Total = $DICE_TOTAL | Number Type = $NUM_TYPE | $JACKPOT");
        sleep(5);
} else {
          print("$DICE_1 | $DICE_2 | $DICE_3 | Total = $DICE_TOTAL | Number Type = $NUM_TYPE");
}
?>
