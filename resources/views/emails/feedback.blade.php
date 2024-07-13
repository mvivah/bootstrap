
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="card-title">
          Sender: {{ $data['txtName']}}
        </div>
        <div class="card-body">
          <h5 class="card-header">From:{{ $data['txtEmail']}}</h5>
          <p class="card-text">Subject: {{ $data['txtSubject']}}</p>
          <p class="card-text">Details: {{ $data['txtMsg']}}</p>
        </div>
      </div>

</body>
</html>
<div>
</div>

