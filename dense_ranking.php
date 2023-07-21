<?php 
function denseRanking($totalPlayers, $scores, $gitsScores) {
  // Menduplikat daftar skor dan menghapus nilai-nilai yang sama
  $uniqueScores = array_values(array_unique($scores));

  // Mengurutkan skor dari nilai tertinggi ke terendah
  rsort($uniqueScores);

  // Array untuk menyimpan hasil ranking GITS di setiap permainan
  $gitsRanking = array();

  // Loop untuk menghitung ranking GITS pada setiap permainan
  for ($i = 0; $i < count($gitsScores); $i++) {
    $currentRanking = 1;

    for ($j = 0; $j < count($uniqueScores); $j++) {
      if ($gitsScores[$i] < $uniqueScores[$j]) {
        $currentRanking++;
      } else if ($gitsScores[$i] === $uniqueScores[$j]) {
        break;
      }
    }

    // Menambahkan ranking GITS pada array gitsRanking
    array_push($gitsRanking, $currentRanking);
  }

  return $gitsRanking;
}

// Contoh penggunaan fungsi denseRanking:
$totalPlayers = 7;
$scores = array(100, 100, 50, 40, 40, 20, 10);
$gitsScores = array(5, 25, 50, 120);

$result = denseRanking($totalPlayers, $scores, $gitsScores);
echo implode(" ", $result);
