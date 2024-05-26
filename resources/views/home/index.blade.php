<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- @foreach($campground_data['campgrounds'] as $key => $value)
    <h2>{{ $value->id }}件目のキャンプ場</h2>
    <p>{{ $value->name }}</p>
    <p>{{ $value->address }}</p>
    <p>{{ $value->phone_number }}</p>
    <p>{{ $value->holiday }}</p>
    <p>{{ $value->start_date }}</p>
    <p>{{ $value->end_date }}</p>
    <p>{{ $value->check_in_time }}</p>
    <p>{{ $value->check_out_time }}</p>
    <p>{{ $value->image }}</p>
    <p>{{ $value->website_url }}</p>
    @endforeach --}}
    <p>キャンプ場情報</p>
    {{ $campground_data[0]->campgrounds[0]->address }}
    <p>アニメ</p>
    {{ $campground_data[0]->name }}
</body>

</html>