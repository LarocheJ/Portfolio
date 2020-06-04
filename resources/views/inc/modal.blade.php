{{-- <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this project?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {!! Form::open(['action' => ['DashboardController@destroy', $project->id], 'method' => 'delete', 'id' => 'deleteForm']) !!}
                    {{ Form::hidden('id', 'project_id') }}
                    {{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger delete']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div> --}}

<div class="modal" id="confirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this project<!--"<strong><span id="title_span"></span></strong>"-->?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn btn-danger" id="delete-btn">Delete</button>
                <button type="button" class="btn btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>