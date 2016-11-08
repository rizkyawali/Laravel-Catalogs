<body>

<h3>
    Hello {!! $detail ['email'] !!}
</h3>

<p>
    Somebody request for changes your password,
    <br>
    if you never request for changes your password, please ignore this email,
    <br>
    but if you do, please click link below for further intoduction
</p>

{!! link_to(route('forgotpasswords.edit', ['id' => $detail['id'], 'code' => $detail ['code']]), 'Click Me') !!}

<h2>Thanks</h2>

</body>