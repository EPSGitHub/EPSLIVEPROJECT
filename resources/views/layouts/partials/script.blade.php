<!-- /Main Wrapper -->

<!-- jQuery -->

 <script src="{{asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>


<!-- Bootstrap Core JS -->
<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('admin/assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('admin/assets/js/chart.morris.js')}}"></script>

 {{-- CK EDITOR --}}
 <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>


 {{-- sweet alert--}}
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


<!-- Custom JS -->
<script  src="{{asset('admin/assets/js/script.js')}}"></script>
<script  src="{{asset('admin/assets/js/custom.js')}}"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <script type="text/javascript">
      $(function () {
        $("#table").DataTable();
// this is need to Move Ordera accordin user wish Arrangement
        $( "#tablecontents" ).sortable({
          items: "tr",
          cursor: 'move',
          opacity: 0.6,
          update: function() {
              sendOrderToServer();
          }
        });

        function sendOrderToServer() {
          var order = [];
          var token = $('meta[name="csrf-token"]').attr('content');
        //   by this function User can Update hisOrders or Move to top or under
          $('tr.row1').each(function(index,element) {

            order.push({
              id: $(this).attr('data-id'),
              position: index+1

            });
          });


// the Ajax Post update
          $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ url('Custom-sortable') }}",
                data: {
              order: order,
              _token: token
            },
            success: function(response) {
                if (response.status == "success") {
                  console.log(response);
                } else {
                  console.log(response);
                }
            }
          });
        }
      });
    </script>
