<!-- Modal -->

<div class="modal fade" id="evenementVerwijderMelding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Evenement verwijderen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Weet je zeker dat je het evenement wilt verwijderen en zo de gegevens niet meer terug kan krijgen?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Annuleer</button>
                <?php
                foreach($results as $items) {
                echo '
                <form method="post" action="event_verwijderen" type="hidden">
                    <button type="submit" name="id" class="btn btn-danger" value="'. $items->id .'">Verwijder</button>
                </form>
                ';
                }
                ?>
            </div>
        </div>
    </div>
</div>
