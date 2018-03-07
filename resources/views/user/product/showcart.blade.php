
<div class='row'>
        <h2>any 2</h2>
        <table class="table table-condensed">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>remove</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php
             $i=0;
             $total=0;
              ?>
                @foreach ($cartproducts as $cartproduct)
              <tr>
                <td>{{++$i}}</td>
                <td>{{$cartproduct->name}}</td>
                <td><a href="{{url('deletecart')}}/{{$cartproduct->rowId}}">remove</a></td>
                <td>{{$cartproduct->price}}$</td>
                <td>
                    {{ Form::open(['route'=>'cartupdate','method'=>'post']) }}
               <input type="number"  value="{{$cartproduct->qty}}" min="1" name="qty" id="upcart{{$cartproduct->id}}">
               <input type="hidden" value='{{$cartproduct->rowId}}' name="rowId" id='rowId{{$cartproduct->id}}'>
               <input type='submit' value="update">
                  {{ Form::close() }} 
                </td>
             >
                <?php
                $subtotal=$cartproduct->qty*$cartproduct->price; ?>
                <td>{{$subtotal}}</td>
              </tr>
              <?php
              $total=$total+$subtotal ?>
              @endforeach
              <td></td>
              <td></td>
             
              <td></td>
              <td>Totalprice</td>
              <td>{{$total}}</td>
          </table>
    
    </div>
    