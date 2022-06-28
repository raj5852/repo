<!DOCTYPE html>
<html>

<head>
    <title>QR code</title>
</head>

<body>
    <h3 style="text-align: center">{{ $name }}</h3>
    <p style="text-align: center">{{ $size }} / {{ $weight }} </p>
    <div style="text-align: center">
        <img style="text-align: center"
            src="https://chart.googleapis.com/chart?cht=qr&chs=230x230&chl={{ $randQR }}" alt="">
    </div>

    <p style="text-align: center"><b>Date & Time :</b> {{ $dateTime }} </p>

</body>

</html>
