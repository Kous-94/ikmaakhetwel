<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraak Herinnering</title>
</head>
<body>
    <h1>Herinnering: Uw Afspraak bij UNeed-IT</h1>
    <p>Beste {{ $appointment->name }},</p>
    <p>Dit is een herinnering voor uw afspraak bij UNeed-IT:</p>
    <p><strong>Datum en Tijd:</strong> {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('d-m-Y H:i') }}</p>
    <p><strong>Reden voor Bezoek:</strong> {{ $appointment->reason }}</p>
    <p>We kijken ernaar uit u te ontvangen!</p>
    <p>Met vriendelijke groet,</p>
    <p>Het UNeed-IT Team</p>
</body>
</html>
