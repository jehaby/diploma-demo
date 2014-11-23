@extends('admin.layout')

@section('head')
@parent
<script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/bootstrap-slider.min.css') }}"/>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <h3>Добавление нового офиса</h3>
    </div>
</div>

<form class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-2 control-label" for="inputTitle">Название</label>
        <div class="col-sm-10"><input class="form-control" type="text" name="" id="inputTitle"/></div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="inputPhone">Телефон</label>
        <div class="col-sm-10"><input class="form-control" type="text" name="" id="inputPhone"/></div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Электронная почта</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>

    <div class="form-group"><label class="col-sm-2 control-label" for="inputAdress">Адрес</label>
        <div class="col-sm-10"><textarea class="form-control" name="" id="inputAdress" rows="5"></textarea>
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-2 control-label" for="schedule">Расписание</label>
        <div class="col-sm-10" id="schedule">

            @foreach([1, 2, 3, 4, 5, 6, 7] as $i)
            <div class="row">
            <label class="col-sm-2 control-label" for="monday"> ПН </label>
            <div class="col-sm-8" id="monday">
                <input id="ex7" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false"/>
                <input id="ex7-enabled" type="checkbox"/> Enabled
            </div>
            </div>
            @endforeach

            <div class="row">
            <label class="col-sm-2 control-label" for="tuesday"> ВТ </label>
            <div class="col-sm-8" id="tuesday">
                <input id="ex8" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false"/>
                <input id="ex8-enabled" type="checkbox"/> Enabled
            </div>
            </div>

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
    </div>


    <script>
//        With JQuery
        for(var i = 1; i<9; i++) {
            var s = "#ex" + i;
            console.log(s);
            $(s).slider();
        }
//        $("#ex7").slider();
//        $("#ex8").slider();

        $("#ex7-enabled").click(function() {
            if(this.checked) {
                // With JQuery
                $("#ex7").slider("enable");

            }
            else {
                // With JQuery
                $("#ex7").slider("disable");
            }
        });

    </script>

</form>



@stop

