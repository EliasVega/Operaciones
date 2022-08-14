
<a href="{{ route('payment.show', $id) }}"
 class="btn btn-verdeR" data-toggle="tooltip" data-placement="top" title="Ver Pago Detallado"><i class="far fa-eye"></i></i>
</a>
<a href="{{ route('showPdfPayment', $id) }}">
    <button class="btn btn-lilaR" data-toggle="tooltip" data-placement="top" title="Ver Pdf" ><i class="fa fa-file-pdf"></i></button>
</a>
@if ($status == 'PENDIENTE' )
    <a href="{{ route('statuspayment', $id) }}"
        class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Pendiente"><i class="fa fa-dollar-sign"></i>
    </a>
@else
    <a href="{{ route('statuspayment', $id) }}"
        class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Pagado"><i class="fa fa-dollar-sign"></i></i>
    </a>
@endif
