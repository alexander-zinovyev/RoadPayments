@extends('app')

@section('content')
@include('sidebar')
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
          @foreach ($payments as $payment)
            @if ($payment->status == 1)
            <tr class="danger">
            @elseif ($payment->status == -1)
            <tr class="warning">
            @else
            <tr>
            @endif
              <td>{{ $payment->created_at }}</td>
              <td>{{ $payment->coins }}</td>
              <td>
              @if ($payment->status == -1)
              В обработке
              @elseif ($payment->status == 0)
              Оплачен
              @else
              Возврат
              @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection