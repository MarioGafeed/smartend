@if(Session::has('doneMessage'))
    <div class="padding p-b-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success m-b-0">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('doneMessage') }}
                </div>
            </div>
        </div>
    </div>
@endif
@if(@$FormSectionID >0)
    <?php
    // Get banners list array by settings ID (You can get settings ID from Webmaster >> Banners settings)
    $WebmasterSection = Helper::WebmasterSection($FormSectionID);
    $fatherSections = Helper::SectionCategories($FormSectionID);
    ?>
    @if(!empty($WebmasterSection))
        <div class="form-block">
            <h4><i class="fa fa-send-o"></i> {{ __('backend.submit') }} {!!  $WebmasterSection->{"title_".@Helper::currentLanguage()->code} !!}</h4>
            <hr>
            {{Form::open(['route'=>['formSubmit'],'method'=>'POST', 'files' => true ])}}

            @if($WebmasterSection->date_status)
                <div class="form-group row">
                    <label for="date"
                           class="col-sm-2 form-control-label">{!!  __('backend.topicDate') !!}
                    </label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class='input-group date'>
                                {!! Form::text('date',Helper::formatDate(date("Y-m-d")), array('placeholder' => '','class' => 'form-control','id'=>'date','required'=>'')) !!}
                                <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                            </div>
                        </div>

                    </div>
                </div>
            @else
                {!! Form::hidden('date',date("Y-m-d"), array('placeholder' => '','class' => 'form-control','id'=>'date')) !!}
            @endif

            @if($WebmasterSection->expire_date_status)
                <div class="form-group row">
                    <label for="date"
                           class="col-sm-2 form-control-label">{!!  __('backend.expireDate') !!}
                    </label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class='input-group date'>
                                {!! Form::text('expire_date','', array('placeholder' => '','class' => 'form-control','id'=>'expire_date')) !!}
                                <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                            </div>
                        </div>

                    </div>
                </div>
            @endif

            @if($WebmasterSection->sections_status!=0)
                <div class="form-group row">
                    <label for="section_id"
                           class="col-sm-2 form-control-label">{!!  __('backend.categories') !!} </label>
                    <div class="col-sm-10">
                        <select name="section_id" id="section_id" class="form-control c-select" required>
                            <option value=""> - - {!!  __('backend.select') !!} - -</option>
                            <?php
                            $title_var = "title_" . @Helper::currentLanguage()->code;
                            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            $t_arrow = "&raquo;";
                            ?>
                            @foreach ($fatherSections as $fatherSection)
                                <?php
                                if ($fatherSection->$title_var != "") {
                                    $ftitle = $fatherSection->$title_var;
                                } else {
                                    $ftitle = $fatherSection->$title_var2;
                                }
                                ?>
                                <option value="{{ $fatherSection->id  }}">{!! $ftitle !!}</option>
                                @foreach ($fatherSection->fatherSections as $subFatherSection)
                                    <?php
                                    if ($subFatherSection->$title_var != "") {
                                        $title = $subFatherSection->$title_var;
                                    } else {
                                        $title = $subFatherSection->$title_var2;
                                    }
                                    ?>
                                    <option
                                        value="{{ $subFatherSection->id  }}">{!! $ftitle !!} {!! $t_arrow !!} {!! $title !!}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                </div>
            @else
                {!! Form::hidden('section_id','0') !!}
            @endif

            @if($WebmasterSection->title_status)
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label">{!!  __('backend.topicName') !!}
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('title','', array('placeholder' => '','class' => 'form-control','required'=>'')) !!}
                    </div>
                </div>
            @endif

            @if($WebmasterSection->longtext_status)
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label">{!!  __('backend.bannerDetails') !!}
                    </label>
                    <div class="col-sm-10">
                        {!! Form::textarea('details','', array('placeholder' => '','class' => 'form-control','rows'=>'8')) !!}
                    </div>
                </div>
            @endif

            @if($WebmasterSection->photo_status)
                <div class="form-group row">
                    <label for="photo_file"
                           class="col-sm-2 form-control-label">{!!  __('backend.topicPhoto') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::file('photo_file', array('class' => 'form-control','id'=>'photo_file','accept'=>'image/*')) !!}
                        <small>
                            {!!  __('backend.imagesTypes') !!}
                        </small>
                    </div>
                </div>
            @endif

            @if($WebmasterSection->attach_file_status)
                <div class="form-group row">
                    <label for="attach_file"
                           class="col-sm-2 form-control-label">{!!  __('backend.topicAttach') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::file('attach_file', array('class' => 'form-control','id'=>'attach_file')) !!}
                        <small>
                            {!!  __('backend.attachTypes') !!}
                        </small>
                    </div>
                </div>
            @endif

            {{--Additional Feilds--}}
            @if(count($WebmasterSection->customFields) >0)
                <?php
                $cf_title_var = "title_" . @Helper::currentLanguage()->code;
                $cf_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                ?>
                @foreach($WebmasterSection->customFields as $customField)
                    <?php
                    // check permission
                    $add_permission_groups = [];
                    if ($customField->add_permission_groups != "") {
                        $add_permission_groups = explode(",", $customField->add_permission_groups);
                    }
                    // have permission & continue
                    if ($customField->$cf_title_var != "") {
                        $cf_title = $customField->$cf_title_var;
                    } else {
                        $cf_title = $customField->$cf_title_var2;
                    }

                    // check field language status
                    $cf_land_identifier = "";
                    $cf_land_active = false;
                    $cf_land_dir = @Helper::currentLanguage()->direction;
                    if ($customField->lang_code != "all") {
                        $ct_language = @Helper::LangFromCode($customField->lang_code);
                        $cf_land_identifier = @Helper::languageName($ct_language);
                        $cf_land_dir = $ct_language->direction;
                        if ($ct_language->box_status) {
                            $cf_land_active = true;
                        }
                    }
                    if ($customField->lang_code == "all") {
                        $cf_land_active = true;
                    }
                    // required Status
                    $cf_required = "";
                    if ($customField->required) {
                        $cf_required = "required";
                    }
                    ?>

                    @if($cf_land_active)
                        @if($customField->type ==12)
                            {{--Vimeo Video Link--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!} <i class="fa fa-vimeo"></i>
                                </label>
                                <div class="col-sm-10">
                                    {!! Form::text('customField_'.$customField->id,$customField->default_value, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>'ltr')) !!}
                                </div>
                            </div>
                        @elseif($customField->type ==11)
                            {{--Youtube Video Link--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!} <i class="fa fa-youtube"></i>
                                </label>
                                <div class="col-sm-10">
                                    {!! Form::text('customField_'.$customField->id,$customField->default_value, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>'ltr')) !!}
                                </div>
                            </div>
                        @elseif($customField->type ==10)
                            {{--Video File--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}</label>
                                <div class="col-sm-10">
                                    {!! Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'*')) !!}
                                </div>
                            </div>
                        @elseif($customField->type ==9)
                            {{--Attach File--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}</label>
                                <div class="col-sm-10">
                                    {!! Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'*')) !!}
                                </div>
                            </div>
                        @elseif($customField->type ==8)
                            {{--Photo File--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}</label>
                                <div class="col-sm-10">
                                    {!! Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'image/*')) !!}
                                </div>
                            </div>
                        @elseif($customField->type ==7)
                            {{--Multi Check--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}</label>
                                <div class="col-sm-10">
                                    <select name="{{'customField_'.$customField->id}}[]"
                                            id="{{'customField_'.$customField->id}}"
                                            class="form-control select2-multiple" multiple
                                            ui-jp="select2"
                                            ui-options="{theme: 'bootstrap'}" {{$cf_required}}>
                                        <?php
                                        $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                        $cf_details_var2 = "details_en" . env('DEFAULT_LANGUAGE');
                                        if ($customField->$cf_details_var != "") {
                                            $cf_details = $customField->$cf_details_var;
                                        } else {
                                            $cf_details = $customField->$cf_details_var2;
                                        }
                                        $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                        $line_num = 1;
                                        ?>
                                        @foreach ($cf_details_lines as $cf_details_line)
                                            <option
                                                value="{{ $line_num  }}" {{ ($customField->default_value == $line_num) ? "selected='selected'":""  }}>{{ $cf_details_line }}</option>
                                            <?php
                                            $line_num++;
                                            ?>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @elseif($customField->type ==6)
                            {{--Select--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}</label>
                                <div class="col-sm-10">
                                    <select name="{{'customField_'.$customField->id}}"
                                            id="{{'customField_'.$customField->id}}"
                                            class="form-control c-select" {{$cf_required}}>
                                        <option value="">- - {!!  $cf_title !!} - -</option>
                                        <?php
                                        $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                        $cf_details_var2 = "details_en" . env('DEFAULT_LANGUAGE');
                                        if ($customField->$cf_details_var != "") {
                                            $cf_details = $customField->$cf_details_var;
                                        } else {
                                            $cf_details = $customField->$cf_details_var2;
                                        }
                                        $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                        $line_num = 1;
                                        ?>
                                        @foreach ($cf_details_lines as $cf_details_line)
                                            <option
                                                value="{{ $line_num  }}" {{ ($customField->default_value == $line_num) ? "selected='selected'":""  }}>{{ $cf_details_line }}</option>
                                            <?php
                                            $line_num++;
                                            ?>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @elseif($customField->type ==5)
                            {{--Date & Time--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}
                                </label>
                                <div class="col-sm-10">
                                    <div>
                                        <div class='input-group dateTime'>
                                            {!! Form::text('customField_'.$customField->id,"", array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)) !!}
                                            <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($customField->type ==4)
                            {{--Date--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}
                                </label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class='input-group date'>
                                            {!! Form::text('customField_'.$customField->id,Helper::formatDate($customField->default_value), array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)) !!}
                                            <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @elseif($customField->type ==3)
                            {{--Email Address--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}
                                </label>
                                <div class="col-sm-10">
                                    {!! Form::email('customField_'.$customField->id,$customField->default_value, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)) !!}
                                </div>
                            </div>

                        @elseif($customField->type ==2)
                            {{--Number--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}
                                </label>
                                <div class="col-sm-10">
                                    {!! Form::number('customField_'.$customField->id,$customField->default_value, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','min'=>0, 'dir'=>$cf_land_dir)) !!}
                                </div>
                            </div>
                        @elseif($customField->type ==1)
                            {{--Text Area--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}
                                </label>
                                <div class="col-sm-10">
                                    {!! Form::textarea('customField_'.$customField->id,$customField->default_value, array('placeholder' => '','class' => 'form-control',$cf_required=>'', 'dir'=>$cf_land_dir,'rows'=>'5')) !!}
                                </div>
                            </div>
                        @else
                            {{--Text Box--}}
                            <div class="form-group row">
                                <label for="{{'customField_'.$customField->id}}"
                                       class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                    {!! $cf_land_identifier !!}
                                </label>
                                <div class="col-sm-10">
                                    {!! Form::text('customField_'.$customField->id,$customField->default_value, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)) !!}
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            @endif
            {{--End of -- Additional Feilds--}}


            <div class="form-group row" style="margin-bottom: 0;margin-top: 30px;">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    @if(env('NOCAPTCHA_STATUS', false))
                        <div class="form-group">
                            {!! NoCaptcha::renderJs(@Helper::currentLanguage()->code) !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                    @endif

                    <input type="hidden" name="TopicID" value="{{ @$Topic->id }}">
                    <input type="hidden" name="WebmasterSectionId" value="{{ encrypt($WebmasterSection->id) }}">
                    <button type="submit"
                            class="btn btn-lg submit-btn btn-theme"><i class="fa fa-send"></i> {{ __('backend.submit') }}</button>
                </div>
            </div>
            {{Form::close()}}
        </div>

    @endif
@endif
