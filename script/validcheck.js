function validcheck(){
  
  form = document.insertform;
  
  if(form.song_name.value==""){
    alert("곡 제목은 필수입력사항입니다");
    location.reload();
  }
}
