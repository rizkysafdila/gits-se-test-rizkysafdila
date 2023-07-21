<?php
function isBalancedBracket($input) {
  $stack = [];
  $openingBrackets = ['(', '{', '['];
  $closingBrackets = [')', '}', ']'];

  for ($i = 0; $i < strlen($input); $i++) {
    $currentChar = $input[$i];

    if (in_array($currentChar, $openingBrackets)) {
      array_push($stack, $currentChar);
    } elseif (in_array($currentChar, $closingBrackets)) {
      $matchingOpeningBracket = $openingBrackets[array_search($currentChar, $closingBrackets)];
      if (array_pop($stack) !== $matchingOpeningBracket) {
        return 'NO';
      }
    }
  }

  return empty($stack) ? 'YES' : 'NO';
}

function checkBracketBalance() {
  $userInput = readline("Enter brackets: ");
  $result = isBalancedBracket($userInput);
  echo "Bracket Balance: " . $result;
}

checkBracketBalance();
