<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/

    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#operation_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    $(document).ready(function(){
        $("#add").click(function(){
            add();
        });
    });

    var cont=0;
    total=0;
    subtotal=[];
    $("#save").hide();
    //$("#pend").hide();
    $("#use_id").hide();
    $("#ido").hide();

    $("#operation_id").change(operationValue);

    function operationValue(){
        dataOperation = document.getElementById('operation_id').value.split('_');
        $("#price").val(dataOperation[1]);
        dataOperation = document.getElementById('operation_id').value.split('_');
        $("#quantity").val(dataOperation[2]);
        dataOperation = document.getElementById('operation_id').value.split('_');
        $("#operating").val(dataOperation[3]);
        dataOperation = document.getElementById('operation_id').value.split('_');
        $("#idO").val(dataOperation[4]);
        //$("#operating").val($("#quantity").val()+$("#operating").val());
        qt = parseFloat($("#quantity").val());
        qo = parseFloat($("#operating").val());
        qtqo = qo + qt;
        $("#operating").val(qtqo);
    }

    function add(){

        dataOperation = document.getElementById('operation_id').value.split('_');
        operation_id= dataOperation[0];
        operation= $("#operation_id option:selected").text();
        quantity= $("#quantity").val();
        price= $("#price").val();
        operating = $("#operating").val();
        operido = $("#idO").val();



        if(operation_id !="" && quantity!="" && quantity>0  && price!="" && operido!=""){

            if (parseFloat(quantity) > parseFloat(operating)) {
                //alert("Rellene todos los campos del detalle de la venta");
                Swal.fire({
                type: 'error',
                //title: 'Oops...',
                text: 'La cantidad a entregar supera la cantidad pendiente',
            })
            } else {

                subtotal[cont]= parseFloat(quantity) * parseFloat(price);
                total= total+subtotal[cont];

                var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="idO[]" value="'+operido+'">'+operido+'</td>  <td><input type="hidden" name="operation_id[]" value="'+operation_id+'">'+operation+'</td> <td><input type="hidden" id="quantity" name="quantity[]" value="'+quantity+'">'+quantity+'</td> <td><input type="hidden" id="price" name="price[]" value="'+parseFloat(price).toFixed(2)+'">'+price+'</td> <td> $'+parseFloat(subtotal[cont]).toFixed(2)+'</td></tr>';
                cont++;

                totals();
                /*
                $("#total").html("$ " + total.toFixed(2));
                $("#total_venta").val(total.toFixed(2));*/
                assess();
                $('#details').append(fila);
                $('#operation_id option:selected').remove();
                clean();
            }

        }else{
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'Rellene todos los campos del detalle de la venta',
            })
        }
    }


    function clean(){
        $("#operation_id").val("");
        $("#quantity").val("");
        $("#price").val("");
        $("#idO").val("");

    }

    function totals(){

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));
    }


    function assess(){

        if(total>0){

        $("#save").show();

        } else{
            $("#save").hide();
        }
    }

    function eliminar(index){

        total = total-subtotal[index];

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        $("#fila" + index).remove();
        assess();
    }
</script>
