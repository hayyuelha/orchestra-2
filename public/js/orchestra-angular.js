angular.module("orchestra",[])
.controller("musicCreateCtrl",['$scope','$timeout',function($scope,$timeout){
    var jquery = angular.element;
    $scope.notePos = 0;
    $scope.instrumentId = "";
    $scope.notes = {};
    $scope.timeOut = 1000;
    var LIMIT = 20;
    $scope.init = function(){
        //init the notes to have 30.
        $scope.notes['slenthem'] = [];
        $scope.notes['bonangbarung'] = [];
        for(var i = 0; i < LIMIT; i++){
            $scope.notes['slenthem'].push('');
            $scope.notes['bonangbarung'].push('');
        }
    }
    $scope.changeNote = function(instrumentId,notePos) {
        $scope.notePos = notePos;
        $scope.instrumentId = instrumentId;
        jquery(".note-block#" + instrumentId).modal('show');
        //jquery(".tone[rel="+instrumentId+"]").prop("currentTime",0);
        //jquery(".tone[rel="+instrumentId+"]").trigger("play");
    }

    $scope.addNote = function(value){
        $scope.notes[$scope.instrumentId][$scope.notePos] = value;
        console.log($scope.instrumentId + " " + $scope.notePos + " " + $scope.notes[$scope.instrumentId][$scope.notePos]);
        playTone($scope.instrumentId,value,0);
        jquery(".note-block#"+ $scope.instrumentId).modal('hide');
    }

    $scope.removeNote = function(){
        $scope.notes[$scope.instrumentId][$scope.notePos] = '';
    }

    $scope.playMusic = function(){
        //console.log($scope.notes);
        for(var i = 0; i < LIMIT; i++){
            var instrumentId = "slenthem";
            var note = ($scope.notes[instrumentId][i]).substring(0);
            playTone(instrumentId,note,(i * $scope.timeOut));
            instrumentId = "bonangbarung";
            note = ($scope.notes[instrumentId][i]).substring(0);
            playTone(instrumentId,note,(i * $scope.timeOut));
        }
    }

    playTone = function(instrumentId,note,delay){
        if (note == "") return;
        console.log(instrumentId,note,delay);
        var obj = jquery(".tone#"+instrumentId+note);
        $timeout(function(){
            obj.prop("currentTime",0); obj.trigger("play");
        },delay);
    }


}]);