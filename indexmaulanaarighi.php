<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 10px;
    }
  </style>
</head>

<body>
    <form action="" method="post">


      <p>1. siapakah nama presiden RI yang ke 1?</p>
      <div>
        <input type="radio" name="soal1" id="soal1" value="A. jokowi">
        <label  for="soal1">
          A. jokowi
        </label>
      </div>
      <div>
        <input type="radio" name="soal1" id="soal1" value="B. susilo bambang yudhoyono">
        <label  for="soal1">
          B. susilo bambang yudhoyono
        </label>
      </div>
      <div>
        <input type="radio" name="soal1" id="soal1" value="C. soekarno">
        <label  for="soal1">
          C. soekarno
        </label>
      </div>
      <div>
        <input type="radio" name="soal1" id="soal1" value="D. soeharto">
        <label  for="soal1">
          D. soeharto
        </label>
      </div>


      <p >2. siapakah nama presiden RI yang ke 2?</p>
      <div>
        <input type="radio" name="soal2" id="soal2" value="A. soeharto">
        <label  for="soal2">
          A. soeharto 
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="B. jokowi">
        <label  for="soal2">
          B. jokowi 
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="C. soekarno">
        <label  for="soal2">
          C. soekarno
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="D. megawati">
        <label  for="soal2">
          D. megawati
        </label>
      </div>


      <p >3. siapakah nama presiden RI yang ke 3?</p>
      <div>
        <input type="radio" name="soal3" id="soal3" value="A. Bj. habibie">
        <label for="soal3">
          A. Bj. habibie
        </label>
      </div>
      <div>
        <input type="radio" name="soal3" id="soal3" value="B. soekarno">
        <label for="soal3">
         B. soekarno
        </label>
      </div>
      <div>
        <input type="radio" name="soal3" id="soal3" value=" C. soeharto">
        <label for="soal3">
          C. soeharto
        </label>
      </div>
      <div>
        <input  type="radio" name="soal3" id="soal3" value="D. susilo bambang yudhoyono">
        <label  for="soal3">
          D. susilo bambang yudhoyono
        </label>
      </div>


      <p >4. berapakah jumlah surat pada al-qur'an?</p>
      <div >
        <input  type="radio" name="soal4" id="soal4" value="A. 114">
        <label for="soal4">
          A. 114
        </label>
      </div>
      <div >
        <input type="radio" name="soal4" id="soal4" value="B. 115">
        <label  for="soal4">
          B. 115
        </label>
      </div>
      <div >
        <input  type="radio" name="soal4" id="soal4" value="C. 116">
        <label  for="soal4">
          C. 116
        </label>
      </div>
      <div >
        <input type="radio" name="soal4" id="soal4" value="D. 117">
        <label  for="soal4">
          D. 117
        </label>
      </div>


      <p>5. berapakah jumlah nabi yang harus diketahui ?</p>
      <div >
        <input type="radio" name="soal5" id="soal5" value="A. 25">
        <label for="soal5">
          A. 25
        </label>
      </div>
      <div >
        <input type="radio" name="soal5" id="soal5" value="B.26">
        <label  for="soal5">
          B.26
        </label>
      </div>
      <div >
        <input type="radio" name="soal5" id="soal5" value="C. 27">
        <label  for="soal5">
          C. 27
        </label>
      </div>
      <div>
        <input type="radio" name="soal5" id="soal5" value="D. 28">
        <label for="soal5">
          D. 28
        </label>
      </div>

      <div>
        <button type="submit" name="submit" id="submit">Lihat Hasil</button>
      </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
      $soal1 = $_POST['soal1'];
      $soal2 = $_POST['soal2'];
      $soal3 = $_POST['soal3'];
      $soal4 = $_POST['soal4'];
      $soal5 = $_POST['soal5'];
      $correct = 0;
      $note = "";
      $jawabanInput = array($soal1, $soal2, $soal3, $soal4, $soal5);
      $jawaban = array("C. soekarno", "A. soeharto", "A. Bj.habibie", "A. 114","A. 25");
      for ($i = 0; $i < count($jawabanInput); $i++) {
        if ($jawabanInput[$i] == $jawaban[$i]) {
          $correct += 20;
        }
      }
      switch ($correct) {
        case 100:
          $note = "Sangat Baik";
          break;
        case 80:
          $note = "Baik";
          break;
        case 60:
          $note = "Cukup";
          break;
        case 40:
          $note = "Kurang";
          break;
        case 20:
          $note = "Kurang Sekali";
          break;
        default:
          $note = "Semua Jawaban Salah";
          break;
      }
      echo "<h4 class='text-primary mt-4'>Nilai anda: $correct</h4>";
      echo "<h4 class='text-primary' >Keterangan: $note </h4>";
    }
    ?>
</body>

</html>