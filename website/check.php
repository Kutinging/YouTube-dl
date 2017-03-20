<?php
	$kbps = $_GET['kbps'];
	$url = $_GET['url'];
	if(strrpos($url,"youtube")){
    	$id = explode("=",$url);
    }
	else if(strrpos($url,"youtu.be")){
    	$id = explode("youtu.be/",$url);
    }
	else{
    	
    }
	//echo $youtubeurl;
	if($url!=null && (strrpos($url,"youtube")||strrpos($url,"youtu.be"))){
    	shell_exec("youtube-dl --max-filesize 20M --extract-audio --audio-format mp3 --audio-quality $kbps -o'../mp3/%(id)s.%(ext)s' $url");
    	//header("Location: ./mp3/downloadfiles.php?file=".$id[1].".mp3");
    }
	else{
    	echo "Error url";
    	//header("Location: ./");
    }
?>

<html>
<script type="text/javascript">
seconds = 6;

function check(a,b){
	if(seconds <= 0 ){
		document.getElementById(b).innerHTML="開始下載 <meta http-equiv=\"refresh\" content=\"10;url=./\" \/>";
     	location.href="./mp3/downloadfiles.php?file=<?php echo $id[1] ?>";
	}
	else{
		seconds--;
		document.getElementById(b).innerHTML="正在取得連結<br/>"+ seconds+"秒";
		setTimeout(function(){check(a,b)}, 1000);
	}
}

window.onload=function(){
     check(seconds, 'countbox1');
};
</script>
 <div id="countbox1"></div>
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- youtube(check.php) -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-5441808858903508"
     data-ad-slot="7852351078"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</html>