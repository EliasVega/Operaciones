@if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
    @extends("layouts.vacio")
    <form action="{{ route('remission.destroy', $id) }}" method="post" class="delete">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

    </form>
    @section('scripts')
        <script>

            $('.delete').submit(function(e){
                e.preventDefault();
                    Swal.fire({
                    title: '¿Confirmar Eliminar Usuario?',
                    text: "¡El Usuario no podra volver recuperarse!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Confirm!'
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
                })
            });
        </script>
    @endsection
@endif

