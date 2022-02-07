<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
        @include("admin.layout.aside._default")
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @include("admin.layout._header")
            <div class="d-flex flex-column flex-column-fluid">
                <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
                    @include("admin.layout._content")
                </div>
            </div>
            @include("admin.layout._footer")
        </div>
    </div>
</div>
@include("admin.layout.explore._main")
@include("admin.layout._scrolltop")


