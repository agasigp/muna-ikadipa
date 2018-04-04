<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfirmasi Donasi Muna Ikadipa Ke XII</title>
</head>
<body>
    <p>Yth bapak/ibu {{ $donation->name }}, </p>
    <p>Anda sudah mendaftar menjadi donatur untuk acara MUNA IKADIPA Ke XII. Kami ucapkan terima kasih sebelumnya.</p>
    <p>Kami mengharapkan dana donasi dari anda dapat disampaikan kepada panitia MUNA Ke - XII IKADIPA selambatnya pada tanggal <b>30 Juli 2018</b>. Dana dapat ditransfer ke rekening <b>Mandiri 1370011324361 a/n Ryna Yanuaryska</b>.</p>
    <p>Konfirmasi pembayaran dapat dilakukan melalui alamat berikut : <a href="{{ env('APP_URL') . '/payment-confirm' }}">{{ env('APP_URL') . '/payment-confirm' }}</a></p>
    <p>Terima kasih sudah mendaftar untuk menjadi donatur.</p>
</body>
</html>