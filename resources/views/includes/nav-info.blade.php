<div class="grid-profile-linklist-holder">
    <div class="grid-profile-linklist">
        @php
            $url = explode('/',url()->current());
            $getWidget = $menu->where('slug',$url[3]);
             $widget = '';
             foreach ($getWidget as $w) {
                 $widget = $w->widget;
             }   
        @endphp
        @foreach ($menu->where('menu_order','3') as $m)
            
   
        <a href="{{url($m->getTranslatedAttribute('slug'))}}" class="grid-profile-link @if($widget == $m->widget) 
            grid-profile-link-active @endif" >
            {{$m->getTranslatedAttribute('menu_name')}}</a>
        @endforeach
    </div>
</div>