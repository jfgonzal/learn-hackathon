<html>
<head>
<style>
    menu, ol, ul, li {
        padding: 0;
        list-style: none;
    }
</style>
</head>
<body>
A new user has signed up and requires your Attention.<br/>
<h2>Company Name:</h2> {{ $data['name'] }}<br/>
<h2>Company Address:</h2>
{{ $data['address1'] }}<br/>
@if($data['address2'] != null)
    {{ $data['address2'] }}<br/>
@endif
{{ $data['city'] }}<br/>
{{ $data['state'] }}<br/>
{{ $data['zip'] }}<br/>
{{ $data['us'] }}<br/>
<h2>Contact Name</h2>
{{ $data['first_name'] }} {{ $data['last_name'] }}<br/>
<h2>Email</h2>
{{ $data['email'] }}<br/>
<h2>What Services do you need help with?</h2>
@if(count($data['attribute']) > 0)
    <ul>
    @foreach($data['attribute'] as $meta){
    <li>{{ $meta }}</li>
    @endforeach
    </ul>
@endif
<h3>Preferred Contact Information</h3>
{{ $data['preferred_contact'] }}<br/>
</body>
</html>
