<html>
<body>
@php
    class person {
        public string $name;
        public string $address;
    }

    $person = new Person();
    $person->name = "Eko";
    $person->address = "Indonesia";

@endphp

<p>{{$person->name}}</p>
<p>{{$person->address}}</p>

</body>
</html>
