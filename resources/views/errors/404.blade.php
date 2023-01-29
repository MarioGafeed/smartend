<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    <style>
        body{
            background: #f0f0f0;
            font-family: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            margin: 0;
            color: #666;
        }
        h1{
            font-size: 130px;
            margin: 0;
        }
        .p-y-md{
            padding: 30px 0;
        }
        .app-body{
            position: absolute;
            width: 100%;
            top: calc(50vh - 150px);
        }
    </style>
</head>
<body>
<div class="app-body indigo bg-auto w-full">
    <div class="text-center pos-rlt p-y-md">
        <h1 class="text-shadow text-white text-4x">
            <span class="text-2x font-bold block m-t-lg">404</span>
        </h1>
        <p class="h5 m-y-lg text-u-c font-bold">{{ __('backend.notFound') }}.</p>
    </div>
</div>
</body>
</html>
