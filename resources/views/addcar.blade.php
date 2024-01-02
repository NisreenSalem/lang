<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Add Car</h2>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">{{__('message.cartitle')}}</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="carTitle" value="{{ old('carTitle') }}">
                @error('carTitle')
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">{{__('message.carprice')}}</label>
                <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{ old('price') }}">
            </div>
            <div class="form-group">
                <label for="description">{{__('message.cardesc')}}</label>
                <textarea class="form-control" rows="5" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="image">{{__('message.carimage')}}</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                @error('image')
                {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="shortDescription">{{__('message.carshortdesc')}}</label>
                <input type="text" class="form-control" id="shortDescription" placeholder="Enter shortDescription" name="shortDescription" value="{{ old('shortDescription') }}">
            </div>
            <div class="form-group">

                <select name="category_id" id="">
                    <option value="">{{__('message.carcate')}}</option>



                </select>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="published"> {{__('message.carpublished')}}</label>
            </div>
            <button type="submit" class="btn btn-default">Add</button>
        </form>
    </div>

</body>

</html>