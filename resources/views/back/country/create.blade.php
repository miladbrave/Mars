@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">ایجاد کشور جدید</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('country.store')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>نام</label>
                                        <input type="text" name="title" class="form-control"
                                               placeholder=" عنوان را وارد کنید...">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label>توضیح کوتاه</label>--}}
{{--                                        <input type="text" name="littledes" class="form-control"--}}
{{--                                               placeholder=" توضیح را وارد کنید..." required>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>توضیح</label>--}}
{{--                                        <textarea id="textareaDes" name="des" class="ckeditor form-control"--}}
{{--                                                  placeholder="توضیحات محصول را وارد کنید..."> </textarea>--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="photo">تصویر پرچم</label>
                                        <input type="hidden" name="photo_id[]" id="product-photo">
                                        <div id="photo" class="dropzone"></div>
                                    </div>
                                    <small id="emailHelp" class="form-text text-danger">برای وارد کردن عکس ابتدا پرچم کشور، سپس تصویر پس زمینه وارد نمایید.</small>
                                    <hr>
                                    <button type="submit" onclick="productGallery()" class="btn-sm btn-success pull-left">ذخیره
                                    </button><br>
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
            // autoProcessQueue:false,
            // autoQueue:false,
            url: "{{route('photos.store')}}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                photosGallery.push(response.photo_id)
            }
        });
        productGallery = function () {
            document.getElementById('product-photo').value = photosGallery

        }
        CKEDITOR.replace('textareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            removePlugins: 'cloudservices , easyimage'
        })

    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '.editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

