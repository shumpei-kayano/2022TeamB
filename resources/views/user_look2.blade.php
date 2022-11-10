@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')

<table>
	<tbody>
		<tr>
			<th>店舗名</th>
			<td>
                <div class="col-auto">
                  <label for="inputPassword2" class="visually-hidden"></label>
                  <input type="password" class="form-control" id="inputPassword2"style="width:400px; height:220px;">
                </div>
            </td>
		</tr>
		<tr>
			<td>
                <div class="col-auto">
                  <label for="inputPassword2" class="visually-hidden"></label>
                  <input type="password" class="form-control" id="inputPassword2">
                </div>
            </td>
			<td></td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td></td>
		</tr>
		<tr>
			<td>
                <div class="col-auto">
                  <label for="inputPassword2" class="visually-hidden"></label>
                  <input type="password" class="form-control" id="inputPassword2">
                </div>
            </td>
			<td></td>
		</tr>
		<tr>
			<th>紹介文</th>
			<td></td>
		</tr>
		<tr>
			<th>
                <div class="col-auto">
                  <label for="inputPassword2" class="visually-hidden"></label>
                  <input type="password" class="form-control" id="inputPassword2">
                </div>
            </th>
			<td></td>
		</tr>
	</tbody>
</table>
@endsection