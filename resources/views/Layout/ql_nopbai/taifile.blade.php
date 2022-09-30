@extends('layout.index')
@section('tieudetrang')
Nộp bài
@endsection
@section('noidung')
<div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th><input name="allbox" type="checkbox" id="allbox" onclick="CheckAll(this)"></th>
          <th><input type="file"></th>
          <th>Ngày</th>
          <th>Link</th>
        </tr>
        <tfoot>
          <th><input name="allbox" type="checkbox" id="allbox" onclick="CheckAll(this)"></th>
          <th></th>
          <th>Ngày</th>
          <th>Link</th>
        </tfoot>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" name="ids[]" value=""></td>
          <td>ncpc01011_lab1</td>
          <td>12/03/2022</td>
          <td>http://www.fshare.vn/file/3Q7FC5GJ1B8U</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="ids[]" value=""></td>
          <td>ncpc01011_lab1</td>
          <td>12/03/2022</td>
          <td>http://www.fshare.vn/file/3Q7FC5GJ1B8U</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="ids[]" value=""></td>
          <td>ncpc01011_lab1</td>
          <td>12/03/2022</td>
          <td>http://www.fshare.vn/file/3Q7FC5GJ1B8U</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="ids[]" value=""></td>
          <td>ncpc01011_lab1</td>
          <td>12/03/2022</td>
          <td>http://www.fshare.vn/file/3Q7FC5GJ1B8U</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
<script>
function CheckAll(parent){
	var ids = document.getElementsByTagName('input');
	for(var i=0; i<ids.length; i++){
		if(ids[i].name == "ids[]"){
			ids[i].checked = parent.checked;
		}
	}
}
</script>
