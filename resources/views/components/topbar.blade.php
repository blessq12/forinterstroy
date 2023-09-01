<div class="topbar">
    <div class="container">
        {{-- mobile first --}}
        <div class="row d-flex d-md-none d-lg-none">
            <div class="col-6">
                {{ $company->phone }}
            </div>
            <div class="col-6 text-end">
                Fast links
            </div>
        </div>
        {{-- tablet --}}
        <div class="row d-none d-md-flex d-lg-flex">
            <div class="col-4">
                {{ $company->phone }}
            </div>
            <div class="col-4 text-center">
                Constructions link
            </div>
            <div class="col-4 text-end">
                Fast links
            </div>
        </div>
    </div>
</div>