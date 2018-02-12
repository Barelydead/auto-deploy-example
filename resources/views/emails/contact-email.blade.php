Message from the website contact form.

@foreach($data as $key => $value)
    <h4>{{ $key }}</h4>
    <p>{{ $value }}</p>
    <br>
@endforeach
