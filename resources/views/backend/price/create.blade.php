<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
         <div class="container">
         <a href="{{ route('price.index') }}" class="btn btn-default" style=" margin-top:40px;-">Back</a>
            <br />
            <h3 align="center">Price Create new</h3>
            <br />
          <div class="table-responsive">
                       <form method="post" id="dynamic_form">
                        <span id="result"></span>
                        <table class="table table-bordered table-striped" id="user_table">
                      <thead>
                       <tr>
                           <th width="35%">Price Category</th>
                           <th width="35%">Prace</th>
                           <th width="30%">list</th>
                           <th width="30%">Action</th>
                       </tr>
                      </thead>
                      <tbody>

                      </tbody>
                      <tfoot>
                       <tr>
                                       <td colspan="3" align="right">&nbsp;</td>
                                       <td>
                         @csrf
                         <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                        </td>
                       </tr>
                      </tfoot>
                  </table>
                       </form>
          </div>
         </div>


       <script>
       $(document).ready(function(){

        var count = 1;

        dynamic_field(count);

        function dynamic_field(number)
        {
         html = '<tr>';
               html += '<td><select name="price_category[]" class="form-control"><option selected>price_category_tanlang</option><option value="Standard">Standart</option><option value="Business">Business</option><option value="Premium">Premium</option><option value="Ultimate">Ultimate</option> </select></td>';
               html += '<td><input type="text" name="price[]" class="form-control" /></td>';
               html += '<td><input type="text" name="list[]" class="form-control" /></td>';
               if(number > 1)
               {
                   html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                   $('tbody').append(html);
               }
               else
               {
                   html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                   $('tbody').html(html);
               }
        }

        $(document).on('click', '#add', function(){
         count++;
         dynamic_field(count);
        });

        $(document).on('click', '.remove', function(){
         count--;
         $(this).closest("tr").remove();
        });

        $('#dynamic_form').on('submit', function(event){
               event.preventDefault();
               $.ajax({
                   url:'{{ route("dynamic-field.insert") }}',
                   method:'post',
                   data:$(this).serialize(),
                   dataType:'json',
                   beforeSend:function(){
                       $('#save').attr('disabled','disabled');
                   },
                   success:function(data)
                   {
                       if(data.error)
                       {
                           var error_html = '';
                           for(var count = 0; count < data.error.length; count++)
                           {
                               error_html += '<p>'+data.error[count]+'</p>';
                           }
                           $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                       }
                       else
                       {
                           dynamic_field(1);
                           $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                       }
                       $('#save').attr('disabled', false);
                   }
               })
        });

       });
       </script>
