<a onclick="GoBack('toggle')">
  @if ($slot == '')
    <i class="fas fa-play"></i>
  @else
    {{ $slot }}
  @endif
</a>