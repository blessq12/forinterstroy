<nav>
    <div class="container">
        {{-- mobile --}}
        <div class="row d-flex d-md-none d-lg-none">
            <div class="col-6">
                {{ $company->name }}
            </div>
            <div class="col-6 text-end">
                ham
            </div>
        </div>
        {{-- tablet/desktop --}}
        <div class="row d-none d-md-flex">
            <div class="col-4">
                {{ $company->name }}
            </div>
            <div class="col-4 text-center">
                nav section
            </div>
            <div class="col-4 text-end">
                fav/question
            </div>
        </div>
    </div>
</nav>