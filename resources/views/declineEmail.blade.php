<p>Hello there!</p>

<p>We are sorry to inform you that unfortunately, your registration is unsuccesful because of the
@if ($data1['reason'] == '1')

<p> Invalid SSM Number.</p>

@elseif ($data1['reason'] == '2')

<p> Inadequate Information.</p>

@else

<p> Inaccurate Information.</p>

@endif

<p>If you have any inquiries, please do not hesitate to contact admin of Meowie! :)</p>