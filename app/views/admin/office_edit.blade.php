@extends('admin.layout')

@section('head')
    @parent
    <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-slider.min.css') }}"/>
@stop

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Редактирование офиса</h3>
        </div>
    </div>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/office')}}">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="inputTitle">Название</label>
            <div class="col-sm-10">
                <input value="{{$office->title}}" class="form-control" type="text" name="title" id="inputTitle"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="inputPhone">Телефон</label>
            <div class="col-sm-10">
                <input value="{{$office->phone}}" class="form-control" type="text" name="phone" id="inputPhone"/>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Электронная почта</label>
            <div class="col-sm-10">
                <input value="{{$office->email}}" type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
            </div>
        </div>

        <div class="form-group"><label class="col-sm-2 control-label" for="inputAdress">Адрес</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="adress" id="inputAdress" rows="5"> {{$office->adress}}</textarea>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label" for="schedule">Расписание</label>
            <div class="col-sm-10" id="schedule">

                @foreach(['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'] as $k => $v)
                    <div class="row">
                        <label class="col-sm-2 control-label" for="'{{ 'day' . ($k+1) }}"> {{ $v }}  </label>
                        <div class="col-sm-8" id=" {{ 'day' . ($k+1) }}">
                            <input id="slider{{$k + 1}}" type="text" data-slider-min="0" data-slider-max="24"
                                   data-slider-step="0.5" data-slider-value="[8, 18]" data-slider-enabled="true" name=" {{ 'day' . ($k+1) }}"/>
                            <input id="slider{{$k + 1}}-enabled" type="checkbox" name=" {{ 'isdayoff' . ($k+1) }}"/> Не работает
                        </div>
                    </div>
                @endforeach

                <div class="col-sm-offset-2 col-sm-10">
                    <!--                    TODO: make it work-->
                    <button class="btn btn-sm btn-default " type="button">Сбросить расписание</button>
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
                var slider_id = "#slider" + i;
                var checkbox_id = "#slider" + i + "-enabled";

                $(slider_id).slider();

                $(checkbox_id).click(function() {
                    console.log(checkbox_id);
                    if(!this.checked) {
                        $(slider_id).slider("enable");
                    }
                    else {
                        console.log('disable?', slider_id);
                        $(slider_id).slider("disable");
                    }
                });

            }
            //        $("#ex7").slider();
            //        $("#ex8").slider();


        </script>

        {{ Form::token() }}

    </form>
    {{d($office)}}



@stop

