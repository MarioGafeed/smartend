<?php
$cf_title_var = "title_" . @Helper::currentLanguage()->code;
$cf_title_var2 = "title_" . env('DEFAULT_LANGUAGE');

$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');
if ($WebmasterSection->$title_var != "") {
    $WebmasterSectionTitle = $WebmasterSection->$title_var;
} else {
    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
}
?>
<html lang="{{ @Helper::currentLanguage()->code }}" dir="{{ @Helper::currentLanguage()->direction }}">
<head>
    <meta charset="UTF-8">
    <title>{{ $WebmasterSectionTitle }} | {{ __('backend.print') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/print.css') }}" type="text/css"/>
</head>
<body class="{{ @Helper::currentLanguage()->direction }}">

@if(count($Topics) >0)
    <div class="container" id="container">
        <table class="responsive-table center-table" style="width: 100%">
            <thead class="dker">
            @if($WebmasterSection->title_status)
                <th style="text-align: {{ @Helper::currentLanguage()->left }} !important;">{{ __('backend.topicName') }}</th>
            @endif
            @if($WebmasterSection->date_status)
                <th style="width:100px;">{{ __('backend.topicDate') }}</th>
            @endif
            @if($WebmasterSection->expire_date_status)
                <th style="width:100px;">{{ __('backend.expireDate') }}</th>
            @endif
            @if($WebmasterSection->visits_status)
                <th style="width:80px;">{{ __('backend.visits') }}</th>
            @endif
            @if($WebmasterSection->case_status)
                <th style="width:80px;">{{ __('backend.status') }}</th>
            @endif
            @foreach($WebmasterSection->customFields as $customField)
                <?php
                // check permission
                $view_permission_groups = [];
                if ($customField->view_permission_groups != "") {
                    $view_permission_groups = explode(",", $customField->view_permission_groups);
                }
                if (in_array(Auth::user()->permissions_id, $view_permission_groups) || in_array(0, $view_permission_groups) || $customField->view_permission_groups == "") {
                // have permission & continue
                ?>
                @if ($customField->lang_code == "all" || $customField->lang_code == @Helper::currentLanguage()->code)
                    <?php
                    if ($customField->$cf_title_var != "") {
                        $cf_title = $customField->$cf_title_var;
                    } else {
                        $cf_title = $customField->$cf_title_var2;
                    }
                    ?>
                    <th class="text-center">{{ $cf_title }}</th>
                @endif
                <?php
                }
                ?>
            @endforeach
            </thead>
            <tbody>
            @foreach ($Topics as $Topic)
                <tr>
                    <?php
                    if ($Topic->$title_var != "") {
                        $title = $Topic->$title_var;
                    } else {
                        $title = $Topic->$title_var2;
                    }

                    // Get Categories list
                    $section = "";
                    if ($WebmasterSection->sections_status != 0) {
                        foreach ($Topic->categories as $category) {
                            try {
                                if (@$category->section->$title_var != "") {
                                    $cat_title = @$category->section->$title_var;
                                } else {
                                    $cat_title = @$category->section->$title_var2;
                                }
                                if ($cat_title != "") {
                                    $section .= "<span class='label dker b-a text-sm'>" . $cat_title . "</span> ";
                                }

                            } catch (Exception $e) {

                            }

                        }
                        if ($section == "") {
                            $section = "<span style='color: orangered'><i>" . __('backend.topicDeletedSection') . "</i></span>";
                        }
                    }

                    //comments
                    $comments = "";
                    if (count($Topic->newComments) > 0) {
                        $comments = "<div><a href='" . route('topicsComments', [$WebmasterSection->id, $Topic->id]) . "'><span style='color:red'>" . __('backend.comments') . " <span class='label rounded label-sm danger'>" . count($Topic->newComments) . "</span></span></a></div>";
                    }


                    $photo = "";
                    if ($Topic->photo_file != "") {
                        $photo = " <div class=\"pull-right\"><img src=\"" . asset('uploads/topics/' . $Topic->photo_file) . "\" style=\"height: 40px\" alt=\"" . $title . "\"></div>";
                    }

                    $icon = "";
                    if ($Topic->icon != "") {
                        $icon = "<i class=\"fa " . $Topic->icon . "\"></i> ";
                    }
                    ?>
                    @if ($WebmasterSection->title_status)
                        <td style="text-align: {{ @Helper::currentLanguage()->left }} !important;">{!! $photo . "<div class='h6'>" . $icon . $title . "</div>" . $section . $comments !!}</td>
                    @endif
                    <?php
                    foreach (@$Topic->webmasterSection->customFields as $customField) {
                        // check permission
                        $view_permission_groups = [];
                        if ($customField->view_permission_groups != "") {
                            $view_permission_groups = explode(",", $customField->view_permission_groups);
                        }
                        if (in_array(Auth::user()->permissions_id, $view_permission_groups) || in_array(0, $view_permission_groups) || $customField->view_permission_groups == "") {
                            // have permission & continue

                            $cf_saved_val = "";
                            $cf_saved_val_array = array();
                            $TField = $Topic->fields->where("field_id", $customField->id)->first();
                            if (!empty($TField)) {
                                if ($customField->type == 7) {
                                    // if multi check
                                    $cf_saved_val_array = explode(", ", $TField->field_value);
                                } else {
                                    $cf_saved_val = $TField->field_value;
                                }
                            } else {
                                $cf_saved_val = " ";
                            }

                            $cf_data = "";
                            if (($cf_saved_val != "" || count($cf_saved_val_array) > 0) && ($customField->lang_code == "all" || $customField->lang_code == @Helper::currentLanguage()->code)) {
                                if ($customField->type == 12) {
                                    $CF_Vimeo_id = Helper::Get_vimeo_video_id($cf_saved_val);
                                    $cf_data = "<a target='_blank' href='https://player.vimeo.com/video/$CF_Vimeo_id?title=0&amp;byline=0'><i class='fa fa-play'></i></a>";

                                } elseif ($customField->type == 11) {
                                    $CF_Youtube_id = Helper::Get_youtube_video_id($cf_saved_val);
                                    $cf_data = "<a target='_blank' href='https://www.youtube.com/embed/$CF_Youtube_id'><i class='fa fa-play'></i></a>";

                                } elseif ($customField->type == 10) {
                                    $cf_data = "<a target='_blank' href='" . URL::to('uploads/topics/' . $cf_saved_val) . "'><i class='fa fa-play'></i></a>";
                                } elseif ($customField->type == 9) {
                                    $cf_data = "<a target='_blank' href='" . URL::to('uploads/topics/' . $cf_saved_val) . "'><i class='fa fa-play'></i></a>";
                                } elseif ($customField->type == 8) {
                                    $cf_data = "<a target='_blank' href='" . URL::to('uploads/topics/' . $cf_saved_val) . "'><i class='fa fa-picture-o'></i></a>";
                                } elseif ($customField->type == 7) {
                                    $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                    $cf_details_var2 = "details_en" . env('DEFAULT_LANGUAGE');
                                    if ($customField->$cf_details_var != "") {
                                        $cf_details = $customField->$cf_details_var;
                                    } else {
                                        $cf_details = $customField->$cf_details_var2;
                                    }
                                    $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                    $line_num = 1;
                                    foreach ($cf_details_lines as $cf_details_line) {
                                        if (in_array($line_num, $cf_saved_val_array)) {
                                            $cf_data .= "<span class=\"label\">" . $cf_details_line . "</span> ";
                                        }
                                        $line_num++;
                                    }
                                } elseif ($customField->type == 6) {
                                    $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                    $cf_details_var2 = "details_en" . env('DEFAULT_LANGUAGE');
                                    if ($customField->$cf_details_var != "") {
                                        $cf_details = $customField->$cf_details_var;
                                    } else {
                                        $cf_details = $customField->$cf_details_var2;
                                    }
                                    $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                    $line_num = 1;
                                    foreach ($cf_details_lines as $cf_details_line) {
                                        if ($line_num == $cf_saved_val) {
                                            $cf_data .= "<span class=\"label text-sm\">" . $cf_details_line . "</span> ";
                                        }
                                        $line_num++;
                                    }
                                } elseif ($customField->type == 5) {
                                    $cf_data = Helper::dateForDB($cf_saved_val, 1);
                                } elseif ($customField->type == 4) {
                                    $cf_data = Helper::dateForDB($cf_saved_val);
                                } else {
                                    $cf_data = $cf_saved_val;
                                }
                                echo "<td class='" . $customField->css_class . "'>" . "<div class=\"text-center\">" . $cf_data . "</div>" . "</td>";
                            }

                        }
                    }
                    ?>
                    @if (@$Topic->webmasterSection->date_status)
                        <td>{!!  Helper::formatDate($Topic->date) !!}</td>
                    @endif
                    @if (@$Topic->webmasterSection->expire_date_status)
                        <td>{!! $Topic->expire_date !!}</td>
                    @endif
                    @if ($WebmasterSection->visits_status)
                        <td>{!! $Topic->visits !!}</td>
                    @endif
                    @if ($WebmasterSection->case_status)
                        <td>{!! (($Topic->status == 1) ? "&#10003;" : "&#10005;") !!}</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if(@$stat == "excel")
        <script src="{{ asset('assets/dashboard/js/xlsx.full.min.js') }}"></script>
        <script type="text/javascript">
            var elt = document.getElementById('container');
            var wb = XLSX.utils.table_to_book(elt, {sheet: "sheet1"});
            XLSX.writeFile(wb, '{{ $WebmasterSectionTitle }}.xlsx');
            window.onfocus = function () {
                setTimeout(function () {
                    window.close();
                }, 100);
            }
        </script>
    @elseif(@$stat == "pdf")
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
        <script type="text/javascript">
            var pdf_content = document.getElementById("container");
            var options = {
                margin: 1,
                filename: '{{ $WebmasterSectionTitle }}.pdf',
                image: {type: 'jpeg', quality: 0.99},
                html2canvas: {scale: 2},
                jsPDF: {unit: 'in', format: 'letter', orientation: 'landscape'}
            };
            html2pdf(pdf_content, options);
            window.onfocus = function () {
                setTimeout(function () {
                    window.close();
                }, 100);
            }
        </script>
    @else
        <script type="text/javascript">
            setTimeout(function () {
                window.print();
            }, 200);
            window.onfocus = function () {
                setTimeout(function () {
                    window.close();
                }, 100);
            }
        </script>
    @endif
@else
    <div style="border: 1px solid #ddd;padding: 10px 20px;text-align: center;">
        <h5>{{ trans("backend.noData") }}</h5>
    </div>
@endif
</body>
</html>
