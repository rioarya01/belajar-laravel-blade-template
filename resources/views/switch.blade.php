<html>
<body>
    @switch($value)
        @case('A')
            Memuaskan
            @break
        @case('B')
            Bagus
            @
        @case('C')
            Cukup
            @break
        @default
            Tidak Lulus
    @endswitch
</body>
</html>
