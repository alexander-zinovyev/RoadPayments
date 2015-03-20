@extends('app')

@section('content')
@include('sidebar')
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
      <div class="block">
        <p><strong>Your Balance :</strong> <?php echo $account->balance; ?> coins</p>
        <a href="/payment"><button class="btn btn-success fill-balance-btn">Fill balance</button></a>
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
              <input type="number" ng-model="amount"/>
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