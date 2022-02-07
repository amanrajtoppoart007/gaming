<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--layout-partial:layout/aside/_default.html-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--layout-partial:layout/_header.html-->
        @include("admin.layout._header")
        <!--begin::Main-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
                    <!--layout-partial:layout/_content.html-->
                    @include("admin.layout._content")
                </div>
                <!--end::Content-->
            </div>
            <!--end::Main-->
            <!--layout-partial:layout/_footer.html-->
            @include("admin.layout._footer")
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--layout-partial:partials/layout/_header_search.html-->
<!--layout-partial:layout/_mega-menu.html-->
<!--begin::Drawers-->
<!--begin::Chat drawer-->
<!--layout-partial:layout/explore/_main.html-->
@include("admin.layout.explore._main")
<!--end::Drawers-->
<!--layout-partial:layout/_scrolltop.html-->
@include("admin.layout._scrolltop")
<!--end::Main-->

