<div class="d-sm-flex align-items-center justify-content-between border-bottom">
    <div class="breadcrumb border-0">
        @stack('breadcrumb')
    </div>
    <div>
        <div class="btn-wrapper">
            {{-- Export --}}
            @include('includes.export.button-export')

            @stack('buttonExport')
        </div>
    </div>
</div>
