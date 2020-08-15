<section
    id="dashboard_sidebar"
    class="dashboard__sidebar"
>
    <div class="dashboard__sidebar-header">
        <div
            id="dashboard_sidebar_toggle"
            class="dashboard__sidebar-toggle"
        >
            @include('decor.icons.arrow-right-1',['class'=>'dashboard__sidebar-toggle-open'])
            @include('decor.icons.close-1',['class'=>'dashboard__sidebar-toggle-close'])
        </div>
    </div>

    <div class="dashboard__sidebar-content">
        {{$slot}}
    </div>
</section>
