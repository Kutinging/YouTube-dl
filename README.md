# YouTube-dl
系統:Centos 6.8<br/>
必要軟體:YouTube-dl . ffmpeg . Apache . php . python<br>

<h1>Step1: 安裝 Python</h1>
YouTube-dl需要Python2.6,2.7,3.2+<br>
<code>yum install python -y</code><br>

<h1>Step2: 安裝必要軟體</h1>
<h3>2-1 Youtube-dl</h3>
到這邊<a href="https://rg3.github.io/youtube-dl/download.html" target="_blank">YouTube-dl</a> 下載YouTube-dl<br>
<code>sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/bin/youtube-dl</code><br>
<code>sudo chmod a+rx /usr/bin/youtube-dl</code><br>
測試YouTube-dl是否正常運作<br>
<code>youtube-dl</code><br>
正常會回傳<br>
  Usage: youtube-dl [OPTIONS] URL [URL...]  
  
youtube-dl: error: You must provide at least one URL.  
    Type youtube-dl --help to see a list of all options.      
<h3>2-2 ffmpeg</h3>
從本專案中下載ffmpeg安裝腳本<a href="https://raw.githubusercontent.com/Kutinging/YouTube-dl/master/ffmpeg/latest-ffmpeg-centos6.sh" target="_blank">ffmpeg</a><br>
<code>sudo wget https://raw.githubusercontent.com/Kutinging/YouTube-dl/master/ffmpeg/latest-ffmpeg-centos6.sh</code><br>
<code>sudo chmod +x latest-ffmpeg-centos6.sh</code>  
<code>sudo ./latest-ffmpeg-centos6.sh</code>  
安裝完後到安裝的目錄底下查看bin資料夾  <br>
裡面包含ffmpeg,ffprobe等等檔案  <br>
將所有檔案複製到/bin/  <br>
<code>cp ffmpeg ffprobe ffserver lame vsyasm x264 yasm ytasm /bin/</code>  <br>
<h3>2-3 Apache,php</h3>
<code>yum install httpd php -y</code><br>
建議在安裝一個 Apache mod : ITK Multi-Processing Module<br>詳細安裝步驟不在此說明，需要安裝請到此查看如何安裝<br>
<a href="https://kttsite.com/apache-%E9%80%8F%E9%81%8E-itk-multi-processing-module-%E8%AE%93%E8%99%9B%E6%93%AC%E4%B8%BB%E6%A9%9F%E4%BB%A5%E4%B8%8D%E5%90%8C%E4%BD%BF%E7%94%A8%E8%80%85%E5%9F%B7%E8%A1%8C/" target="_blank">Apache 透過 ITK Multi-Processing Module 讓虛擬主機以不同使用者執行</a>
<h1>Step3: 網頁執行</h1>
網頁執行須要使用到php中的 shell_exec <br>
主要語法有:<br>
1.檢查網址:<br>
	
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
    
