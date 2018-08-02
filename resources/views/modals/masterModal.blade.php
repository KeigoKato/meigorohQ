<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-sm">@yield('modalButtonValue')</button>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog">
        <div class="modal-content" style="padding:10px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">@yield('modalTitle')</h4>
            </div>
                @yield('modalContainer')
            </div>
        </div>
    </div>
</div>