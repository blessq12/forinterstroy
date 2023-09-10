<div class="topbar">
    <div class="container">
        {{-- mobile first --}}
        <div class="row d-flex d-md-none d-lg-none">
            <div class="col-6 d-flex align-items-center">
                <i class="fa fa-phone" style="padding-right: 6px"></i>
                <span style="font-size: 12px">{{ $company->phone }}</span>
            </div>
            <div class="col-6 text-end">
                Fast links
            </div>
        </div>
        {{-- tablet --}}
        <div class="row d-none d-md-flex d-lg-flex">
            <div class="col-4 d-flex align-items-center">
                <i class="fa fa-phone" style="padding-right: 6px"></i>
                {{ $company->phone }}
            </div>
            <div class="col-4 text-center">
                
            </div>
            <div class="col-4 d-flex align-items-center justify-content-end">
                <i class="fa fa-map-marker" style="padding-right: 6px"></i>
                <span style="font-size: 12px">{{ $company->city }}, {{ $company->street }}, {{ $company->house }}</span>
            </div>
        </div>
    </div>
</div>