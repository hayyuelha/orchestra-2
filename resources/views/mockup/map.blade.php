@extends('layouts.master')
@section('content')
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
                    "value": 1,
                    "valueins": 1,
                    "valuesong": 0
                },
                {
                    "hc-key": "id-ac",
                    "value": 2,
                    "valueins": 1,
                    "valuesong": 1
                },
                {
                    "hc-key": "id-ki",
                    "value": 3,
                    "valueins": 1,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-jt",
                    "value": 4,
                    "valueins": 2,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-be",
                    "value": 5,
                    "valueins": 2,
                    "valuesong": 3                    
                },
                {
                    "hc-key": "id-bt",
                    "value": 6,
                    "valueins": 4,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-kb",
                    "value": 7,
                    "valueins": 3,
                    "valuesong": 4                    
                },
                {
                    "hc-key": "id-bb",
                    "value": 8,
                    "valueins": 4,
                    "valuesong": 4
                },
                {
                    "hc-key": "id-ba",
                    "value": 9,
                    "valueins": 5,
                    "valuesong": 4
                },
                {
                    "hc-key": "id-ji",
                    "value": 10,
                    "valueins": 3,
                    "valuesong": 7
                },
                {
                    "hc-key": "id-ks",
                    "value": 1,
                    "valueins": 1,
                    "valuesong": 0
                },
                {
                    "hc-key": "id-nt",
                    "value": 2,
                    "valueins": 1,
                    "valuesong": 1
                },
                {
                    "hc-key": "id-se",
                    "value": 3,
                    "valueins": 1,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-kr",
                    "value": 4,
                    "valueins": 2,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-ib",
                    "value": 5,
                    "valueins": 2,
                    "valuesong": 3
                },
                {
                    "hc-key": "id-su",
                    "value": 6,
                    "valueins": 4,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-ri",
                    "value": 7,
                    "valueins": 3,
                    "valuesong": 4
                },
                {
                    "hc-key": "id-sw",
                    "value": 8,
                    "valueins": 4,
                    "valuesong": 4
                },
                {
                    "hc-key": "id-la",
                    "value": 9,
                    "valueins": 5,
                    "valuesong": 4
                },
                {
                    "hc-key": "id-sb",
                    "value": 10,
                    "valueins": 3,
                    "valuesong": 7
                },
                {
                    "hc-key": "id-ma",
                    "value": 1,
                    "valueins": 1,
                    "valuesong": 0
                },
                {
                    "hc-key": "id-nb",
                    "value": 2,
                    "valueins": 1,
                    "valuesong": 1
                },
                {
                    "hc-key": "id-sg",
                    "value": 3,
                    "valueins": 1,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-st",
                    "value": 4,
                    "valueins": 2,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-pa",
                    "value": 5,
                    "valueins": 2,
                    "valuesong": 3
                },
                {
                    "hc-key": "id-1024",
                    "value": 6,
                    "valueins": 4,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-jk",
                    "value": 7,
                    "valueins": 3,
                    "valuesong": 4
                },
                {
                    "hc-key": "id-jr",
                    "value": 8,
                    "valueins": 4,
                    "valuesong": 4
                },
                {
                    "hc-key": "id-go",
                    "value": 9,
                    "valueins": 5,
                    "valuesong": 4
                },
                {
                    "hc-key": "id-yo",
                    "value": 10,
                    "valueins": 3,
                    "valuesong": 7
                },
                {
                    "hc-key": "id-kt",
                    "value": 1,
                    "valueins": 1,
                    "valuesong": 0
                },
                {
                    "hc-key": "id-sl",
                    "value": 2,
                    "valueins": 1,
                    "valuesong": 1
                },
                {
                    "hc-key": "id-sr",
                    "value": 3,
                    "valueins": 1,
                    "valuesong": 2
                },
                {
                    "hc-key": "id-ja",
                    "value": 4,
                    "valueins": 2,
                    "valuesong": 2
                }
            ];

            // Initiate the chart
            $('#map').highcharts('Map', {

                title : {
                    text : 'Temukan alat-alat musik tradisional Indonesia'
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
                    min: 0,
                    minColor: '#00cc00',
                    maxColor: '#001100'
                },

                series : [{
                    data : data,
                    mapData: Highcharts.maps['countries/id/id-all'],
                    joinBy: 'hc-key',
                    name: '',
                    states: {
                        hover: {
                            color: '#ff9147'
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
                        return '<b>'+this.point.name+'</b><br/><span class="glyphicon glyphicon-headphones"></span> '+ this.point.valueins + ' alat musik <span class="glyphicon glyphicon-music"></span> ' + this.point.valuesong + ' lagu';
                    }
                }
            });
        });

    </script>
@endsection
