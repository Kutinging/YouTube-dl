# YouTube-dl
系統:Centos 6.8<br/>
必要軟體:YouTube-dl . ffmpeg . Apache . php . python<br/>

<h1>Step1: 安裝 Python</h1>
YouTube-dl需要Python2.6,2.7,3.2+<br/>
<code>yum install python -y</code><br/>

<h1>Step2: 安裝 YouTube-dl</h1>
到這邊<a href="https://rg3.github.io/youtube-dl/download.html">YouTube-dl</a> 下載YouTube-dl<br/>
<code>sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/bin/youtube-dl<br/>
sudo chmod a+rx /usr/bin/youtube-dl</code><br/>
