<?php

function rectangle($x, $y)
{
   $out = "";
   for ($i = 0; $i < $y; $i++) {
      for ($k = 0; $k < $x; $k++) {
         $out .= "*";
      }
      $out .= "\n";
   }

   for ($i = 0; $i < 3; $i++) {
      $out .= "\n";
   }

   echo $out;
}

// rectangle(14, 5);

function triangle($h)
{
   $out = "";
   for ($i = 0; $i < $h; $i++) {
      for ($k = 0; $k <= $i; $k++) {
         $out .= "*";
      }
      $out .= "\n";
   }

   for ($i = 0; $i < 3; $i++) {
      $out .= "\n";
   }

   echo $out;
}

$h = 10;
// triangle($h);

function matrix()
{
   for ($i = 0; $i <= 5; $i++) {
      for ($k = 1; $k <= 10; $k++) {
         if ($i == 0 && $k < 10) {
            echo '0';
         }
         echo $k + 10 * $i, ' ';
      }
      echo "\n";
   }
}

// matrix();

function pythagoreanTable()
{
   for ($i = 1; $i <= 10; $i++) {
      for ($k = 1; $k <= 10; $k++) {
         $multi = $i * $k;
         if ($multi < 10) {
            echo ' ';
         }
         echo $multi, ' ';
         if ($k === 1) {
            echo '| ';
         }
      }
      echo "\n";

      if ($i === 1) {
         for ($l = 0; $l < 33; $l++) {
            echo '_';
         }
         echo "\n";
      }
   }
}

// pythagoreanTable();

function trapezoidUp($dx, $dy)
{

   for ($y = 0; $y < $dy; $y++) {
      for ($x = 0; $x < $dx; $x++) {
         if ($x <= $y || $x >= $dx - $y) {
            echo ' ';
         } else {
            echo '*';
         }
      }
      echo "\n";
   }
   echo "\n";
}

$dx = 25;
$dy = 7;
// trapezoidUp($dx, $dy);


function trapezoidDown($dx, $dy, $s = 1)
{

   for ($y = $dy; $y > 0; $y--) {
      for ($x = 0; $x < $dx; $x++) {
         if ($x <= $y * $s || $x >= $dx - $y * $s) {
            echo ' ';
         } else {
            echo '*';
         }
      }
      echo "\n";
   }
   echo "\n";
}

$dx = 45;
$dy = 10;
$s = 2;
trapezoidDown($dx, $dy);
trapezoidDown($dx, $dy, $s);
