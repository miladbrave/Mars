@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0"> ویرایش کشور {{$country->title}}</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('country.update',$country->id)}}">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH')}}
                                    <div class="form-group">
                                        <label>نام</label>
                                        <input type="text" name="title" class="form-control"
                                               value="{{$country->title}}">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label>توضیح کوتاه</label>--}}
{{--                                        <input type="text" name="littledes" class="form-control"--}}
{{--                                               value="{{$country->littledes}}">--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label>توضیح</label>
                                        <textarea id="textareaDes" name="des" class="ckeditor form-control"
                                        >{{$country->des}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">تصویر</label>
                                        <input type="hidden" name="photo_id[]" id="product-photo">
                                        <div id="photo" class="dropzone"></div>
                                        <div class="row">
                                                @foreach($country->photos as $photo)
                                                    <div class="col-sm-3" id="photo_{{$photo->id}}"
                                                         style="margin:2%">
                                                        <img class="img-responsive"
                                                             src="{{($photo->path) }}"
                                                             alt="image">
                                                        <a class="text-danger"
                                                           href="{{route('uni',$photo->id)}}">حذف</a>
                                                    </div>
                                                @endforeach
                                        </div>
                                    </div>
                                    <small id="emailHelp" class="form-text text-danger">برای وارد کردن عکس ابتدا پرچم کشور، سپس تصویر پس زمینه وارد نمایید.</small>

                                    <hr>
                                    @if(isset($country->photo->id))
                                        <button type="submit" onclick="productGallery({{$country->photo->id}})"
                                                class="btn-sm btn-success pull-left">ذخیره
                                        </button>
                                    @else
                                        <button type="submit" onclick="productGallery()"
                                                class="btn-sm btn-success pull-left">ذخیره
                                        </button>
                                    @endif
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="{{asset('/back/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('/front/js/dropzone.min.js')}}"></script>

    <script>
        Dropzone.autoDiscover = false;
        var photosGallery = []

        var drop = new Dropzone('#photo', {
            addRemoveLinks: true,
            maxFiles: 2,

            url: "{{route('photos.store')}}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                photosGallery.push(response.photo_id)
            }
        });
        productGallery = function (photos) {
            if (photos) {
                document.getElementById('product-photo').value = photosGallery.concat(photos)
            } else {
                document.getElementById('product-photo').value = photosGallery
            }
        }
        CKEDITOR.replace('textareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            toolbar: 'simple',
            removePlugins: 'cloudservices , easyimage'
        })
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('.editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

    {{--    <script>--}}
    {{--        tinymce.init({--}}
    {{--            selector: '#mytextarea'--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
