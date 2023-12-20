<!DOCTYPE html>

<html lang="en">

<head>
    <base href="">
    <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel
        by Keenthemes</title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('metronic/demo1/dist/') }}/assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('metronic/demo1/dist/') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/demo1/dist/') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/demo1/dist/') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    @stack('css')
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('layouts.template.aside')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('layouts.template.header')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
                                    <!--begin::Separator-->
                                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                    <!--end::Separator-->
                                    <!--begin::Description-->
                                    <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small>
                                    <!--end::Description-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    {{ $slot ?? '' }}
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layouts.template.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Scrolltop-->
    @include('layouts.template.scrolltap')
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script>
        var hostUrl = "{{ asset('metronic/demo1/dist/') }}/assets/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('metronic/demo1/dist/') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('metronic/demo1/dist/') }}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('metronic/demo1/dist/') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('metronic/demo1/dist/') }}/assets/js/custom/widgets.js"></script>
    <script src="{{ asset('metronic/demo1/dist/') }}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{ asset('metronic/demo1/dist/') }}/assets/js/custom/modals/create-app.js"></script>
    <script src="{{ asset('metronic/demo1/dist/') }}/assets/js/custom/modals/upgrade-plan.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    @livewireScripts
    @stack('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('Delete', event => {
            Swal.fire(
                'Deleted!', 'Data has been deleted.', 'success'
            )
        });
        window.addEventListener('Success', event => {
            Swal.fire(
                'Good job!', 'Data has been added.', 'success'
            )
        });
        window.addEventListener('Update', event => {
            Swal.fire(
                'Good job!', 'Data has been updated.', 'success'
            )
        });
        window.addEventListener('UpdatePassword', event => {
            Swal.fire(
                'Good job!', 'Change Password Succesfull.', 'success'
            )
        });
        window.addEventListener('Error', event => {
            Swal.fire(
                'Warning !', 'Data Not Excecution.', 'error'
            )
        });

        window.addEventListener('swal:modal', event => {
            Swal.fire({
                icon: event.detail.type, // Jenis alert
                title: event.detail.title, // Judul pesan
                text: event.detail.text, // Isi pesan
                toast: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true
            });
        });
    </script>
</body>

</html>
