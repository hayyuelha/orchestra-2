@extends('layouts.master')
@section('content')
    <span class="glyphicon glyphicon-search"></span>
<div id="map"></div>
    <style>
        #map:hover {
            cursor: pointer;
        }
    </style>
@endsection
@section('script')
    @parent
    <script src="{{asset('js/map/highmaps.js')}}"></script>
    <script src="{{asset('js/map/exporting.js')}}"></script>
    <script src="{{asset('js/map/id-all.js')}}"></script>

    <script type="text/javascript">
        $(function () {

            // Prepare demo data
            var data = [
                {
                    "hc-key": "id-3700",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ac",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ki",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-jt",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-be",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-bt",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-kb",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-bb",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ba",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ji",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ks",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-nt",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-se",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-kr",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ib",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-su",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ri",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-sw",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-la",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-sb",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ma",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-nb",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-sg",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-st",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-pa",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-1024",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-jk",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-jr",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-go",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-yo",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-kt",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-sl",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-sr",
                    "value": {instrument:1,song:2}
                },
                {
                    "hc-key": "id-ja",
                    "value": {instrument:1,song:2}
                }
            ];

            // Initiate the chart
            $('#map').highcharts('Map', {

                title : {
                    text : 'Temukan alat musik di Indonesia'
                },

                subtitle : {
                    text : 'Arahkan kursor ke provinsi yang ingin dilihat'
                },

                mapNavigation: {
                    enabled: true,
                    buttonOptions: {
                        verticalAlign: 'bottom'
                    }
                },

                colorAxis: {
                    min: 0
                },

                series : [{
                    data : data,
                    mapData: Highcharts.maps['countries/id/id-all'],
                    joinBy: 'hc-key',
                    name: '',
                    states: {
                        hover: {
                            color: '#BADA55'
                        }
                    },
                    dataLabels: {
                        enabled: false,
                        format: '{point.name}'
                    }

                }],
                tooltip: {
                    useHTML: true,
                    formatter: function(){
                        return '<b>'+this.point.name+'</b><br/><span class="glyphicon glyphicon-headphones"></span> '+ this.point.value.instrument + ' alat musik <span class="glyphicon glyphicon-music"></span> ' + this.point.value.song + ' lagu';
                    }
                }
            });
        });

    </script>
@endsection
