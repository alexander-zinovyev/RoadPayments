@extends('app')

@section('content')
@include('sidebar')
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
      <div class="block">
        <p><strong>Your Balance :</strong> 25 coins</p>
        <button href="#" class="btn btn-success fill-balance-btn">Fill balance</button>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="prices">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Transport type</th>
            <th>Price</th>
            <th>Order</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Bus</td>
            <td>4.5 coins</td>
            <td>
              <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
            </td>
          </tr>
          <tr>
            <td>Train</td>
            <td>15 coins</td>
            <td>
              <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
            </td>
          </tr>
          <tr>
            <td>Something else</td>
            <td>7 coins</td>
            <td>
              <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
