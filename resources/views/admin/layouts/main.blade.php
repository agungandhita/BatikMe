@include('admin.partials.head')

@include('admin.partials.navbar')


<div class="flex pt-16 overflow-hidden bg-slate-100">

@include('admin.partials.copyside')

<div id="main-content" class="relative w-full h-full overflow-y-auto bg-slate-100 lg:ml-64 ">
    <main>

@yield('container')

    <main>
        
        
    </div>
    
    @include('admin.partials.footer')
</div>
@include('admin.partials.end')

@include('sweetalert::alert')
