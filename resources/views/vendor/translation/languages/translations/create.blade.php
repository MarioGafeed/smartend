@extends('translation::layout')

@section('body')

    <div class="panel w-1/2">

        <div class="panel-header">

            {{ __('translation.add_translation') }}

        </div>

        <form action="{{ route('languages.translations.store', $language) }}" method="POST">

            <fieldset>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="panel-body p-4">

                    @include('translation::forms.text', ['field' => 'group', 'label' => __('translation.group_label'), 'placeholder' => __('translation.group_placeholder')])

                    @include('translation::forms.text', ['field' => 'key', 'label' => __('translation.key_label'), 'placeholder' => __('translation.key_placeholder')])

                    @include('translation::forms.text', ['field' => 'value', 'label' => __('translation.value_label'), 'placeholder' => __('translation.value_placeholder')])

                    <div class="input-group">

                        <button v-on:click="toggleAdvancedOptions" class="text-blue">{{ __('translation.advanced_options') }}</button>

                    </div>

                    <div v-show="showAdvancedOptions">

                        @include('translation::forms.text', ['field' => 'namespace', 'label' => __('translation.namespace_label'), 'placeholder' => __('translation.namespace_placeholder')])

                    </div>


                </div>

            </fieldset>

            <div class="panel-footer flex flex-row-reverse">

                <button class="button button-blue">
                    {{ __('translation.save') }}
                </button>

            </div>

        </form>

    </div>

@endsection
