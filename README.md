# GITS SE Intern Test

## Applicant Data
- Muhammad Rizky Safdila
- rizkysafdila@gmail.com
- Teknik Informatika, Politeknik Negeri Lhokseumawe

## Description
- Some program for completing Internship - Problem Solving Test 

## Output Screenshots
1. A000124 of Sloane’s OEIS
  ![A000124 of Sloane’s OEIS](https://cdn.discordapp.com/attachments/756424136179318784/1131969967781322762/image.png)

2. Dense Ranking
  ![Dense Ranking](https://cdn.discordapp.com/attachments/756424136179318784/1131972281585909912/image.png)

3. Balanced Bracket
  ![Balanced Bracket](https://cdn.discordapp.com/attachments/756424136179318784/1131972860982861834/image.png)
    - Berapa ukuran kompleksitas kodinganmu?<br>
      Kompleksitas kodingan saya adalah O(n) di mana n adalah panjang input.

    - Jelaskan detail kompleksitas codingan Balanced Bracket Anda.<br>
      * Fungsi isBalancedBracket():
        1. Perulangan for berjalan sebanyak strlen($input) kali, di mana strlen($input) merupakan panjang input (jumlah karakter dalam string).<br>
        2. Di dalam perulangan, operasi in_array digunakan untuk memeriksa apakah karakter saat ini adalah kurung pembuka atau kurung penutup. Operasi ini memiliki kompleksitas waktu O(n), dengan n adalah jumlah elemen dalam array ($openingBrackets dan $closingBrackets). Karena array ini memiliki jumlah elemen yang tetap (3 elemen), kompleksitasnya bisa dianggap konstan, yaitu O(1).<br>
        3. Operasi array_push dan array_pop pada stack memiliki kompleksitas waktu O(1), karena keduanya beroperasi pada ujung array, dan waktu operasi tidak tergantung pada ukuran array.
        Jadi, kompleksitas fungsi isBalancedBracket adalah O(n), di mana n adalah panjang input (jumlah karakter dalam string).

      * Fungsi checkBracketBalance():<br>
        Fungsi ini hanya melakukan pemanggilan fungsi isBalancedBracket, sehingga tidak menambah kompleksitas tambahan.