<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfirmasi Pendaftaran Peserta Muna Ikadipa Ke XII</title>
</head>
<body>
    <p>Yth bapak/ibu {{ $participant->name }}, </p>
    <p>Anda sudah mendaftar menjadi peserta untuk acara MUNA IKADIPA Ke XII. Kami ucapkan terima kasih sebelumnya.</p>
    <p>Berikut ini adalah daftar keluarga anda yang akan mengikuti acara MUNA IKADIPA Ke XII :</p>
    <ul>
        <?php $total = 0; ?>
        @foreach ($participant->participantDetails as $person)
        <li>{{$person->name}} {{ $person->age() }}</li>
            <?php
                if ($person->age >= 5) {
                    $total += 250000;
                }
            ?>
        @endforeach
    </ul>
    <p>Kami mengharapkan biaya pendaftaran sebesar <b>Rp{{ number_format($total, 0, ',', '.') }}</b> dapat disampaikan kepada bendahara masing-masing wilayah paling lambat <b>5 Agustus 2018</b>.</p>
    <p>Terima kasih sudah mendaftar. Sampai bertemu di Yogyakarta 8-9 September 2018.</p>
</body>
</html>