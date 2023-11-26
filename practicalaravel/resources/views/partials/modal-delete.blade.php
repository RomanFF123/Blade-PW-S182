<div class="modal fade" id="eliminar{{ $recuerdo->id }}" tabindex="-1" aria-labelledby="eliminarLabel{{ $recuerdo->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="eliminarLabel{{ $recuerdo->id }}">Confirmar eliminación</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <p>¿Estás seguro de que deseas eliminar este recuerdo?</p>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
             <form method="POST" action="{{ route('recuerdo.destroy', ['id' => $recuerdo->id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
             </form>
          </div>
       </div>
    </div>
 </div>
 