<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{ asset('assets/dashboard/images/logo.png') }}">
    <meta name="apple-mobile-web-app-title" content="Smartend">
    <base href="{{ route("adminHome") }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{ asset('assets/dashboard/images/logo.png') }}">

    <title>✏️ {{ $title }}</title>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/keditor/plugins/bootstrap-3.4.1/css/bootstrap.min.css') }}" data-type="keditor-style"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/keditor/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}"
          data-type="keditor-style"/>
    <!-- Start of KEditor styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/keditor/dist/css/keditor.css') }}"
          data-type="keditor-style"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/keditor/dist/css/keditor-components.css') }}"
          data-type="keditor-style"/>
    <!-- End of KEditor styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/keditor/plugins/code-prettify/src/prettify.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/keditor/css/custom.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/dashboard/js/sweetalert/sweetalert.css') }}">
    <style>
        .keditor-topbar {
            background: {{Helper::GeneralSiteSettings("style_color2")}};
        }
        .keditor-topbar-btn.active, .keditor-topbar-btn:hover {
            background: {{Helper::GeneralSiteSettings("style_color1")}};
            color: #fff !important;
        }
    </style>
</head>

<body class="{{ @Helper::currentLanguage()->direction }}">
<div data-keditor="html">
    <div id="content-area">
        {!! $content !!}
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/keditor/plugins/jquery-1.11.3/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/keditor/plugins/bootstrap-3.4.1/js/bootstrap.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/keditor/plugins/ckeditor-4.11.4/ckeditor.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/formBuilder-2.5.3/form-builder.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/formBuilder-2.5.3/form-render.min.js') }}"></script>
<!-- Start of KEditor scripts -->
<script type="text/javascript" src="{{ asset('assets/keditor/dist/js/keditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/keditor/dist/js/keditor-components.js') }}"></script>
<!-- End of KEditor scripts -->
<script type="text/javascript" src="{{ asset('assets/keditor/plugins/code-prettify/src/prettify.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/js-beautify-1.7.5/js/lib/beautify.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/js-beautify-1.7.5/js/lib/beautify-html.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/keditor/js/custom.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/sweetalert/sweetalert.min.js') }}"></script>
<script type="text/javascript" data-keditor="script">
    $(function () {
        $('#content-area').keditor({
            title: '️ {{ __("backend.edit") }} : {{ $title }}',
            snippetsUrl: '{{ route('keditorSnippets') }}',
            locale: {
                viewOnMobile: 'View on mobile',
                viewOnTablet: 'View on tablet',
                viewOnLaptop: 'View on laptop',
                viewOnDesktop: 'View on desktop',
                previewOn: 'Preview ON',
                previewOff: 'Preview OFF',
                fullscreenOn: 'Fullscreen ON',
                fullscreenOff: 'Fullscreen Off',
                save: 'Save',
                addContent: 'Add content',
                addContentBelow: 'Add content below',
                pasteContent: 'Paste content',
                pasteContentBelow: 'Paste content below',
                move: 'Drag',
                moveUp: 'Move up',
                moveDown: 'Move down',
                setting: 'Setting',
                copy: 'Copy',
                cut: 'Cut',
                delete: 'Delete',
                snippetCategoryLabel: 'Category',
                snippetCategoryAll: 'All',
                snippetCategorySearch: 'Type to search...',
                columnResizeTitle: 'Drag to resize',
                containerSetting: 'Container Settings',
                confirmDeleteContainerText: 'Are you sure that you want to delete this container? This action can not be undone!',
                confirmDeleteComponentText: 'Are you sure that you want to delete this component? This action can not be undone!',
            },
            widthMobile: 390,
            widthTablet: 820,
            widthLaptop: 1050,
            minWidthDesktop: 1170,
            contentStyles: [
                {
                    id: 'cssStyle',
                    content: '.keditor-btn{padding:10px 20px;height: 40px;font-size: 20px;background-color: {{ Helper::GeneralSiteSettings("style_color2") }} !important;color:#fff!important;box-shadow:none;border:0!important;}'
                }
            ],
            onSave: function (content) {
                var xhr = $.ajax({
                    type: "POST",
                    url: "<?php echo route("keditorSave"); ?>",
                    data: {
                        "_token": '{{ csrf_token() }}',
                        "topic_id": '{{ $Topic->id }}',
                        "html_content": content,
                        "lang": '{{ $lang }}',
                    },
                    success: function (result) {
                        var obj_result = jQuery.parseJSON(result);
                        if (obj_result.stat == 'success') {
                            swal({
                                title: obj_result.msg,
                                text: "",
                                html: true,
                                type: "success",
                                confirmButtonText: "{{ __("backend.close") }}",
                                confirmButtonColor: "#acacac",
                                timer: 5000,
                            });
                        } else {
                            swal({
                                title: obj_result.msg,
                                text: "",
                                html: true,
                                type: "error",
                                confirmButtonText: "{{ __("backend.close") }}",
                                confirmButtonColor: "#acacac",
                            });
                        }
                    }
                });
            },
        });
    });
</script>
</body>
</html>
