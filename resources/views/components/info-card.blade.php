@props(['title', 'count' => 0, 'type' => 'info', 'icon' => 'list'])

<div class="card card-stats card-{{ $type }}">
    <div class="card-body ">
        <div class="row">
            <div class="col-5">
                <div class="icon-big text-center">
                    <i class="la la-{{ $icon }}"></i>
                </div>
            </div>
            <div class="col-7 d-flex align-items-center">
                <div class="numbers">
                    <p class="card-category">{{ $title }}</p>
                    <h4 class="card-title">{{ $count }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
