<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">

        @php 
        $count = count($header['breadcrumb']); 
        $temp = 1;
        @endphp 
        @foreach($header['breadcrumb'] as $key => $value)
        @php $value = (empty($value)) ? 'javascript:;' : $value; @endphp
        @if($temp!=$count)
            <li>
                <a href="{{ $value }}" class=""> 
                    @if($temp == 1)
                        <i class="fa fa-home"></i>
                    @else
                        <i class="fa fa-circle" style="font-size: 5px;margin: 0 5px; position: relative; top: -3px;opacity: .4;"></i> 
                    @endif 
                    
                    {{ $key }} 
                </a>
            </li>
        @else
            <li><i class="fa fa-circle"></i>
                <span>{{ $key }}</span>
            </li>
        @endif

        @php $temp = $temp+1; @endphp
        @endforeach
        
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> {{$header['title']}}</h1>
<!-- END PAGE TITLE-->