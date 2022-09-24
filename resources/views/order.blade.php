@extends('master')
@section('content')

<div style="margin-top:60px; margin-bottom:60px;" class="container order-list">
    <div class="col-sm-6">
        <table style="margin-top:60px; margin-bottom:60px;" class="table">
        
            <tbody>
              <tr>
                <th scope="row">Amount</th>
                <td>{{$total}}</td>
                
              </tr>
              <tr>
                <th scope="row">Tax</th>
                <td>0</td>
                
              </tr>
              <tr>
                <th scope="row">Delivery</th>
                <td>10</td>
              </tr>
              <tr>
                <th scope="row">Total Amount</th>
                <td>{{$total+10}}</td>
              </tr>
            </tbody>
          </table>

          <form action="/place_order" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <textarea name="address" id="address" cols="50" rows="3"></textarea>
            </div>
            
          
            
              <label class="form-check-label  mb-2" for="exampleCheck1"><b>Payment options</b></label>
              <div class="form-check mb-1">
                <input class="form-check-input" type="radio" name="payments" id="flexRadioDefault1" value="cash">
                <label class="form-check-label" for="flexRadioDefault1">
                  Online payment
                </label>
              </div>
              <div class="form-check mb-1">
                <input class="form-check-input" type="radio" name="payments" id="flexRadioDefault2" value="cash">
                <label class="form-check-label" for="flexRadioDefault2">
                  EMI payment
                </label>
              </div>
              <div class="form-check mb-1">
                <input class="form-check-input" type="radio" name="payments" id="flexRadioDefault3" value="cash">
                <label class="form-check-label" for="flexRadioDefault3">
                 Payment on delivery
                </label>
              </div>
            
            <button type="submit" class="btn btn-primary mt-2">Order Now</button>
          </form>
    </div>
    
</div>


@endsection
