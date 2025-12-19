   <!-- link components pour les liens pour utiliser dans une page ce components x-link-item -->
  <!-- passer une propriéte via props @ props() -->
@props(['active' => false])
  
  <li><a {{ $attributes }} style="{{ $active == true ? 'font-weight: bold;':'' }}" >{{ $slot }}  </a></li>