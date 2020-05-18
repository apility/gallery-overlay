<section {{ $attributes }} >

  <x-editor-button area="galleryList" type="contentlist">
    Legg til galleri
  </x-editor-button>

  @php($galleries = content('galleryList'))


  @foreach ($galleries as $key=>$gallery)
    <x-editor-button area="gallery__{{ $key }}" type="gallery">
      Rediger galleri {{ $loop->iteration }}
    </x-editor-button>
  @endforeach



<div class="modal GalleryOverlaySplash" id="playbutton">
  <div class="GalleryOverlaySplash__itemContainer">

    @foreach ($list as $gallery)
      <div class="GalleryOverlaySplash__item" onclick="GoToView('#{{ $gallery['data']->title }}')">{{ $gallery['data']->name }}</div>
    @endforeach

  </div>
</div>

</section>

@foreach ($list as $gallery)
  <div class="modal GalleryOverlay" id="{{ $gallery['data']->title }}">
    <div class="GalleryOverlay__container" onclick="$('*[aria-modal=\'true\']').modal('hide')">
      <div class="owl-carousel" style="margin-top: 45px;">

          @foreach ($gallery['images'] as $image)
            <img src="{{ media_url($image->image, '1920x1080', 'o') }}" alt="">
          @endforeach

      </div>
    </div>
  </div>
@endforeach

<script defer>
function GoToView(view) {
  $("#playbutton").modal('hide');
  $(view).modal('show');
}
function GoBack(mode = 'show') {
  switch(mode) {
    case 'toggle':
      $(".GalleryOverlay[aria-modal='true']").modal('hide');
      $("#playbutton").modal(mode);
      break;
    default:
      $(".GalleryOverlay[aria-modal='true']").modal('hide');
      $("#playbutton").modal('show');
  }
}
</script>
