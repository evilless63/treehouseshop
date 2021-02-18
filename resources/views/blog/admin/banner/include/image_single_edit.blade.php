<div class="box box-danger box-solid">
    <div class="box-header">
        <h3 class="box-title">Изображение</h3>
    </div>
    <div class="box-body" id="image" style=" border: 1px solid whitesmoke ; text-align: center; position: relative" >
        @if ($banner->img == null)
            <img width="50%" height="50%" src='{{asset("/images/no_image.jpg")}}' id="preview_image"/>
        @else
            <img width="50%" height="50%" src='{{asset("/uploads/banners_media/$banner->img")}}' id="preview_image"/>
        @endif

        <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
    </div>
    <p style="text-align: center">
        <a href="javascript:changeProfileBanner()" style="text-decoration: none;" data-name="single">
            <i class="glyphicon glyphicon-edit"></i> Загрузить
        </a>&nbsp;&nbsp;
        @if ($banner->img == null)
            <a href="javascript:removeFileBanner()" style="color: red;text-decoration: none;" class="nothing">
                <i class="glyphicon glyphicon-trash"></i>Удалить
            </a>
        @else
            <a href="javascript:removeFileImgBanner()" style="color: red;text-decoration: none;" class="myimg" data-name="{{$banner->img}}">
                <i class="glyphicon glyphicon-trash"></i>Удалить
            </a>
        @endif

    </p>
    <input type="file" id="file_banner" style="display: none"/>
    <input type="hidden" id="file_name"/>
    <p style="text-align: center"><small>Рекомендуемые размеры: 1920px ширина и 1080px высота.</small></p>

</div>


