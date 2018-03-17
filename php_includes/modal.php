<!-- Modal -->
<div class="modal fade" id="myModal-<?= $task['id']; ?>" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirm Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this scheduled task?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <a href="delete.php?id=<?= $task['id']; ?>" title="Delete Task"><button class="btn btn-danger pull-left"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
            </div>
        </div>
    </div>
</div>
