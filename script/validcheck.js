function validcheck(){
  
  form = document.insertform;
  
  if(form.song_name.value==""){
    alert("곡 제목은 필수입력사항입니다");
    return false;
  }
  else if(form.song_artist.value==""){
    alert("아티스트는 필수입력사항입니다");
    return false;
  }
  else{
    return true;
  }
}
