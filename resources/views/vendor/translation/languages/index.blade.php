@extends('translation::layout')

@section('body')

    @if(count($languages))

        <div class="panel">

            <div class="panel-header">

                {{ __('translation.languages') }}


            </div>

            <div class="panel-body">

                <table>

                    <thead>
                    <tr>
                        <th>{{ __('translation.language_name') }}</th>
                        <th>{{ __('translation.locale') }}</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($languages as $language => $name)
                        <tr>
                            <td>
                                {{ $name }}
                            </td>
                            <td>
                                <a href="{{ route('languages.translations.index', $language) }}">
                                    {{ $language }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    @endif

@endsection
