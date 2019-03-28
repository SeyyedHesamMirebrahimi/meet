<div class="row no-gutter row-year-title">
    <div class="col-lg-1 d-none d-lg-block">
        <div class="card year-title">
            <h5 class="card-title">
                {{App\Http\Controllers\Tools\Persian::convertToPersianNumber($year)}}
            </h5>
        </div>
    </div>
    <div class="col-lg-11">
        <div class="row">
        @for($week=0;$week<6;$week++)
            @include('showCal.week_title')
        @endfor
        </div>
    </div>
</div>

