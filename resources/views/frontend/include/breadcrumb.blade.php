<!--=================================
breadcrumb -->
<div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ol class="breadcrumb mb-0">
            
          <li class="breadcrumb-item"><a href=" {{ route("home") }}"> <i class="fas fa-home"></i> </a></li>
              @php 
                $count = count($header['breadcrumb']); 
                $temp = 1;
              @endphp 
              @foreach($header['breadcrumb'] as $key => $value)
                @php $value = (empty($value)) ? 'javascript:;' : $value; @endphp
                @if($temp!=$count)
                  <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="{{ $value }}">{{ $key }}</a></li>
                    
                @else
                  <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> {{ $key }} </span></li>
                @endif

                @php $temp = $temp+1; @endphp
              @endforeach
            
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--=================================
  breadcrumb -->