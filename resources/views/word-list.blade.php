<div style="font-size: 24px;">Left Time for disabling BlockingWord:<span style="color: red">{{$diffTime}}</span></div>

<div style="margin-bottom: 89px"></div>
<x-app
    :cnt="$cnt"
    :lists="$lists"
    :export="route('word-download')"
    :import="route('word-csv-import')"
    :filename="$filename"
     >
</x-app>



