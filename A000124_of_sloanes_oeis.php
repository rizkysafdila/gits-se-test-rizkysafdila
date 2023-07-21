<?php
function generateSequence($n) {
  $sequence = array();
  $sum = 1;
  for ($i = 0; $i < $n; $i++) {
    $sum += $i;
    array_push($sequence, $sum);
  }
  return implode("-", $sequence);
}

// Fungsi untuk membaca input dari pengguna
function getInput() {
  $input = readline("Masukkan sebuah angka: ");
  $number = intval($input);
  if (!is_numeric($number) || $number <= 0) {
    echo "Masukkan angka positif yang valid!" . PHP_EOL;
    return getInput(); // Jika input tidak valid, minta input ulang
  }
  return $number;
}

$inputNumber = getInput();
$output = generateSequence($inputNumber);
echo "Output: " . $output . PHP_EOL;
