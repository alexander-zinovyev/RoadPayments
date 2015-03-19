@extends('app')

@section('content')
@extends('sidebar')
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>Transport type</th>
          <th>Price</th>
          <th>Bought at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Bus</td>
          <td>15 coins</td>
          <td>15.06.2015</td>
        </tr>
        <tr>
          <td>Train</td>
          <td>7.62 coins</td>
          <td>12.12.2015</td>
        </tr>
        <tr>
          <td>Something else</td>
          <td>228 coins</td>
          <td>23.02.2014</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection