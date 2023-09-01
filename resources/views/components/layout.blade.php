<x-head></x-head>
<x-topbar :company="$company"></x-topbar>
<x-navbar :company="$company"></x-navbar>
@yield('content')
<x-footer :company="$company"></x-footer>