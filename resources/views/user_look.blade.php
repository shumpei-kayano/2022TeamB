@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">ユーザー名</label>
    <input type="email" class="form-control" id="exampleFormControlInput1"style="width:200px;">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">自己紹介</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"style="width:450px; height:300px;"></textarea>

  </div>
  <table>
	<tbody>
		<tr>
			<th>趣味①</th>
			<th>趣味②</th>
			<th>趣味③</th>
		</tr>
		<tr>
			<td>
                </div>
                <div class="mb-3">
                    <label for="inputPassword2" class="visually-hidden"></label>
                    <input type="password" class="form-control" id="inputPassword2"style="width:150px;">
                </div>
            </td>
			<td>
                </div>
                <div class="mb-3">
                  <label for="inputPassword2" class="visually-hidden"></label>
                  <input type="password" class="form-control" id="inputPassword2"style="width:150px;">
                </div>
            </td>
			<td>
            </div>
                <div class="mb-3">
              <label for="inputPassword2" class="visually-hidden"></label>
              <input type="password" class="form-control" id="inputPassword2"style="width:150px;">
                </div>
            </td>
		</tr>
	</tbody>
</table>
  @endsection