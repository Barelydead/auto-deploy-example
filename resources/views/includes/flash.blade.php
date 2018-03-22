@if (!isset($flashImage))
    <?php $flashImage = 'paint-roller.jpg'; ?>
@endif

<div class="container-fluid" id="flash">
    <div class="row">
        <div class="flash-image flex-row space-center" style='background-image: url({{asset("img/flash/$flashImage")}})'>
            <div class="flash-text">
                <h1 class="text-danger">@yield('flash_title')</h1>
                <p>@yield('flash_text')</p>
            </div>
        </div>
    </div>
</div>
