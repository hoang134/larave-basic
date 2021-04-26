<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>index</title>
</head>
<body>
<div class="d-flex m-5">
    <h3 style="margin: auto">Danh sách bài Post</h3>
</div>
<div class="container">
    <div>
        <h3>Tạo bài viết mới</h3>
        <form action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{old('title')}}">
                @error('title')
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="contents">Content</label>
                <input type="text" class="form-control" id="contents" placeholder="Content" name="contents" value="{{ old('contents') }}">
                @error('contents')
                <div>
                    <span class="text-danger">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">title</label><br>
                <select id="category" class="form-select" name="category[]" multiple>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="form-group">
                    <input type="file" id="image" name="image">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">title</th>
            <th scope="col">Nội dung</th>
            <th scope="col" width="10%">thể loại</th>
            <th scope="col" width="20%">Thực hiện</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td> <img width="125px" height="95px" src="{{$post->image ? $post->image :"" }}"> </td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    @foreach($post->categories as $category)
                        <span>{{ $category->name }}</span><br>
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-primary m-2" href="{{ route('post.edit',$post->id) }}"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger m-2" href="{{ route('post.delete',$post->id) }}"><i class="fa fa-trash-o"
                                                                                                 aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}

</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</html>
