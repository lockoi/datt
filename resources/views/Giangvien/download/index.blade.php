@extends('Giangvien.index')
@section('tieudetrang')
Nộp bài
@endsection
@section('noidung')
<div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th><input name="allbox" type="checkbox" id="allbox" onclick="CheckAll(this)"></th>
          <th>Ngày</th>
          <th>Lớp</th>
          <th>Môn</th>
          <th>Khóa</th>
        </tr>
        <tfoot>
          <th><input name="allbox" type="checkbox" id="allbox" onclick="CheckAll(this)"></th>
          <th>Ngày</th>
          <th>Lớp</th>
          <th>Môn</th>
          <th>Khóa</th>
        </tfoot>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" name="ids[]" value=""></td>
          <td>12/03/2022</td>
          <td>ncpc01011_lab1</td>
          <td>PHP 3</td>
          <td>Fall 2022</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="ids[]" value=""></td>
          <td>12/03/2022</td>
          <td>ncpc01011_lab1</td>
          <td>PHP 3</td>
          <td>Fall 2022</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="ids[]" value=""></td>
            <td>12/03/2022</td>
            <td>ncpc01011_lab1</td>
            <td>PHP 3</td>
            <td>Fall 2022</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="ids[]" value=""></td>
            <td>12/03/2022</td>
            <td>ncpc01011_lab1</td>
            <td>PHP 3</td>
            <td>Fall 2022</td>
          </tr>
      </tbody>
    </table>
    <button class="btn2"><i class="fa fa-download"></i> Download</button>
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
