@extends('layouts.master')
@section('content')
<div ng-app="orchestra" ng-controller="musicCreateCtrl" ng-init="init()">
<div class="content_middle">
    <div class="container">
        <div class="content_middle_box_ed">
            <div class="top_grid">
            <div class="grid1 col-md-12">
                <div class="inner_wrap">
                    <div class="pull-right" style="padding-bottom: 10px;">
                        Timeout<input type="text" class="form-control" ng-model="timeOut">
                        <a ng-click="playMusic()" class="btn btn-success">Play</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-2" style="padding-right: 0px;">
                        <div class="music-box-instrument">
                            <table class="table table-striped">
                                <tr>
                                    <th>Alat Musik</th>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('images/slenthem-pelog.jpg')}}">
                                        <span>Slenthem Pelog</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('images/bonangbarung.jpg')}}">
                                        <span>Bonang Barung</span>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="col-md-10" style="padding-left: 0px;">
                        <div class="music-box-notes">
                            <table class="table table-striped">
                                <tr>
                                    <th ng-repeat="note in notes['slenthem'] track by $index">@{{$index + 1}}</th>
                                </tr>
                                <tr>
                                    <td ng-repeat="note in notes['slenthem'] track by $index">
                                        <a ng-click="changeNote('slenthem',$index)" ng-class="['btn','btn-primary','btn-instrument']">@{{notes['slenthem'][$index]}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td ng-repeat="note in notes['bonangbarung'] track by $index">
                                        <a ng-click="changeNote('bonangbarung',$index)" ng-class="['btn','btn-primary','btn-instrument']">@{{notes['bonangbarung'][$index]}}</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
{{--start of bonangbarung note block--}}
    <div class="modal note-block" id="bonangbarung">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Bonang Barung
                </div>
                <div class="modal-body">
                    <div>
                        <ul>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('C')">C</a></li>
                            <li><a class="btn btn-primary btn-instrument" disabled>C#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('D')">D</a></li>
                            <li><a class="btn btn-primary btn-instrument" disabled>D#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('E')">E</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('F')">F</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li><a class="btn btn-primary btn-instrument" disabled>F#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('G')">G</a></li>
                            <li><a class="btn btn-primary btn-instrument" disabled>G#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('A')">A</a></li>
                            <li><a class="btn btn-primary btn-instrument" disabled>A#</a></li>
                            <li><a class="btn btn-primary btn-instrument" ng-click="addNote('B')">B</a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" ng-click="removeNote()" class="btn btn-default">Hapus</button>
                    <button data-dismiss="modal" class="btn btn-default">Batal</button>
                </div>
            </div>
        </div>

    </div>
{{--end of bonangbarung note block--}}
<div class="modal note-block" id="slenthem">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Slenthem
            </div>
            <div class="modal-body">
                <div>
                    <ul>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('C')">C</a></li>
                        <li><a class="btn btn-primary btn-instrument" disabled>C#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('D')">D</a></li>
                        <li><a class="btn btn-primary btn-instrument" disabled>D#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('E')">E</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('F')">F</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a class="btn btn-primary btn-instrument" disabled>F#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('G')">G</a></li>
                        <li><a class="btn btn-primary btn-instrument" disabled>G#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('A')">A</a></li>
                        <li><a class="btn btn-primary btn-instrument" disabled>A#</a></li>
                        <li><a class="btn btn-primary btn-instrument" ng-click="addNote('B')">B</a></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" ng-click="removeNote()" class="btn btn-default">Hapus</button>
                <button data-dismiss="modal" class="btn btn-default">Batal</button>
            </div>
        </div>
    </div>

</div>
<div ng-show="false">
    <audio controls class="tone" id="slenthemC" >
        <source src="{{asset('music/slentempl1.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemD">
        <source src="{{asset('music/slentempl2.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemE">
        <source src="{{asset('music/slentempl3.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemF">
        <source src="{{asset('music/slentempl4.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemG">
        <source src="{{asset('music/slentempl5.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemA">
        <source src="{{asset('music/slentempl6.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="slenthemB">
        <source src="{{asset('music/slentempl7.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungC">
        <source src="{{asset('music/bonangbarung1.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungD">
        <source src="{{asset('music/bonangbarung2.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungE">
        <source src="{{asset('music/bonangbarung3.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungF">
        <source src="{{asset('music/bonangbarung4.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungG">
        <source src="{{asset('music/bonangbarung5.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungA">
        <source src="{{asset('music/bonangbarung6.wav')}}" type="audio/wav">
    </audio>
    <audio controls class="tone" id="bonangbarungB">
        <source src="{{asset('music/bonangbarung7.wav')}}" type="audio/wav">
    </audio>
</div>
</div>
@endsection
@section('script')
    @parent
    <script src='{{asset("js/angular/angular.min.js")}}'></script>
    <script src='{{asset("js/orchestra-angular.js")}}'></script>

@endsection
