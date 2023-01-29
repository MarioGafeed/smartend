<div class="tab-pane {{  ( Session::get('active_tab') == 'textEditorTab') ? 'active' : '' }}"
     id="tab-12">
    <div class="p-a-md"><h5>{!!  __('backend.textEditor') !!}</h5></div>
    <div class="p-a-md col-md-12">
        <h6>{!!  __('backend.textEditorDetails') !!}</h6>
        <hr>
        <div>
            <label class="md-check">
                <input type="radio" name="text_editor" id="text_editor_1" value="0"
                       {{ ($WebmasterSetting->text_editor==0)?"checked":"" }} class="has-value">
                <i class="indigo"></i>
                <strong>Summernote</strong>
            </label>
            <div class="m-x p-x {{ ($WebmasterSetting->text_editor==0)?"":"displayNone" }}" id="Summernote">
                <img src="{{ asset("assets/dashboard/images/Summernote.jpg") }}" alt="" class="m-t-sm m-b">
            </div>
        </div>
        <div class="m-t">
            <label class="md-check">
                <input type="radio" name="text_editor" id="text_editor_2" value="2"
                       {{ ($WebmasterSetting->text_editor==2)?"checked":"" }} class="has-value">
                <i class="success"></i>
                <strong>CKEditor</strong>
            </label>
            <div class="m-x p-x {{ ($WebmasterSetting->text_editor==2)?"":"displayNone" }}" id="CKEditor">
                <img src="{{ asset("assets/dashboard/images/CKEditor.jpg") }}" alt="" class="m-t-sm m-b">
            </div>
        </div>
        <div class="m-t">
            <label class="md-check">
                <input type="radio" name="text_editor" id="text_editor_3" value="1"
                       {{ ($WebmasterSetting->text_editor==1)?"checked":"" }} class="has-value">
                <i class="blue"></i>
                <strong>TinyMCE</strong>
            </label>
            <div class="m-x p-x {{ ($WebmasterSetting->text_editor==1)?"":"displayNone" }}" id="TinyMCE">
                <img src="{{ asset("assets/dashboard/images/TinyMCE.jpg") }}" alt="" class="m-t-sm m-b">
                <input type="text" placeholder="Tiny API Key" name="tiny_key" id="tiny_key" value="{{$WebmasterSetting->tiny_key}}" class="form-control">
                <a href="https://www.tiny.cloud/my-account/dashboard/" target="_blank">https://www.tiny.cloud</a>
            </div>
        </div>
    </div>
</div>
