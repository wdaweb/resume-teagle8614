<!-- 圖片管理-更新圖片-->
<div class="jumpBoxTop">更新圖片</div>
<div class="jumpBoxContent">
  <form action="api/upload.php" method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>上傳圖片</td>
        <td><input type="file" name="img"></td>
      </tr>
      <input type="hidden" name="id" value="<?=$_GET['id'];?>">
      <input type="hidden" name="table" value="<?=$_GET['table']?>">
    </table>
    <div class="btnGroup">
      <input class="btn btnOK" type="submit" value="確定">
      <input class="btn btnReset" type="reset" value="重置">
    </div>
  </form>
</div>