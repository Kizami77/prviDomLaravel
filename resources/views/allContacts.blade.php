<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>allContacts</title>
</head>
<body>
  <h3>Lista kontakata</h3>

@foreach($allContacts as $contact)
  {{$contact->email}}
    {{$contact->message}}
@endforeach
</body>
</html>
